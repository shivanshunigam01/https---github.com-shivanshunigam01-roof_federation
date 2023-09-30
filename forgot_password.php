<?php include "header.php"; 

if(isset($_POST['submit'])){

$username = $_POST['email']; 

$admin = $db->users->where(array('email' => $username));

 $admin_login='';
 
 foreach($admin as $admin_user){	

	 $admin_login = $admin_user['email']; 
	 $admin_login_id = $admin_user['id']; 

 } 

	if($admin_login!=''){ 
 
    $to  = $admin_login;

$subject = 'Reset Password';
$req='Reset Password';
$message ='<html>
<head>
  <title>Reset Password</title>
</head>
<body>
  Dear User, Please follow below link to reset your password.<br><br><br>
  <a href="https://rooffederation.com/reset_password.php?id='.$admin_login_id.'" style="background: green;
    padding: 10px;
    color: #fff;
    border-radius: 10px;">Reset Password</a><br><br><br>
  Regards : Roof Federation;
</body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers  .= "From: $req <support@rooffederation.com>" . "\r\n";
if(mail($to, $subject, $message, $headers)){
    echo "
	    <script>
	        alert('Please check your email id to reset password');
	    </script>
	";
}
	  
} else {
	echo "
	    <script>
	        alert('Email id not exists');
	    </script>
	";
}

 
}
?>
<style>
.fgd{
        position: relative;
    top: 10px;
    color: blue;
    text-decoration: underline;
}
.hu{
    height: 60px;
    width: 100%;
    border: none;
    background-color: var(--oxpins-white);
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
    font-size: 14px;
    color: #707876;
    display: block;
    border-radius: var(--oxpins-bdr-radius);
    font-weight: 500;
}
.ngo_c{
        width: 20px;
    height: 20px;
}
.sw{
        font-size: 25px;
    font-weight: 600;
    padding-bottom: 20px;
}
.mans{
        color: #0a58ca;
    position: relative;
    top: 10px;
    left: 10px;
    font-weight: bold;
}
</style>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(https://rooffederation.com/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="https://rooffederation.com/">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Forget your password</li>
                    </ul>
                    <h2>Forget your password</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<!--Contact One Start-->
         
        <!--Contact One End-->
        <!--Contact Three Start-->
        <section class="contact-three" style="    padding: 50px;">
            <div class="contact-three-shape"
                style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
            <div class="container">
                
                <div class="contact-page__form-box">
                    <form method="post" class="contact-page__form">
                        
                        <div class="row">
                            <div class="col-xl-12">
                                  <div class="col-xl-12"> 
                                <div class="contact-form__input-box">
                                    <input type="email"  placeholder="Enter your email" name="email" required>
                                </div>
                                 
                            </div>
                                <div class="contact-form__btn-box text-center">
                                    <button type="submit" name="submit" class="thm-btn contact-form__btn sgedd">Reset Password</button>
                                     
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                <?php if($phone_exist != "") { ?>
                <br>
                <h4 class="sw">My Donation</h4>
                <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr> 
        <th>Donation Amount</th>
        <th>Txn Id</th>
        <th>Status</th>
        <th>Date</th> 
      </tr>
    </thead>
    <tbody>
        
        <?php $hggfhj = $db->donate()->where("phone" , $phone_exist)->order("id desc");
        foreach($hggfhj as $hggfhjss) { ?>
      <tr>
        
        <td>Rs. <?php echo $hggfhjss["amount"]; ?></td>
        <td><?php echo $hggfhjss["txn_id"]; ?></td>
        <td><?php echo $hggfhjss["status"]; ?></td>
        <td><?php echo $hggfhjss["created"]; ?></td> 
      </tr>
      <?php } ?>
    </tbody>
  </table>
  </div>
                <?php } ?>
  
            </div>
        </section>
        <!--Contact Three End-->
        
 

        <?php include "footer.php"; ?>