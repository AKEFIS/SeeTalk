<?php

namespace App\Controllers;

class Gestion extends BaseController{


    public function gestion_utilisateur($pages, $data){
        $data['title'] = "gestion_controller : ". ucfirst($pages);
        echo view("/template/header");
        echo view("/gestion_utilisateurs");
        echo view("/template/footer");
    }

    public function lister(){
        
    }

}



?>
