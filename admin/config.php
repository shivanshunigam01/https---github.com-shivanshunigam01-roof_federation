<?php  
// date_default_timezone_set("Asia/Calcutta");
// include "NotORM.php";
// $dsn = "mysql:dbname=u304337141_ngo;host=localhost";
// $pdo = new PDO($dsn, "u304337141_ngo", "Shanal@16");
// $db = new NotORM($pdo); 




$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=u304337141_ngo", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
}

?>