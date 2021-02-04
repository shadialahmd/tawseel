<?php


class Users{


    private $conn;

    public function __construct($db){

        echo 'ok2';
         $this->conn=$db;
    }



    public function checkUserInfo($email,$password){

         $sql="SELECT * From users WHERE Email='$email' and Password='$password'";
        $result=mysqli_query($this->conn,$sql);
        $row=mysqli_fetch_assoc($result);
        

        if(mysqli_num_rows($result)>0){
            return $row;

        }

        else {
            return false;
        }

        
    
    
    }

}


?>