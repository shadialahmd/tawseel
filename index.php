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
        <form id="submitForm">
      
        <div class="form-group">
            <label for="name">الإسم التجاري:</label>
            <input type="text" class="form-control" name="trade_name" placeholder="أدخل الإسم التجاري" required="">
          </div>
        <div class="form-group">
            <label for="name">الإسم الأول</label>
            <input type="text" class="form-control" name="first_name" placeholder="الإسم الأول" required="">
          </div>
          <div class="form-group">  
            <label for="mobile">إسم العائلة</label>
            <input type="text" class="form-control" name="last_name" placeholder="إسم العائلة" required="">
          </div>
          <div class="form-group">  
            <label for="nmail">البريد الإلكتروني</label>
            <input type="text" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" required="">
          </div>
          <div class="form-group">  
            <label for="nmail">كلمة المرور</label>
            <input type="text" class="form-control" name="password" placeholder="كلمة المرور" required="">
          </div>
          <div class="form-group">  
            <label for="nmail">رقم الهاتف</label>
            <input type="text" class="form-control" name="phone" placeholder="أدخل رقم الهاتف" required="">
          </div>
          <div class="form-group">  
            <label for="nmail">العنوان</label>
            <input type="text" class="form-control" name="address" placeholder="أدخل العنوان" required="">
          </div>
          <div class="form-group">
            <p>Already have account ?<a href="login.php"> Login</a></p>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </div>
        </form>
      </div>
  </div>
</div>

<!--<script type="text/javascript">
  $(document).ready(function(){
    $("#submitForm").on("submit", function(e){
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url  : "signup.php",
        type : "POST",
        cache:false,
        data : formData,
        success:function(result){
          if (result == "yes") {
            alert("Registration sucessfully Please login");
            window.location ='login.php';          
          }else{
            alert("Registration failed try again!");
          }          
        }
      });  
    });    
  });
</script>-->
</body>
</html>