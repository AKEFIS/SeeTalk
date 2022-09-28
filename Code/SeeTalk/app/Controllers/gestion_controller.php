<?php

namespace App\Controllers;

class gestion_Controller extends BaseController{


    public function index($pages, $data){
        $data['title'] = "gestion_controller : ". ucfirst($pages);
        echo view("/template/header");
        echo view("/gestion_utilisateurs");
        echo view("/template/footer");
    }

    public function lister(){
        
    }

}



?>
