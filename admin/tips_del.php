<?php include 'config.php'; 
	 $id = $_GET['id'];
	$application = $db->tips[$id];
	if ($application && $application->delete()) {
    header("location:tips.php");
	}
?>