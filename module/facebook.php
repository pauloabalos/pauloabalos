<?php
use App\View;
use App\Controller;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookRequestException;

class Facebook extends Controller
{
	public function main()
	{
		FacebookSession::setDefaultApplication('191822451001070','24b1abb363e3a66e9108d685b2ece90d');
		
		return new View('facebook');
	}
}