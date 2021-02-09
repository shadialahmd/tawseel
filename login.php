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
        <h2 class="text-center">Sign in</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="email" placeholder="Username" required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="pass" placeholder="Password" required="required">				
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary login-btn btn-block">Sign in</button>
        </div>
        <div class="clearfix">
            <!-- <label class="float-left form-check-label"><input type="checkbox"> Remember me</label> -->
            <!-- <a href="#" class="float-right">Forgot Password?</a> -->
        </div>
		<div class="or-seperator"><i>or</i></div>
    <p class="text-center text-muted small">Don't have an account? <a href="signup.php">Sign up here!</a></p>
    <p class="text-center text-muted small"><a href="#">Forgot Password?</a></p>
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

//$userData=array();

if(isset($_POST["submit"])){


   $login=$op->login($_POST["email"],$_POST["pass"]);

  // $userData[]=$login;
//    print_r($login);
//    die;

   $_SESSION["data"]=$login;


   ?>
   <script type="text/javascript">
alert("Successfull Login.");
window.location = "home.php";
</script>
   <?php
}
?>

