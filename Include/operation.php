<?php


include_once "Lib/fpdf.php";

class Operation{


    private $conn;

    public function __construct($db){
        $this->conn=$db;

    }



    public function addOrder($data){

         $sql="INSERT INTO orders (Recipient_Name,Phone,Address,Amount,Status,Assign_to)
         VALUES('$data[recipient_name]','$data[phone]','$data[address]',$data[amount],'$data[status]','$data[driver10]')";
         $result=mysqli_query($this->conn,$sql);
        
         // $this->createInvoice();

    }

    public function showDrivers(){
        $sql="SELECT * FROM driver";
        $result=mysqli_query($this->conn,$sql);

        //$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
        

        while($data = mysqli_fetch_array($result))
        {
            echo "<option value='". $data['ID'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
        }

    //  print_r($data);
    //  echo "<br/>";
    //  print_r($data[0]);
    //  echo "<br/>";
    //  print_r($data[1]);
    //  echo "<br/>";
    //  print_r($data[1]["ID"]);
     
        //return $data;
    }



    public function showOrders(){

        $sql="SELECT * FROM orders";
        $result=mysqli_query($this->conn,$sql);

        while($data=mysqli_fetch_assoc($result)){

            print_r($data);

        }
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