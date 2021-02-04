<?php


class Code{


    private $conn;

    public function __construct($db){

     
         $this->conn=$db;
    }


    public function registerUser($trade_name,$first_name,$last_name,$email,$phone,$address,$password,$create_date,$update_date){

        $pass=md5($password);

        $sql="INSERT INTO users(Trade_Name,First_Name,Last_Name,Email,Phone,Address,Password,Create_Date,Update_Date)
              values('$trade_name','$first_name','$last_name','$email',$phone,'$address','$pass','$create_date','$update_date')";
        $result=mysqli_query($this->conn,$sql) or die(mysqli_error());
        return $result;

    }

    public function login($email,$password){

        $pass=md5($password);
        $sql="SELECT * FROM users WHERE email='$email' and password='$pass'";
       
        $result=mysqli_query($this->conn,$sql);
        
        $data=mysqli_fetch_assoc($result);
        return $data;


    }

    


}


?>