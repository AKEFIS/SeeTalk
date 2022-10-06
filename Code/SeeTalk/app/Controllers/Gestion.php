<?php

namespace App\Controllers;

class Gestion extends BaseController{


    public function gestion_utilisateurs(){
        session_start();
        echo view("/template/header");
        echo view("/gestion_utilisateurs");
        echo view("/template/footer");
    }

    public function lister(){
        
    }

}



?>
