<?php
namespace App;

class View extends \Questwork\View
{

    public function __construct($template = '', $vars = [])
    {
        parent::__construct($template, $vars);
        $this->path = PATH_ROOT . '/view/default/';
    }

}
