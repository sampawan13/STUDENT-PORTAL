<?php
	// load up your config file
	require_once("../resources/config.php");
	require_once("../resources/library/templateFunctions.php");
	//$title = $_POST["title"];
	$feedback = $_POST["feedback"];
	$fname = $_SESSION["fname"];
	$lname = $_SESSION["lname"];
	$email = $_SESSION["email"];

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
	if(isset($_POST["admin"]) ==true && isset($_POST["anonymous"]) == true)
		$sql = "insert into feedback(feedback,anonymous,admin,fname,lname,email) values('$feedback','1','1','Anonymous','Anonymous','Anonymous')";
	else if(isset($_POST["admin"]) ==false && isset($_POST["anonymous"]) == true)
		$sql = "insert into feedback(feedback,anonymous,admin,fname,lname,email) values('$feedback','1','0','Anonymous','Anonymous','Anonymous')";
		else if(isset($_POST["admin"]) ==true && isset($_POST["anonymous"]) == false)
			$sql = "insert into feedback(feedback,anonymous,admin,fname,lname,email) values('$feedback','0','1','$fname','$lname','$email')";
			else if(isset($_POST["admin"]) ==false && isset($_POST["anonymous"]) == false)
				$sql = "insert into feedback(feedback,anonymous,admin,fname,lname,email) values('$feedback','0','0','$fname','$lname','$email')";
	echo $sql;

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();

	redirect_to("feedback.php");
?>
