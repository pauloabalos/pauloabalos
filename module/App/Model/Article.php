<?php
/**
 * Article Model
 */
namespace App\Model;

class Article extends \Questwork\Model
{
	protected $table = 'article';

	protected $primary = 'id';

    protected $hasOne = [
    	'author' => '\\Model\\Author',
    	'category' => ['\\Model\\Category', 'cat_id']
    ];

    protected $hasMany = [
    	'comments' => '\\Model\\Comment',
    	'tags' => ['\\Model\\Tag', 'article_tab']
    ];

    public function rssTime()
    {
        return (new \DateTime($this->time))->format(\DateTime::RSS);
    }
}
