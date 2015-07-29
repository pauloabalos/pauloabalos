<?php
use Questwork\Database;
use App\View;

class Page extends App\Controller
{
	public function main()
	{
		$view = new View('home');
		var_dump($view);
		return $view;
	}

	public function select()
	{
		$connect = Database::getConnect('master');
		$articles = $connect->select('news n', ['n.title AS name', 'n.content AS content'], [
			'n.id' => 2,
			'n.time >= 2015-07-05',
		]);
		var_dump($articles);
	}
}