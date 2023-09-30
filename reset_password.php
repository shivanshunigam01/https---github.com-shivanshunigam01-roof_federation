<?php include "header.php"; 

$cust_idss = $_GET["id"];
if(isset($_POST['assoc'])){
	
	$list = $db->users[$cust_idss];
	
if(($_POST['password']==$_POST['cnfrm_password']) && $_POST['password']!= '' && $_POST['cnfrm_password']!= ''){
$data['password'] = md5($_POST['password']);
}
$result = $list->update($data);
if($result){
    echo '<script>
    alert("Password changed successfully.");
            window.open("https://rooffederation.com/my-donation/","_self");
        </script>';
} else {
    echo '<script>
    alert("Try Again");
            
        </script>';
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
.dgfhgd{
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
                        <li class="active">Reset your password</li>
                    </ul>
                    <h2>Reset your password</h2>
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
                                    <input type="password" class="dgfhgd" placeholder="New Password" name="password" required>
                                </div>
                                
                                <div class="contact-form__input-box">
                                    <input type="password"  class="dgfhgd" placeholder="Confirm New Password" name="cnfrm_password" required>
                                </div>
                                 
                            </div>
                                <div class="contact-form__btn-box text-center">
                                    <button type="submit" name="assoc" class="thm-btn contact-form__btn sgedd">Reset Password</button>
                                     
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                 
  
            </div>
        </section>
        <!--Contact Three End-->
        
 

        <?php include "footer.php"; ?>