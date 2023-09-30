<?php include "admin/config.php"; ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Donate Online for Charity - Roof Federation NGO </title>
    <!-- favicons Icons --> 
    <link rel="icon" type="image/png" sizes="32x32" href="https://rooffederation.com/uploads/logo.png" /> 
    <meta name="description" content="Donate Online for Charity - Roof Federation NGO" />
    <meta name="robots" content="index, follow">
    <meta name="robots" content="follow">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/oxpins-icons/style.css">
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="https://rooffederation.com/assets/vendors/timepicker/timePicker.css" />





      <!-- template styles -->
      <link rel="stylesheet" href="./assets/css/oxpins.css">
      <link rel="stylesheet" href="https://rooffederation.com/assets/css/oxpins-responsive.css" />
</head>
<style>

@font-face {
  font-family: Algerian Regular;
  src: url(/roof/font/algeria.ttf);
}
.ftalgeria{
    font-family: 'algerian', sans-serif !important;
}
.main-menu__right-top-address-list li+li {
    margin-left: 50px;
}
.avail{
    font-size: 18px;
    color: var(--oxpins-base);
    font-weight: 700;
    line-height: 24px;
    margin-bottom: 10px;
    font-family: var(--oxpins-font-three); 
    margin-left: 40px;
    white-space: nowrap;
}
.main-menu__right-top-address-list li .content h5 a {
    color: var(--oxpins-black);
    -webkit-transition: all 500ms ease;
    transition: all 500ms ease;
    white-space: nowrap;
}
.roof_logo{
    width:110px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px){
.main-menu__right-top-social {
    display: contents !important;
}
}
.main-menu__left {
    position: relative;
    display: block;
    width: 3%;
    margin-right: 157px;
}
.about-one__curved-circle-box .curved-circle {
    position: absolute;
    top: 18px;
    right: 18px;
    bottom: 24px;
    left: 18px;
    font-size: 19px;
    font-weight: 500;
}
.suq{
        text-align: left;
    margin: 0;
}
.causes-one__img img {
    width: 100%;
    border-top-left-radius: var(--oxpins-bdr-radius);
    border-top-right-radius: var(--oxpins-bdr-radius);
    transition-delay: .1s;
    transition-timing-function: ease-in-out;
    transition-duration: .7s;
    transition-property: all;
    height: 250px;
}
.causes-one__content{
    height:325px;
}
.causes-one__title {
    font-size: 23px;
    line-height: 36px;
    font-weight: 800;
    letter-spacing: -0.04em;
}
.roof_logos{
     width:150px !important;
}
.pdtop5{
    padding-top:5px;
}
.deskhide{
    display:none;
}
.feature-one__point li .icon span {
    color: var(--oxpins-black);
    font-size: inherit;
}
.feature-one__single{
        height: 720px;
}
@media only screen and (max-width: 768px) 
{
    .about-one__right {
    margin-top: 136px;
}
    .feature-one__single{
        height: auto;
}
    .sw {
    height: 400px;
}
    .main-menu__main-menu-box {
    display: contents;
}
    .mobdnt{
            background: #fbd45a;
    color: #000;
    padding: 10px 15px;
    border-radius: 30px;
    position: relative;
    right: 20px;
    font-size: 15px;
    }
    .main-slider__content{
        position: relative;
    bottom: 10px !important;
    }
    .wid100{
        width:100%;
    }
    .about-three {
    position: relative;
    display: block;
    padding: 10px 0 179px;
}
    .footer-widget__about {
    position: relative;
    display: block;
    margin-right: 0px;
}
    .about-one {
    position: relative;
    display: block;
    padding: 120px 0 0px;
    z-index: 1;
}
    .mjh_logo{
            width: 70px;
    }
    .main-slider .container {
    position: relative;
    padding-top: 70px;
    padding-bottom: 0px;
    z-index: 30;
}
    .deskhide{
    display:block !important;
}
.mobhide{
    display:none;
}
}


