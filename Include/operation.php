<?php


include_once "Lib/fpdf.php";

class Operation{


    private $conn;

    public function __construct($db){
        $this->conn=$db;

    }



    public function addOrder($data){

         $sql="INSERT INTO orders (Recipient_Name,Phone,Address,Amount,Status) VALUES('$data[recipient_name]','$data[phone]','$data[address]',$data[amount],'$data[status]')";
         $result=mysqli_query($this->conn,$sql);
         $this->createInvoice();

    }

    public function createInvoice(){
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Hello World!');
        $pdf->Output('D','ddd.pdf');

    }


    
        


        
     

       
     





  
       
        



    }


?>