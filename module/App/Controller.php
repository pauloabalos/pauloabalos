<?php
namespace App;

use Questwork\App;

class Controller extends \Questwork\Controller
{
	public function __construct()
	{
		$params = [
			'title' => 'Questwork Skeleton Application',
			'base' => App::baseURL()
		];
		$this->view = new View('main', $params);
	}
}