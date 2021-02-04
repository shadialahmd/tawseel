<?php
session_start();
//return to login if not logged in

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
	header('location:index.php');
}

include_once('code.php');

include_once('Include/dbconfig.php');

$batabase=new Database();
$db=$batabase->getConnection();



?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Login using OOP Approach</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">PHP Login using OOP Approach</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Welcome to Homepage </h2>
			<h4>User Info: </h4>
			<p>Name: <?php echo $data['First Name']; ?></p>
			<p>Username: <?php echo $data['Last Name']; ?></p>
			<p>Password: <?php echo $data['Email']; ?></p>
			<a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
		</div>
	</div>
</div>
</body>
</html>