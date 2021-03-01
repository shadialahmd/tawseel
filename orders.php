<?php

session_start();
include_once 'header.php';
?>


<html>
    <head>

    <style>
          .container-fluid {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
  }
  .mt--7 {
    margin-top: 10px !important;
  }
    </style>
</head>
<body>

<div class="container-fluid mt--7">
        <div class="row">
          <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <!--<img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="rounded-circle">-->

                        <h3>filters</h3>
                      <!--<img src="<?php echo $imageURL; ?>" class="rounded-circle"> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
         

                  <form action="" method="post">
                       <div class="form-group">
                        <label for="Name">Name</label>
                        <input  type="text" class="input" value="<?php echo isset($_POST['submit'])? $_POST['rname'] : '';?>" name="rname">
                       </div>
                       <div class="form-group">
                        <label for="Name">Source language</label>
                        <input  type="text" class="input" Name="Source">
                       </div>
                       <div class="form-group">
                        <label for="Name">Target language</label>
                        <input type="text" class="input" Name="Target">
                       </div>
                       <div class="form-group">
                        <label for="Name">Location</label>
                        <input type="text" class="input" Name="Location">
                       </div>
                       <div class="form-group">
                        <label for="Name">Date</label>
                        <input type="text" class="input" Name="Date">
                       </div>
                       <div class="form-group">
                        <label for="Name">From</label>
                        <input type="text"class="input" Name="From">
                       </div>
                       <div class="form-group">
                        <label for="Name">To</label>
                        <input type="text" class="input" Name="To">
                       </div>
                       <button type="submit" name="submit" class="btn btn-default">Submit</button>
                       <button type="submit" name="clear" class="btn btn-default">clear</button>
                  </form>

                 
                </div>
              </div>
              <div class="card-body pt-0 pt-md-4">
             
                
                <div class="text-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Orders</h3>
                  </div>
                  <div class="col-4 text-right">
                    <a href="create.php" class="btn btn-sm btn-primary">Add</a>
                  </div>
                </div>
              </div>
              <div class="card-body">


              <?php

include_once('Include/operation.php');

include_once('Include/dbconfig.php');

$batabase=new Database();
$db=$batabase->getConnection();

$op=new Operation($db);

//    $d=$op->showOrders();

if(isset($_POST['submit'])){
    
   
    $dd=$op->showOneOrder($_POST['rname']);
   
    print_r($dd);

    $xx= sizeof($dd);
    // var_dump($xx);
    // echo 'sizeof = '. sizeof($dd);
    

    // /echo $dd[];


    //else{
        ?>
        <table class='table table-bordered table-striped'>
         <thead>
              <tr>
                 <th style="width: 6%">#</th>
                 <th style="width: 25%">Recipient Name</th>
                 <th style="width: 25%">Phone</th>
                 <th style="width: 25%">Address</th>
                 <th style="width: 25%">Amount</th>
                 <th style="width: 25%">Status</th>
                 <th style="width: 25%">Assign to</th>
               
                 <th >Action</th>
               </tr>
           </thead>
           <tbody>
            <?php
            foreach($dd as $row){
                ?>
                <tr>
                   <td><?php echo $row['ID']?></td>
                   <td><?php echo $row['Recipient_Name'] ?></td>
                   <td><?php echo $row['Phone'] ?></td>
                   <td><?php echo $row['Address'] ?></td>
                   <td><?php echo $row['Amount'] ?></td>
                   <td><?php echo $row['Status'] ?></td>
                   <td><?php echo $row['Assign_to'] ?></td>
                   <td>
                   <a href='read.php?id=<?php echo $row["ID"]?>' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                   <a href='update.php?id=<?php  echo $row["ID"] ?>' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                   <a href='delete.php?id=<?php echo $row["ID"] ?>' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                   </td>
                   </tr>
                <?php
            }
            echo "</tbody>";                            
        echo "</table>";

   // }


 

}

   else{
       
   $d=$op->showOrders();
  // print_r($d);
   

?>
    <table class='table table-bordered table-striped'>
     <thead>
          <tr>
             <th style="width: 6%">#</th>
             <th style="width: 25%">Recipient Name</th>
             <th style="width: 25%">Phone</th>
             <th style="width: 25%">Address</th>
             <th style="width: 25%">Amount</th>
             <th style="width: 25%">Status</th>
             <th style="width: 25%">Assign to</th>
           
             <th >Action</th>
           </tr>
       </thead>
       <tbody>
        <?php
        foreach($d as $row){
            ?>
            <tr>
               <td><?php echo $row['ID']?></td>
               <td><?php echo $row['Recipient_Name'] ?></td>
               <td><?php echo $row['Phone'] ?></td>
               <td><?php echo $row['Address'] ?></td>
               <td><?php echo $row['Amount'] ?></td>
               <td><?php echo $row['Status'] ?></td>
               <td><?php echo $row['Assign_to'] ?></td>
               <td>
               <a href='read.php?id=<?php echo $row["ID"]?>' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
               <a href='update.php?id=<?php  echo $row["ID"] ?>' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
               <a href='delete.php?id=<?php echo $row["ID"] ?>' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
               </td>
               </tr>
            <?php
        }
        echo "</tbody>";                            
    echo "</table>";
   }

?>
            
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>