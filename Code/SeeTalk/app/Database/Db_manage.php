<?php


class Db_manage{

    private $request = "";
    private $bdd_name = "";
    private $bdd_host = "";
    private $user_name = "";
    private $user_pass = "";

    public function __construct($host, $bname, $name, $pass)
    {
        $this->bdd_host = $host;
        $this->bdd_name = $bname;
        $this->user_name = $name;
        $this->user_pass = $pass;
    }


    public function select($table, $element = []){
        
    }

}


?>