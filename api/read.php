<?php
header("Content-type:application/json");

include_once '../Include/dbconfig.php';

class Read{

    private $conn;

    public function __construct($db){

        $this->conn=$db;

    }

    public function read(){

        $sql="select * from driver";
        $result=mysqli_query($this->conn,$sql);
        




        $data=array();

        while($row=mysqli_fetch_assoc($result)){

            $data[]=$row;

        }

         return $data;
    }

}














$database=new Database();

$db=$database->getConnection();

$r=new Read($db);
print_r(json_encode($r->read()) );



// $con = mysqli_connect("127.0.0.1", "root", "", "ps_tawseel");

// if(!$con){
// die('Could not connect: '.mysqli_error($con));
// }

// $result = mysqli_query($con, "SELECT * FROM driver");

// while($row = mysqli_fetch_assoc($result)){
// $output[]=$row;
// }

// // print_r($output);
// // echo "<br>";

// print(json_encode($output, JSON_PRETTY_PRINT));

//mysqli_close($con);

?>