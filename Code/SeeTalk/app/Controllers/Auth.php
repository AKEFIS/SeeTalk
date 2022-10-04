<?php

namespace App\Controllers;

class Auth extends BaseController{


    public function login($pages, $data){
        
        echo view("/template/header");
        echo view("/login");
        echo view("/template/footer");
    }

    public function inscription()
    {
        echo view('template/header');
        echo view('inscription');
        echo view('template/footer');
    }
}



?>
