<?php

class Operation{


    private $conn;

    public function __construct($db){
        $this->conn=$db;

    }



    public function addOrder($data){

         $sql="INSERT INTO orders (Recipient_Name,Phone,Address,Amount,Status) VALUES('$data[recipient_name]','$data[phone]','$data[address]',$data[amount],'$data[status]')";
         $result=mysqli_query($this->conn,$sql);


        print_r($data);

    }
}

?>