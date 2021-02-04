<?php


class Database{


    private $host="127.0.0.1";
    private $user="root";
    private $pass="";
    private $dbname="ps_tawseel";

    public $conn=null;

    public function getConnection(){

        $conn=mysqli_connect($this->host,$this->user,$this->pass,$this->dbname);

        if(!$conn){

            die("Error in DB Connection : ".mysqli_connect_error());

        }
        
      
        return $conn;
    }

}



?>