<?php include 'config.php'; 
	 $id = $_GET['id'];
	$application = $db->users[$id];
	if ($application && $application->delete()) {
    header("location:users.php");
	}
?>