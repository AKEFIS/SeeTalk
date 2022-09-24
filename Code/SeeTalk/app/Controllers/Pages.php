<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function accueil()
    {
        echo view('template/header');
        echo view('accueil');
        echo view('template/footer');
    }
    public function appel()
    {
        echo view('template/header');
        echo view('appel');
        echo view('template/footer');
    }
    public function gestion_utilisateurs()
    {
        echo view('template/header');
        echo view('gestion_utilisateurs');
        echo view('template/footer');
    }
    public function inscription()
    {
        echo view('template/header');
        echo view('inscription');
        echo view('template/footer');
    }
    public function login()
    {
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }
    public function mesreunions()
    {
        echo view('template/header');
        echo view('mesreunions');
        echo view('template/footer');
    }
}
