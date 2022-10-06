<?php

namespace App\Controllers;

use App\Models\Utilisateur;

class Pages extends BaseController
{
    public function accueil()
    {
        session_start();
        echo view('template/header');
        echo view('accueil');
        echo view('template/footer');
    }
    public function appel()
    {
        session_start();
        echo view('template/header');
        echo view('appel');
        echo view('template/footer');
    }
  
    public function inscription()
    {
        session_start();
        echo view('template/header');
        echo view('inscription');
        echo view('template/footer');
    }
    public function login()
    {
        session_start();
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }
    public function mesreunions()
    {
        session_start();
        echo view('template/header');
        echo view('mesreunions');
        echo view('template/footer');
    }

    public function add_contact()
    {
        session_start();
        echo view('template/header');
        echo view('add_contact');
        echo view('template/footer');
    }

    public function creation()
    {
        session_start();
        echo view('template/header');
        echo view('creation');
        echo view('template/footer');
    }

    public function fiche_user()
    {
        session_start();
        echo view('template/header');
        echo view('fiche_user');
        echo view('template/footer');
    }

    public function group()
    {
        session_start();
        echo view('template/header');
        echo view('group');
        echo view('template/footer');
    }
}
