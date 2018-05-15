<?php
class DataBase
{
    private $dns = "mysql:host=localhost;dbname=wikikit;charset=utf8;";
    private $user = "max-user";
    private $pass = "yu0802ya";

    
    public function getPdo(){
        $pdo = new PDO($this->dns,$this->user,$this->pass);
        return $pdo;
    }

}
