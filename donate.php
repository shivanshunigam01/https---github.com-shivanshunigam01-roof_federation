<?php include "header.php"; 

$mem_d = $_GET["amt"];


if(isset($_POST['recharge'])){
	
	  
	$amount = $_POST['amount']; 
	$cust_id = $_POST['phone']; 
	
	 
	$name = $_POST['name'];
	$pan = $_POST['pan'];
	$password = $_POST['password'];
	$email = $_POST['email']; 
	$city = $_POST['city']; 
	$today = date("F j, Y, g:i a");
	
	include "../admin/config.php";
	
	$agent_managse = $db->users();
    
$datad = array( 
	'id'               => '',
	'name'            => $name,		
	'email'          => $email,	
	'phone'         => $cust_id,
	'city'             => $city,
	'password'             => md5($password),
	'pan'             => $pan,
	'created'             => $today,
);
$resulsdt = $agent_managse->insert($datad); 
	
	if($resulsdt) { 
        echo "
            <script>
                location.href='https://rooffederation.com/pay/?amount=$amount&token=$cust_id';
            </script>
        ";
	}
};

?>
<style>
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
.fltr{
    float:right;
}
.mans{
        color: #00715d ;
    position: relative;
    top: 10px;
    left: 10px;
    font-weight: bold;
}
.mans:hover{
     color: #fbd45a ;
}
input[type='radio'] {
    accent-color: #00715d;
}
.contact-one__single {
    position: relative;
    display: block;
    padding-left: 65px;
    width: 100%;
    margin-bottom: 30px;
}
.contact-one__content{
    padding-left: 40px;
}
@media only screen and (max-width: 768px) 
{
    .fltr{
    float:inherit;
    display:block;
        
    }
}
</style>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
 
 
        <!--Contact Three Start-->
        <section class="contact-three" style="    padding: 50px;">
            <div class="contact-three-shape"
                style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
            <div class="container-fluid">
                <div class="row">
                    <?php if($mem_d == "") { ?>
                    <div class="col-md-6">
                        <div class="contact-one__inne">
                    <ul class="list-unstyled contact-one__list">
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="fa fa-child"></span>
                            </div>
                            <div class="contact-one__content">
                                <input type="radio" value="2000" class="ngo_c" name="ngo_amt" checked>
                                <p class="contact-one__sub-title">₹2000</p>
                                <h3 class="contact-one__number"><a href="tel:+91-8448317369">Sponsor a Child</a></h3>
                                <p>Supporting a child's growth and development through sponsorship.</p>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="fa fa-user-graduate"></span>
                            </div>
                            <div class="contact-one__content">
                                <input type="radio" value="8000" class="ngo_c" name="ngo_amt">
                                <p class="contact-one__sub-title">₹8000</p>
                                <h3 class="contact-one__number"><a
                                        <h3 class="contact-one__number"><a href="tel:+91-8448317369">Child Education</a></h3>
                                        <p>NGO dedicated to creating educational content for children.</p>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="fa fa-hamburger"></span>
                            </div>
                            <div class="contact-one__content">
                                <input type="radio" value="4500" class="ngo_c" name="ngo_amt">
                                <p class="contact-one__sub-title">₹4500</p>
                                <h3 class="contact-one__number"><a href="tel:+91-8448317369">Hunger Support</a></h3>
                                <p>Providing assistance to alleviate hunger and food insecurity.</p>
                            </div>
                        </li>
                         <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="fa fa-heartbeat"></span>
                            </div>
                            <div class="contact-one__content">
                                <input type="radio" value="10000" class="ngo_c" name="ngo_amt">
                                <p class="contact-one__sub-title">₹10000</p>
                                <h3 class="contact-one__number"><a href="tel:+91-8448317369">Medical Support</a></h3>
                                <p>Offering aid and care for medical needs and well-being.</p>
                            </div>
                        </li>
                        <li class="contact-one__single">
                            <div class="contact-one__icon">
                                <span class="fa fa-user-circle"></span>
                            </div>
                            <div class="contact-one__content">
                                <input type="radio" value="40000" class="ngo_c" name="ngo_amt">
                                <p class="contact-one__sub-title">₹40000</p>
                                <h3 class="contact-one__number"><a href="tel:+91-8448317369">Old Age Home</a></h3>
                                <p>Facility for the elderly, providing a supportive and caring environment in their later years.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                    </div>
                    <?php } ?>
                    
                    <?php if($mem_d == "") { ?>
                    <div class="col-md-6">
                        <?php } else { ?>
                        <div class="col-md-12">
                        <?php } ?>
                        <h2 class="section-title__title">Donate</h2>
                        <p class="avail" style="margin:0;font-size:20px;">Avail 50% Tax Exemption under 80G of Income Tax.</p>
                        <br>
                        <div class="contact-page__form-box">
                    <form  method="post" class="contact-page__form">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email address" name="email" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    <input type="password" class="form-control hu" placeholder="Create Password" name="password" required>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Address" name="city">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your PAN Number" name="pan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box">
                                    
                                    <?php if($mem_d == "") { ?>
                                    <input type="number" value="2000" id="myInput" class="form-control hu" placeholder="Enter Amount" name="amount" readonly>
                                    <?php } else { ?>
                                    <input type="number" value="<?php echo $mem_d; ?>" id="myInput" class="form-control hu" placeholder="Enter Amount" name="amount" readonly>
                                    <?php } ?>
                                    <?php if($mem_d == "") { ?>
                                    <a href="javascript:void(0);" id="myButton" class="mans">Enter manual amount</a>
                                    <?php } ?>
                                    <a href="https://rooffederation.com/my-donation/" class="mans fltr">Check my donation</a>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" name="recharge" class="thm-btn contact-form__btn">Pay</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--Contact Three End-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
        document.getElementById('myButton').onclick = function() {
             document.getElementById('myInput').removeAttribute('readonly');
             $("#myInput").val('');
             $('#myInput').focus();
        };
        
        
        $('.ngo_c').on('change', function() {
              const vals = $('input[name=ngo_amt]:checked').val();
              $("#myInput").val(vals);
        });

        </script>

        

        <?php include "footer.php"; ?>