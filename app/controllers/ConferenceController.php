<?php

namespace app\controllers;

use app\core\BaseView;
use app\models\Conference;
use app\models\Country;
use app\core\BaseController;

class ConferenceController extends BaseController
{
    private $conferenceModel;
    private $countryModel;

    function __construct()
    {
        $this->view = new BaseView();
        $this->conferenceModel = new Conference();
        $this->countryModel = new Country();

    }

    public function index()
    {
        $conferences = $this->conferenceModel->all();

        $this->view->generate('index.php', 'layout.php', ['conferences' => $conferences]);
    }

    public function create()
    {
        $countries = $this->countryModel->all();

        $this->view->generate('create.php', 'layout.php', ['countries' => $countries]);
    }

    public function store()
    {
        var_dump($_POST);

        $this->view->redirect();
    }
}