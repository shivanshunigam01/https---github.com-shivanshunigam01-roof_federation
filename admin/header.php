<?php session_start();
$site_url = 'https://rooffederation.com/admin/'; 
include "config.php";
 if($_SESSION['xtra_lister'] == ''){
	header('Location:'.$site_url.'login.php');
}
$abspath = dirname(__DIR__);
?>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/script.js"></script>
	<script src="js/scripts.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/favicon.png">
    <title>ROOF FEDERATION : Admin Panel </title>
    <!-- Bootstrap -->
    <link href="<?php echo $site_url; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo $site_url; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo $site_url; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="<?php echo $site_url; ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Raleway&display=swap" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo $site_url; ?>build/css/custom.min.css" rel="stylesheet">
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
      <style>
     .tempFormat {
  margin: 0px auto;
  padding: 30px;
  align-items: center;
  text-align: center;
}

.grabar {
  font-weight: bold;
  color: #FF9900;
  cursor: pointer !important;
  cursor: pointer;
  width: 100%;
  border: 1px solid;
  padding: 6px;
  opacity: 0.7;
}
.grabar:hover {
  opacity: 1;
}

.comments ul {
  padding: 0px;
}
.comments ul{
    display:none;
}
.comments ul li {
  list-style-type: none;
  position: relative;
  margin-bottom: 5px;
  padding-top: 10px;
  text-align: justify;
  line-height: 1.5em;
}
.comments ul li .titleDraft {
  font-size: 16px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  font-weight: normal;
  width: 80%;
}
.comments ul li .date {
  font-weight: bold;
  color: #FF9900;
  cursor: pointer !important;
}
     #menu_toggle{
         display:none;
     }
     .nav.side-menu>li.active>a {
    text-shadow: rgb(0 0 0 / 25%) 0 -1px 0;
    background: #3078a6;
    box-shadow: rgb(0 0 0 / 25%) 0 1px 0, inset rgb(255 255 255 / 16%) 0 1px 0;
    color: #fff;
    padding: 10px;
}
     body {
    color: #73879C;
    background: #fff;
     }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            font-size: 13px !important;
        }
		body {
		font-size:13px !important;
		}
		.profile_pic{display:none;}
		
		.left_col {
    /* background: #2A3F54; */
    max-width: 375px;
    padding: 0px 0 60px 0px;
    background-color: #141423;
}
.nav-md .container.body .right_col { 
    margin-left: 230px;
}
.right_col{
    background-color: #fff !important;
}
.nav.side-menu>li>a, .nav.child_menu>li>a {
   font-weight: 500;
    position: relative;
    display: block;
    padding: 10px 0;
    font-size: 16px;
    font-weight: 400;
    line-height: 20px;
    color: #a2a3b7;
    font-weight: 500;
    text-transform: capitalize;
    transform-style: preserve-3d;
    padding: 10px 5px;
    font-size: 13px;
    font-weight: 400;
    text-transform: capitalize;
    color: #a2a3b7;
}
.nav.side-menu>li>a:hover, .nav.child_menu>li>a:hover {
    
    font-weight: 500;
    position: relative;
    display: block;
    padding: 10px 0;
    font-size: 16px;
    font-weight: 400;
    line-height: 20px;
    color: #fff !important;
    font-weight: 500;
    text-transform: capitalize;
    transform-style: preserve-3d;
    transition: 0.3s;
}
.main_menu .fa {
    width: 20px;
    opacity: .99;
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #7a7c9e;
}
.ps-block--user-wellcome {
    position: relative;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    padding-right: 30px;
    width: 100%;
}
.ps-sidebar .ps-sidebar__top .ps-block--user-wellcome {
    margin-bottom: 80px;
}
.ps-block--user-wellcome .ps-block__left img {
    border-radius: 50%;
}
.ps-block--user-wellcome .ps-block__right {
    padding-left: 10px;
}
.ps-block--user-wellcome .ps-block__right p {
    margin-bottom: 0;
    color: #666666;
    line-height: 1.4em;
    font-size: 14px;
}
.ps-block--user-wellcome .ps-block__right p a {
    display: block;
    font-weight: 600;
    color: #222;
    font-size: 18px;
}
.page-title .title_left h3 {
    margin: 9px 0;
    font-size: 15px;
    font-weight: 600;
    color: #000;
}
.btn-success{
    background:#673ab7 !important;
}
@media only screen and (max-width: 768px) 
{
    .tile_count .tile_stats_count{
       width: 49%;
    margin: 1px !important;
    }
     #menu_toggle{
         display:block !important;
     }
    .hiddd{
        display:none;
    }
    .left_col {
    /* background: #2A3F54; */
    max-width: 375px;
    padding: 0px 0 60px 0px;
    background-color: #141423;
}
.nav-md .container.body .right_col {
    padding: 100px;
    margin-left: 0px;
}
}
.profile_info {
    padding: 10px;
    width: 100%;
    float: left;
}
.nav.side-menu>li.current-page, .nav.side-menu>li.active {
    border-right: 5px solid #fff;
}
body .container.body .right_col{
    background-color: #fff !important;
}

.tile_count .tile_stats_count {
    margin-bottom: 10px;
    border-bottom: 0;
    padding-bottom: 10px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: rgb(98 98 102 / 13%) 0px 0px 12px 0px;
    background-color: #673ab7; 
    margin: 10px;
    cursor:pointer;
}
.tile_count .tile_stats_count .count {
    font-size: 40px;
    color: #fff;
}
.tile_count .tile_stats_count span {
    font-size: 13px;
    color: #fff;
}
.tile_count .tile_stats_count:before {
    content: "";
    position: absolute;
    left: 0;
    height: 65px;
    border-left: 2px solid #ADB2B5;
    margin-top: 10px;
    display:none;
}
.dqa{
        width: 212px;
}

.nav_title {
    width: 230px;
    float: left;
    background: none;
    
}
.dqa{
		        width: 85%;
    padding-top: 10px;
    padding-left: 15px;
		}
		.tile_stats_count{
		    cursor:pointer;
		}
		a.btn-success, a.btn-primary, a.btn-warning, a.btn-danger {
    color: #fff;
    font-size: 10px;
        padding: 3px 5px;
}
    </style>
	</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;"><br>
              <a href="" class="site_title"> <span><img src="https://rooffederation.com/uploads/logo.png"></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>ROOF FEDERATION</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
				<li><a href="<?php echo $site_url; ?>tips.php"><i class="fa fa-align-left" aria-hidden="true"></i>Blogs</a>   </li>
				<li><a href="<?php echo $site_url; ?>users.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Donate Users</a>   </li>
				
				<li><a href="<?php echo $site_url; ?>logout.php"><i class="fa fa-sign-out"></i> Logout </a></li>
				</ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
             
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    ROOF FEDERATION
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">  
				  <li><a href="<?php echo $site_url; ?>logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
				  
                  </ul>
                </li> 
              </ul>
            </nav>
          </div>
        </div> 