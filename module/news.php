<?php
use App\View;
use App\Controller;
use Questwork\Database;

class News extends Controller
{
	private $connect;
	
	public function __construct()
	{
		parent::__construct();
		$this->connect = Database::getConnect('master');
	}
	
	public function main()
	{
		$result = $this->connect->select('news', 'id, title, content, time');
		if ($result) {
			$articleList = [];
			foreach ($result as $article) {
				array_push($articleList, new View('article', ['article' => $article]));
			}
		} else {
			$articleList = ['No article found'];
		}

		return new View('news', ['articleList' => implode('', $articleList)]);
	}

	public function article($args)
	{
		print_r($args);
		// Make article detail here
	}

	public function page($args)
	{
		print_r($args);
		// Make paging here
	}
}