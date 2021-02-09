<?php


include_once "Lib/fpdf.php";

class Operation{


    private $conn;

    public function __construct($db){
        $this->conn=$db;

    }

    public function login($email,$password){

        $pass=md5($password);
         $sql="SELECT * FROM users WHERE email='$email' and password='$pass'";
       
        $result=mysqli_query($this->conn,$sql);
        
        $data=mysqli_fetch_assoc($result);
        return $data;


    }




    public function addOrder($data){

         $sql="INSERT INTO orders (Recipient_Name,Phone,Address,Amount,Status,Assign_to)
         VALUES('$data[recipient_name]','$data[phone]','$data[address]',$data[amount],'$data[status]','$data[drivers]')";
         $result=mysqli_query($this->conn,$sql);
        
         // $this->createInvoice();

    }

    public function showDrivers(){
        $sql="SELECT * FROM driver WHERE Status='Active'";
        $result=mysqli_query($this->conn,$sql);

        //$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
        
        // first way    
        // while($data = mysqli_fetch_array($result))
        // {
        //     echo "<option value='". $data['ID'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
        // }

        //second way
        $data= array();
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;

        }

        return $data;


    }



    public function showOrders(){

        $sql="SELECT * FROM orders";
        $result=mysqli_query($this->conn,$sql);


        $date=array();
        while($row=mysqli_fetch_assoc($result)){

            $data[]=$row;

        }
        return $data;
    }

    public function showOneOrder($id){

            $sql="SELECT  *  FROM orders WHERE ID=$id";
            $result=mysqli_query($this->conn,$sql);
            $data=mysqli_fetch_assoc($result);
            return $data;

    }

    public function createInvoice(){
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'invoce!');
        $pdf->Output();
        //$pdf->Output('D','ddd.pdf');

    }


    
        


        
     

       
     





  
       
        



    }


?>