<?php 
$site_url = 'https://rooffederation.com/admin/'; 
session_start();
session_destroy();  
header('Location:'.$site_url.'login.php');
?>  