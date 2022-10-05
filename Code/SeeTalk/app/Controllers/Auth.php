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
        $login = $this->request->getVar('pseudo');
        $mdp = $this->request->getVar('mdp');
        $bd = new Utilisateur();
        $query = 'select * from UTILISATEUR where (pseudo = :pseudo: or email = :email:) and password = :password:;';
        if (preg_match('^@^', $login)) {
            $result = $bd->query($query, [
                'pseudo' => '',
                'email' => $login,
                'password' => $mdp,
            ])->getRowArray();
        } else {
            $result = $bd->query($query, [
                'pseudo' => $login,
                'email' => '',
                'password' => $mdp,
            ])->getRowArray();
        }

        if ($result) {
            session_start();
            $_SESSION['pseudo'] = $login;
            $_SESSION['grade'] = $result['GRADE'];
            $_SESSION['nom'] = $result['NOM'];
            $_SESSION['prenom'] = $result['PRENOM'];
            $_SESSION['societe'] = $result['SOCIETE'];
            $_SESSION['bio'] = $result['BIO'];
            $_SESSION['email'] = $result['EMAIL'];
            $_SESSION['telephone'] = $result['TELEPHONE'];
            $_SESSION['img'] = $result['IMG'];
            $_SESSION['grade'] = $result['GRADE'];
            return redirect()->to(base_url('accueil'));
        }
    }

    public function logout()
    {
        session_start();
        $_SESSION = [];
        session_destroy();
        return redirect()->to(base_url('accueil'));
    }

    public function inscription()
    {
        echo view('template/header');
        echo view('inscription');
        echo view('template/footer');
    }

    public function postInscription()
    {
        $pseudo = $this->request->getVar('pseudo');
        $email = $this->request->getVar('email');
        $mdp = $this->request->getVar('mdp');
        $verify_mdp = $this->request->getVar('verify-mdp');

        $bd = new Utilisateur();
        $query = 'insert into UTILISATEUR (pseudo, password, email) values (:pseudo:, :password:, :email:)';
        $bd->query($query, [
            'pseudo' => $pseudo,
            'password' => $mdp,
            'email' => $email,
        ]);
        return redirect()->to(base_url('accueil'));
    }
}
