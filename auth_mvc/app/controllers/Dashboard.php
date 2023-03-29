<?php

namespace App\controllers;
use App\core;


class Dashboard extends core\Controller{

    public function index(){
        $this->view->generate('dashboard/index.phtml', 'template.phtml');
        // $this->view->generate('auth/login.phtml', 'template.phtml');
    }
}