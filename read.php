<?php
include_once('Include/operation.php');

include_once('Include/dbconfig.php');

$batabase=new Database();
$db=$batabase->getConnection();

$op=new Operation($db);


if(isset($_GET["id"])){

    $id= $_GET["id"];

    $row=$op->showOneOrder($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row["ID"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $row["Recipient_Name"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p class="form-control-static"><?php echo $row["Phone"]; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>

                    <button>Export PDF</button>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>