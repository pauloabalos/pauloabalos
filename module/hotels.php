<?php

use App\View;
use App\Controller;

class Hotels extends Controller
{

    public function main()
    {
        $home = new View('home');
        return new View('hotels');
    }

}
