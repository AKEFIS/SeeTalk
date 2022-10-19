<?php

namespace App\Controllers;

use App\Models\Utilisateur;

class Auth extends BaseController
{


    public function login()
    {
        echo view("/template/header");
        echo view("/login");
        echo view("/template/footer");
    }

    public function postLogin()
    {
        $session = session();
        $login = $this->request->getVar('pseudo');
        $mdp = $this->request->getVar('mdp');
        $bd = new Utilisateur();
        $query = 'select * from UTILISATEUR where (pseudo = :pseudo: or email = :email:) and validation = 1;';
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

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function inscription()
    {
        $session = session();
        $data['session'] = $session;
        echo view('template/header');
        echo view('inscription', $data);
        echo view('template/footer');
    }

    public function postInscription()
    {
        $pseudo = $this->request->getVar('pseudo');
        $email = $this->request->getVar('email');
        $mdp = $this->request->getVar('mdp');
        $img = $this->request->getVar('img');
        $nom = $this->request->getVar('nom');
        $prenom = $this->request->getVar('prenom');
        $societe = $this->request->getVar('societe');
        $telephone = $this->request->getVar('telephone');
        $bio = $this->request->getVar('bio');
        $grade = $this->request->getVar('grade');

        $bd = new Utilisateur();
        $query = 'insert into UTILISATEUR (pseudo, nom, prenom, password, societe, bio, email, telephone, img, grade) values (:pseudo:, :nom:, :prenom:, :password:, :societe:, :bio:, :email:, :telephone:, :img:, :grade:)';
        $bd->query($query, [
            'pseudo' => $pseudo,
            'nom' => $nom,
            'prenom' => $prenom,
            'password' => $mdp,
            'email' => $email,
        ]);
        return redirect()->to(base_url('/accueil'));
    }

    public function validation()
    {
        $bd = new Utilisateur();
        $data['users0'] = $bd->query("SELECT id_user, pseudo, nom, prenom, email, telephone FROM UTILISATEUR WHERE VALIDATION = 5")->getResultArray();
        echo view("validation", $data);
    }
}
