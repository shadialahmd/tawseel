<?php


include_once "Lib/fpdf.php";

class Operation{


    private $conn;

    public function __construct($db){
        $this->conn=$db;

    }
    
    public function registerUser($trade_name,$first_name,$last_name,$email,$phone,$address,$password,$create_date,$update_date){

        $pass=md5($password);
        $sql0="SELECT * FROM users WHERE email='$email'";
        $result0=mysqli_query($this->conn,$sql0);
        $currentdate=date("Y-M-D H:i:S");
        
        if(mysqli_num_rows($result0)==0){
            $sql="INSERT INTO users(Trade_Name,First_Name,Last_Name,Email,Phone,Address,Password,Create_Date,Update_Date)
            values('$trade_name','$first_name','$last_name','$email',$phone,'$address','$pass','$create_date','$update_date')";
            $result=mysqli_query($this->conn,$sql) or die("Error".mysqli_error($result));
            
            $this->log($currentdate);
            $this->log("User Regestered");
           
            return $result;

        }


    }

    public function login($email,$password){

         $pass=md5($password);
         $sql="SELECT * FROM users WHERE email='$email' and password='$pass'";
         $result=mysqli_query($this->conn,$sql);
         $data=mysqli_fetch_assoc($result);
         $num=mysqli_num_rows($result);
         $currentdate=date("Y-M-D H:i:S");
         if($num==1){
            $this->log($currentdate);
            $this->log("Login successfully User ID =".$data['ID']);
            return $data;

           
         }
    }




    public function addOrder($data){

         $sql="INSERT INTO orders (Recipient_Name,Phone,Address,Amount,Status,Assign_to)
         VALUES('$data[recipient_name]','$data[phone]','$data[address]',$data[amount],'$data[status]','$data[drivers]')";
         $result=mysqli_query($this->conn,$sql);
        
         // $this->createInvoice();

    }


    // Drivers
    public function showDrivers(){
        $sql="SELECT * FROM driver WHERE Status='Active'";
        $result=mysqli_query($this->conn,$sql);


        
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
    public function showAllDrivers(){
        $sql="SELECT * FROM driver";
        $result=mysqli_query($this->conn,$sql);

        $date=array();

        while($row=mysqli_fetch_assoc($result)){

            $data[]=$row;
        }

        return $data;
    }

    public function searchDrivers($name){

        $sql="SELECT  *  FROM driver WHERE Name like '%$name%' ";
       
     
      $result=mysqli_query($this->conn,$sql);
         $f=array();

            while( $data=mysqli_fetch_assoc($result))
          {

              $f[]=$data;
          }
          return $f;

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







    public function showOneOrder($name){

              $sql="SELECT  *  FROM orders WHERE Recipient_Name like '%$name%' ";
             
           
            $result=mysqli_query($this->conn,$sql);
               $f=array();

                  while( $data=mysqli_fetch_assoc($result))
                {

                    $f[]=$data;
                }
                return $f;
            
            
            
            // $data=mysqli_fetch_assoc($result);

           // $num=mysqli_num_rows($result);

            // $f=array();

            // if(mysqli_num_rows($result)==1){
           

            //     $data=mysqli_fetch_assoc($result);
          
            //     return $data;
            // }
            // else{
            //     while( $data=mysqli_fetch_assoc($result))
            //     {

            //         $f[]=$data;
            //     }
            //     return $f;

                
            // }


            

    }




    public function log($data){

       $myfile=fopen("log.txt","a") or die("unable to open file !!");
       fwrite($myfile,$data."\n");


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