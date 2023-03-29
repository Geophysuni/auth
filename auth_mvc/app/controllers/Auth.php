<?php
namespace App\controllers;
use App\core;

class Auth extends core\Controller{
    public function __construct(){
        parent::__construct();
    }

    public function login(){
        $this->view->generate('auth/login.phtml', 'template.phtml');
    }

    public function register(){
        $this->view->generate('auth/reg.phtml', 'template.phtml');
    }

    public function success(){
        $this->view->generate('auth/success.phtml', 'template.phtml');
    }

    public function logout(){
        $this->view->generate('auth/logout.phtml', 'template.phtml');
    }



}