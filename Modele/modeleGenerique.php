<?php

class ModeleGenerique{

    protected $pdo;

    public function  __construct(){
        
       if($this->pdo = new PDO("mysql:host=localhost;dbname=foot", "root", "", [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC])){
            } else{
            echo "pas de connextion";
            }
                       
    }
}
