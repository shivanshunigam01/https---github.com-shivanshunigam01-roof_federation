<?php 
include("config.php");
session_start();
$error='';
if(isset($_POST['login_admin'])){
    
$username = $_POST['username'];
$password= $_POST['password']; 
 
  if($username == 'admin@rooffederation.com' && $password == 'rooffederation@123') {
 
			$_SESSION['xtra_lister'] = 'login';
			header("Location: https://rooffederation.com/admin/index.php");
  }	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Login : Roof Federation</title>

    <!-- Bootstrap -->
    <link href="<?php echo $site_url; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $site_url; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $site_url; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo $site_url; ?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo $site_url; ?>build/css/custom.min.css" rel="stylesheet">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
<style>
.login_content form input[type="submit"], #content form .submit {
    float: inherit;
    margin-left: 0px;
}
.login_form{
    background: #00000047;
}
.login{
    background-image:url("https://rooffederation.com/uploads/bn1.jpeg");
    background-size: cover;
}
.login_content {
    margin: 0 auto;
    padding: 25px 0 0;
    position: relative;
    text-align: center;
    text-shadow: none;
    min-width: 280px;
    border: 1px solid #e4e4e4;
    padding: 15px 22px;
    box-shadow: 1px 1px 1px 1px #e4e4e4;
}
.login_wrapper {
    right: 0px;
    margin: 0px auto;
    margin-top: 5%;
    max-width: 50%;
    position: relative;
}
</style>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="">
              <h1 style="color:#fff;">Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
			  
			  <div>
                <input type="submit" id="btn-login" class="btn btn-default submit" name="login_admin" value="Log in" />
                <!--<a class="reset_pass" href="#">Lost your password?</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>-->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>Roof Federation</h1>
                  <p>©2022 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div> 
      </div>
    </div>
  </body> <script>
	    function recaptchaCallback() {
            $('#btn-login').removeAttr('disabled');
        };  
	</script>
</html>