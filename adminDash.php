<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Show Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New </a>
                    </div>
                    <?php

                        include_once('Include/operation.php');

                        include_once('Include/dbconfig.php');

                        $batabase=new Database();
                        $db=$batabase->getConnection();

                        $op=new Operation($db);
                       
                           $d=$op->showOrders();
                           print_r($d);

                   ?>
                            <table class='table table-bordered table-striped'>
                             <thead>
                                  <tr>
                                  <th>#</th>
                                      <th>Name</th>
                                       <th>Address</th>
                                        <th>Salary</th>
                                       <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
<?php
                                foreach($d as $row){
                                    echo "<tr>";
                                        echo "<td>" . $row['ID'] . "</td>";
                                        echo "<td>" . $row['Recipient_Name'] . "</td>";
                                        echo "<td>" . $row['Phone'] . "</td>";
                                        echo "<td>" . $row['Amount'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                    //         // Free result set
                    //         mysqli_free_result($result);
                    //     } else{
                    //         echo "<p class='lead'><em>No records were found.</em></p>";
                    //     }
                    // } else{
                    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    // }
 
                    // // Close connection
                    // mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>