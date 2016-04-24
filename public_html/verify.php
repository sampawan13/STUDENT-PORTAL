<?php
require_once("../resources/config.php");
require_once("../resources/library/templateFunctions.php");

$email=$_POST["email"];
$pass=$_POST["password"];
$servername = $config["db"]["db1"]["host"];
$username = $config["db"]["db1"]["username"];
$password = $config["db"]["db1"]["password"];
$dbname = $config["db"]["db1"]["dbname"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["admin"])){
	$sql="select * from admin where email='$email';";

	$result=$conn->query($sql);
	echo $sql;
	if($result->num_rows>0){
		$row = $result->fetch_assoc();
		if($pass == $row['password']){
			$login = "true";
			$_SESSION["fname"] = $row["fname"];
			$_SESSION["lname"] = $row["lname"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["type"] = "admin";
			redirect_to("index.php");
			exit();
		}
	}
}
else{
	$sql="select * from users2 where email='$email';";

	$result=$conn->query($sql);
	if($result->num_rows>0){
		$row = $result->fetch_assoc();
		if($pass == $row['password'] && $row['registered']== '1'){
			$login = "true";
			$_SESSION["fname"] = $row["fname"];
			$_SESSION["lname"] = $row["lname"];
			$_SESSION["email"] = $row["email"];
			$_SESSION["type"] = "student";
			redirect_to("index.php");
			exit();
		}
	}
}
redirect_to("signin2.php");
?>
