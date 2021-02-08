<?php
session_start();
include_once 'header.php';
//return to login if not logged in

// if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
// 	header('location:index.php');
// }

//print_r($_SESSION["data"]);
// echo $_SESSION["id"];

include_once('Include/operation.php');

include_once('Include/dbconfig.php');

$batabase=new Database();
$db=$batabase->getConnection();

$op=new Operation($db);

$op->showDrivers();

if(isset($_POST["submit"])){
$op->addOrder($_POST);

}

?>



<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Elegant Contact Form</title>
<link rel="stylesheet" href="css/style.css">

<style>

</style>
</head>
<body>
<div class="container-lg">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="contact-form">
                <h1>Contact Us</h1>
                <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query or question.</p>       
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputName">إسم المستلم</label>
                                <input type="text" name="recipient_name" class="form-control" id="inputName" required>
                            </div>
                        </div>                
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">العنوان</label>
                                <input type="text" name="address" class="form-control" id="inputEmail" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPhone">رقم العاتف</label>
                                <input type="text" name="phone" class="form-control" id="inputPhone" required>
                            </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="inputSubject">المبلغ</label>
                        <input type="text" class="form-control" name="amount" id="inputSubject" required>
					</div>
					<div class="form-group">
                        <label for="inputSubject">الحالة</label>
                        <input type="text" class="form-control" name="status" id="inputSubject" required>
					</div>
					<div class="form-group">
                        <label for="inputSubject">المندوب</label>
                        <select name="drivers">
							<?php
							$list=$op->showDrivers();
							foreach($list as $l){
							?>
								<option  class="form-control" value='<?php echo $l["ID"]?>'><?php echo $l["Name"]?></option>
							<?php
							}
							?>
                        </select>
                    </div>
                  
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> إضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

