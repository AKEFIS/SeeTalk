<?php

namespace App\Controllers;

use App\Models\Utilisateur;

class Pages extends BaseController
{
    public function accueil()
    {
        //test du model (ca marche)
        $users = new Utilisateur();
        $data = [];
        $data['users'] = $users->findAll();

        echo view('template/header');
        echo view('accueil', $data);
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

    public function add_contact()
    {
        echo view('template/header');
        echo view('add_contact');
        echo view('template/footer');
    }

    public function creation()
    {
        echo view('template/header');
        echo view('creation');
        echo view('template/footer');
    }

    public function fiche_user()
    {
        echo view('template/header');
        echo view('fiche_user');
        echo view('template/footer');
    }

    public function group()
    {
        echo view('template/header');
        echo view('group');
        echo view('template/footer');
    }
}
