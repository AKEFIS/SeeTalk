<?php

namespace App\Controllers;
use App\Models\Utilisateur;

class Gestion extends BaseController{


    public function gestion_utilisateurs(){
        $db = new Utilisateur();
        $query = 'select * from UTILISATEUR';
        $data['utilisateurs'] = $db->query($query)->getResultArray();

        echo view("/template/header");
        echo view("/gestion_utilisateurs", $data);
        echo view("/template/footer");
    }

    public function supprimerUtilisateur(){
        $db = new Utilisateur();
        $query = 'delete from UTILISATEUR where ID_USER = :id:';
        $db->query($query, [
            'id' => $this->request->getVar('id'),
        ]);
        return redirect()->to(base_url('gestion_utilisateurs'));
    }


}
