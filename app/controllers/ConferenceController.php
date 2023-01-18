<?php

namespace app\controllers;

use app\core\BaseView;
use app\core\Request;
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
        Conference::add(Request::getPostParam());

        $this->view->redirect();
    }

    public function edit()
    {

    }

    public function delete()
    {

        $this->conferenceModel->remove(Request::getPostParam()['slug']);

        $this->view->redirect();
    }

    public function about()
    {
        $conference = $this->conferenceModel->find(Request::getGetParam()['article']);
        echo $conference['title'];

    }
}