@media only screen and (min-width: 1400px) and (max-width: 1600px) {
.main-menu__right-top-social {
    display: flex;
}
}
</style>
<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <header class="main-header">
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="/roof/"><img src="/roof/uploads/logo.png" class="roof_logo mjh_logo" alt=""></a>
                            </div>
                            <div class="main-menu__shape-1 float-bob-x">
                                <img src="https://rooffederation.com/assets/images/shapes/main-menu-shape-1.png" alt="">
                            </div>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__right-top">
                                 
                                <div class="main-menu__right-top-right">
                                    <div class="main-menu__right-top-address">
                                        <ul class="list-unstyled main-menu__right-top-address-list">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-phone-call"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Helpline</p>
                                                    <h5><a href="tel:+91-8448317369">+91-8448317369</a></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-message"></span>
                                                </div>
                                                <div class="content">
                                                    <p>Send email</p>
                                                    <h5><a href="mailto:info@rooffederation.com">info@rooffederation.com</a>
                                                    </h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-location"></span>
                                                </div>
                                                <div class="content">
                                                    <p>D7-02 sector E-1 </p>
                                                    <h5>Vasant kunj New Delhi 110070</h5>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-menu__right-top-social">
                                        <a target="_blank" href="https://twitter.com/rooffederation"><i class="fab fa-twitter"></i></a>
                                        <a  target="_blank" href="https://www.facebook.com/rooffederation"><i class="fab fa-facebook"></i></a>
                                        <a  target="_blank" href="https://www.youtube.com/channel/UCCoTXzXTk9RD_6L8yblG49g"><i class="fab fa-youtube"></i></a>
                                        <a  target="_blank" href="https://www.instagram.com/roof_federation/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://www.linkedin.com/in/roof-federation-37a156287/"><i class="fab fa-linkedin"></i></a>
                                        
                                    </div>
                                <div style="            float: right;
    text-align: right;
    position: relative;
    left: 30px;" >
                                    <span class="avail">Avail 80G Tax Benefit</span>
                                </div>
                                </div>
                            </div>
                            <div class="main-menu__right-bottom">
                                <div class="main-menu__main-menu-box">
                                    <div class="deskhide">
                                    <a href="https://rooffederation.com/donate/" class="mobdnt "> <span class="fa fa-heart"></span> DONATE
                                            </a>
                                            </div>
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="current megamenu">
                                            <a href="https://rooffederation.com/">Home </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);">About Us</a>
                                            <ul>
                                                <li><a href="https://rooffederation.com/about-us">Who we are</a></li>
                                                <li><a href="https://rooffederation.com/objective">Objective</a></li>  
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);">Our Services</a> 
                                            
                                            <ul>
                                              <li><a href="https://rooffederation.com/child-friendly-spaces">Child Education </a></li>
                                  <li><a href="https://rooffederation.com/tree-plantation/">Tree Plantation </a></li>
                                  <li><a href="https://rooffederation.com/child-sponsor">Hunger Support</a></li>
                                  <li><a href="https://rooffederation.com/women-empowerment">Women Empowerment</a></li>
                                  <li><a href="https://rooffederation.com/old-age-people">Home for Old Age Peoples</a></li>
                                  <li><a href="https://rooffederation.com/blood-donation">Medical And Blood Donation</a></li>
                                            </ul>
                                        </li>
                                        <li >
                                            <a href="https://rooffederation.com/gallery">Gallery</a>
                                             
                                        </li>
                                         
                                         <li>
                                            <a href="https://rooffederation.com/career">Career</a>
                                        </li>
                                        
                                        <li>
                                            <a href="https://rooffederation.com/blogs">Blogs</a>
                                        </li>
                                        
                                        
                                        <li>
                                            <a href="https://rooffederation.com/contact-us">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__main-menu-content-box">
                                    <div class="main-menu__search-cat-btn-box">
                                         
                                        
                                        <div class="main-menu__btn-box">
                                            <a href="https://rooffederation.com/donate/" class="main-menu__btn"> <span
                                                    class="fa fa-heart"></span> Donate
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>