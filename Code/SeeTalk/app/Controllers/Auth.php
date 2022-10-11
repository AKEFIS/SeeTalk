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
        $query = 'select * from UTILISATEUR where pseudo = :pseudo: or email = :email:;';
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
            if ($mdp == $result['PASSWORD']){
                $session->set($result);
                $session->set(['isLoggedIn' => true]);
                return redirect()->to(base_url('accueil'));
            } else {
                $session->set(['isLoggedIn' => false]);
                return redirect()->to(base_url('login'));
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('accueil'));
    }

    public function inscription()
    {
        echo view('template/header');
        echo view('inscription');
        echo view('template/footer');
    }

    public function modifier($id){
        $data = [];
        $bd = new Utilisateur();
        $query = 'select * from UTILISATEUR where ID_USER = :id:';
        $result = $bd->query($query, ['id' => $id])->getRowArray();
        $data['user_data'] = $result;
        $data['titre'] = 'modifier ' . $result['PSEUDO'];
        echo view('template/header');
        echo view('inscription', $data);
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
