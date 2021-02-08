<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration & Login with Email OTP verification using Jquery AJAX with PHP Mysql</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
</head>
<body>

<div class="card text-center" style="padding:20px;">
  <h3>Create</h3>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
      <div class="col-md-6">        
        <form id="submitForm" method="post" action="">
      
        <div class="form-group">
            <label for="name">الإسم التجاري:</label>
            <input type="text" class="form-control" name="trade_name" placeholder="أدخل الإسم التجاري" >
          </div>
        <div class="form-group">
            <label for="name">الإسم الأول</label>
            <input type="text" class="form-control" name="first_name" placeholder="الإسم الأول" >
          </div>
          <div class="form-group">  
            <label for="mobile">إسم العائلة</label>
            <input type="text" class="form-control" name="last_name" placeholder="إسم العائلة" >
          </div>
          <div class="form-group">  
            <label for="nmail">البريد الإلكتروني</label>
            <input type="text" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" >
          </div>
          <div class="form-group">  
            <label for="nmail">كلمة المرور</label>
            <input type="text" class="form-control" name="password" placeholder="كلمة المرور" >
          </div>
          <div class="form-group">  
            <label for="nmail">رقم الهاتف</label>
            <input type="text" class="form-control" name="phone" placeholder="أدخل رقم الهاتف" >
          </div>
          <div class="form-group">  
            <label for="nmail">العنوان</label>
            <input type="text" class="form-control" name="address" placeholder="أدخل العنوان" >
          </div>
          <div class="form-group">
            <p>Already have account ?<a href="login.php"> Login</a></p>
            <button type="submit"  name="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>
      </div>
  </div>
</div>

<?php

include_once 'Include/dbconfig.php';
include_once 'code.php';

$DataBase=new Database();
$DB=$DataBase->getConnection();

$op=new Code($DB);
$d=getdate();
$updatedate= date("Y-m-d H:i:s") ;
$createdate=date("Y-m-d H:i:s");


if(isset($_POST["submit"])){
  $add=$op->registerUser($_POST["trade_name"],$_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["password"],$_POST["phone"],$_POST["address"],$createdate,$updatedate);
  if($add){
    echo 'addedd';
  }
}



?>

</body>
</html>