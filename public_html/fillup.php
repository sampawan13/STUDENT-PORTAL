<?php
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$room=$_POST['room'];
	$roll=$_POST['roll'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	
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

	$sql = "SELECT email FROM student where email='$email'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
		echo "User already exists. You can't create more than one account with same email id!!";
		exit();
	} else {
		$sql = "insert into student values('$fname','$lname','$email','$phone','$room','$roll','$gender','$height','$weight','$password')";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
	}
	$conn->close();
	
	/*
	create table student(
		fname varchar(30),
		lname varchar(30),
		email varchar(30),
		phone int(10),
		room int(4),
		roll varchar(10),
		gender varchar(6),
		height varchar(10),
		weight int(3),
		password varchar(255)
	)
	*/
	
	
?>