<?php
session_start();
//return to login if not logged in

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')){
	header('location:index.php');
}

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
<!DOCTYPE html>
<html>
<head>
	<title>تسجيل طلب توصيل جديد</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">تسجيل طلب توصيل جديد</h1>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
		<form id="submitForm" method="post" action="">
      
	  <div class="form-group">
		  <label for="name">إسم المستلم</label>
		  <input type="text" class="form-control" name="recipient_name" placeholder="أدخل الإسم التجاري" >
		</div>
	  <div class="form-group">
		  <label for="name">العنوان</label>
		  <input type="text" class="form-control" name="phone" placeholder="الإسم الأول" >
		</div>
		<div class="form-group">  
		  <label for="mobile">رقم العاتف</label>
		  <input type="text" class="form-control" name="address" placeholder="إسم العائلة" >
		</div>
		<div class="form-group">  
		  <label for="nmail">المبلغ</label>
		  <input type="text" class="form-control" name="amount" placeholder="ادخل البريد الإلكتروني" >
		</div>
		<div class="form-group">  
		  <label for="nmail">الحالة</label>
		  <input type="text" class="form-control" name="status" placeholder="كلمة المرور" >
		</div>

		<div class="form-group">  
		  <label for="driver10">السائق</label>
		  <select name="driver10">


		  

		  <?php
		  $list=$op->showDrivers();

		  foreach($list as $l){

			?>
			<option value='<?php echo $l["ID"]?>'><?php echo $l["Name"]?></option>
			<?php
		  }
		 
		  
		  ?>

		
		
          </select>
		</div>



		<div class="form-group">  
		  <label for="nmail">السائق</label>
		  <select name="driver">
			  <option value="Ali">Ali</option>
			  <option value="Adam">Adam</option>
          </select>
		</div>

	
		<div class="form-group">
		  <p>Already have account ?<a href="login.php"> Login</a></p>
		  <button type="submit"  name="submit" class="btn btn-primary">Sign Up</button>
		</div>
	  </form>
		</div>
	</div>
</div>
</body>
</html>