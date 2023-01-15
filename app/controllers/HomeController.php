<?php

namespace app\controllers;

use app\core\BaseController;

class HomeController extends BaseController
{

    public function index()
    {
        $this->view->generate('index.php', 'layout.php');
    }
}