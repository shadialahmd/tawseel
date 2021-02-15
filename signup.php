<?php

session_start();
include_once 'header.php';
?>


<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>

<style>

</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Sign Up</h2>   
    
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-address-book fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="trade_name" placeholder="الإسم التجاري" required="required">				
            </div>
        </div>

        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="first_name" placeholder="الإسم الأول" required="required">				
            </div>
        </div>


        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="last_name" placeholder="إسم العائلة" required="required">				
            </div>
        </div>


        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-envelope fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="email" placeholder="البريد الإلكتروني" required="required">				
            </div>
        </div>


        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-key fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="password" placeholder="كلمة المرور" required="required">				
            </div>
        </div>
    
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-phone fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="phone" placeholder="رقم الهاتف" required="required">				
            </div>
        </div>

        
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-map-marker fa-fw"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="address" placeholder="العنوان" required="required">				
            </div>
        </div>

       
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary login-btn btn-block">Sign in</button>
        </div>
        <div class="clearfix">

        </div>
		<div class="or-seperator"><i>or</i></div>
    <p class="text-center text-muted small"> have an account? <a href="index.php">Login here!</a></p>

       
    <div  style="display:none" id="ok" class="alert alert-success" role="alert">
 Ok
</div>

<div  style="display:none" id="error" class="alert alert-danger" role="alert">
email already exists
</div>
    
    </form>
  
</div>
</body>
</html>

<?php

include_once 'Include/dbconfig.php';
include_once 'Include/operation.php';


$DataBase=new Database();
$DB=$DataBase->getConnection();

$op=new Operation($DB);
$d=getdate();
$updatedate= date("Y-m-d H:i:s") ;
$createdate=date("Y-m-d H:i:s");


if(isset($_POST["submit"])){
  $add=$op->registerUser($_POST["trade_name"],$_POST["first_name"],$_POST["last_name"],$_POST["email"],$_POST["password"],$_POST["phone"],$_POST["address"],$createdate,$updatedate);
  if($add){
  //  echo 'addedd';

  ?>
  <script type="text/javascript">


$('#ok').fadeIn('slow');
$('#ok').delay(100).fadeOut(5000)



</script>
  <?php
  }
  else{
    ?>
      <script type="text/javascript">


$('#error').fadeIn('slow');
$('#error').delay(100).fadeOut(5000)



</script>
    <?php
  }
}
?>


