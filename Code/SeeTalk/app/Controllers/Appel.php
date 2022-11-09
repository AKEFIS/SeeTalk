<?php

namespace App\Controllers;
use App\Models\Reunion;

class Appel extends BaseController{

    public function saisieMdp()
    {
        echo view('template/header');
        echo view('saisieMdp');
        echo view('template/footer');
    }

    public function connexionReunion(){
        $db= new Reunion;
        $postData = $this->request->getPost();
        $passreunion=$db->query('select PASSWORD from REUNION where PASSWORD = :pass:', ['password' => $postData['pass']])->getRowArray();
/*        if $passreunion ==  NUll
        {
            "La réunion n'existe pas";
            return redirect()->to(base_url('/accueil'));
        }
        if $passreunion != NULL and DATE_REUNION>DATE ACTUELLE
        {
            "La réunion n'a pas encore commencé";
            return redirect()->to(base_url('/accueil'));
        }
        if $passreunion != NULL and DATE_REUNION=<DATE ACTUELLE
        {
            join chatbox of  id_reunion where password de id_reunion= $postData['pass'];
            return redirect()->to(base_url('/accueil'));
        }*/
    }
    public function identificationUser(){    
    /*exemple connexionReunion:
        public function postLogin()
    {
        $session = session();
        $login = $this->request->getVar('pseudo');
        $mdp = $this->request->getVar('mdp');
        $bd = new Utilisateur();
        $query = 'select * from UTILISATEUR where pseudo = :pseudo: or email = :email: and validation = 1;';
        if (preg_match('^@^', $login)) {
            $result = $bd->query($query, [
                'pseudo' => '',
                'email' => $login,
            ])->getRowArray();
        } else {
            $result = $bd->query($query, [
                'pseudo' => $login,
                'email' => '',
            ])->getRowArray();
        }
        if (!empty($result)) {
            if ($mdp == $result['PASSWORD']) {
                $session->set($result);
                $session->set(['isLoggedIn' => true]);
                return redirect()->to(base_url('/accueil'));
            }
        } else {
            $session->set(['isLoggedIn' => false]);
            return redirect()->to(base_url('/login'));
        }
    }
    */
    }
}