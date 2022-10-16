<?php

namespace App\Controllers;

use App\Models\Utilisateur;
use App\Models\Inclure;

class Reunion extends BaseController
{
    public function creer_reunion()
    {
        $db = new Utilisateur();
        $query = "select * from UTILISATEUR where GRADE != 100";
        $result = $db->query($query)->getResultArray();
        $data['utilisateurs'] = $result;
        echo view('template/header');
        echo view('creer_reunion', $data);
        echo view('template/footer');
    }

    public function postCreer_reunion()
    {
        $db = new Utilisateur();
        $postData = $this->request->getPost();
        $query = "insert into REUNION (NOM, DATE_REUNION, PASSWORD) values (:nom:, :date:, :password:);";
        $db->query($query, [
            'nom' => $postData['group_name'],
            'date' => $postData['group_date'] . " " . $postData['group_time'],
            'password' => $postData['group_password'],
        ]);
        $members = json_decode($postData['json-members-list'], true);
        
        $reunion = $db->query('select ID_REUNION from REUNION where NOM = :nom:', ['nom' => $postData['group_name']])->getRowArray();

        $db = new Inclure();
        foreach($members as $member){
            $query = "INSERT INTO `INCLURE` (`ID_USER`, `ID_REUNION`) VALUES (:user:, :reunion:)";
            $db->query($query, [
                'user' => $member,
                'reunion' => $reunion,
        ]);
        }
        return redirect()->to(base_url('/accueil'));
    }

    public function mesreunions()
    {
        echo view('template/header');
        echo view('mesreunions');
        echo view('template/footer');
    }

    public function appel()
    {
        echo view('template/header');
        echo view('appel');
        echo view('template/footer');
    }
}
