<?php include "header.php"; 

if(isset($_POST['submit'])){

$username = $_POST['phone'];
$password= $_POST['password'];

$admin = $db->users->where(array('phone' => $username, 'password' => md5($password)));

 $admin_login='';
 
 foreach($admin as $admin_user){	

	 $admin_login = $admin_user['id'];  

 } 

	if($admin_login!=''){ 
 
    $_SESSION['xtra_admin'] = $admin_login; 
    $phone_exist = $admin_user['phone'];  
     
	  
} else {
	echo "
	    <script>
	        alert('Wrong mobile number or password');
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
.mans {
    color: #00715d;
    position: relative;
    top: 10px;
    left: 10px;
    font-weight: bold;
}
.mans:hover{
    color:#fbd45a;
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
                        <li class="active">Donate Us</li>
                    </ul>
                    <h2>Donate Us</h2>
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
                                    <input type="text" value="<?php echo $kjhk; ?>" placeholder="Enter your mobile number" name="phone" required>
                                </div>
                                <div class="contact-form__input-box">
                                    <input type="password" class="hu form-control" placeholder="Enter your password" name="password" required>
                                </div>
                            </div>
                                <div class="contact-form__btn-box text-center">
                                    <button type="submit" name="submit" class="thm-btn contact-form__btn sgedd">Check</button>
                                    <a href="https://rooffederation.com/forgot_password" class="mans">Forgot Password ?</a>
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