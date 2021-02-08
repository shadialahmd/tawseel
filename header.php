<?php

//session_start();

// print_r($_SESSION["data"]);
// print_r($_SESSION["data"]);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap All in One Navbar</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head> 
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
	<a href="#" class="navbar-brand"><i class="fa fa-cube"></i>Brand<b>Name</b></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="#" class="nav-item nav-link active">الرئيسية</a>
			<a href="#" class="nav-item nav-link">الطلبات</a>
			<a href="#" class="nav-link nav-link" >المناديب</a>
		
		</div>

		<?php 
		
		if(isset($_SESSION["data"]["Trade_Name"])){

			?>
					<div class="navbar-nav ml-auto">
			<a href="#" class="nav-item nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">1</span></a>
			<a href="#" class="nav-item nav-link messages"><i class="fa fa-envelope-o"></i><span class="badge">10</span></a></a>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><?php echo $_SESSION["data"]["Trade_Name"]?> <b class="caret"></b></a>
				<div class="dropdown-menu">
					<a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></a>
					<a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a>
					<a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a>
					<div class="dropdown-divider"></div>
					<a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></a>
				</div>
			</div>
		</div>

			<?php
		}
		
		?>

	</div>
</nav>
</body>
</html>                            