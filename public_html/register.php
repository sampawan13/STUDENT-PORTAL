<?php
	require_once("../resources/config.php");
	require_once("../resources/library/templateFunctions.php");

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

	if(isset($type) && $type=="admin" && isset($_POST["email"])){
		$email = $_POST["email"];
		$sql="update users2 set registered = 1 where email='$email';";
		if ($conn->query($sql) === TRUE) {
    		echo "Record updated successfully";
		} else {
    		echo "Error updating record: " . $conn->error;
		}
	}

redirect_to("admin.php");
?>
