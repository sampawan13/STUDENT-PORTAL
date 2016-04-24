<?php
	// load up your config file
	require_once("../resources/config.php");
	require_once("../resources/library/templateFunctions.php");
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$dob = $_POST["dob"];
	$fatname = $_POST["fatname"];
	$height = $_POST["height"];
	$weight = $_POST["weight"];
	$left = $_POST["left"];
	$right = $_POST["right"];
	$perAddress = $_POST["perAddress"];
	$gender = $_POST["gender"];
	$noOfHobbies = $_POST["noOfHobbies"];
	$hobbies = "";
	//$photo = $_FILES["photo"]["name"];
	$branch = $_POST["branch"];
	$year = $_POST["year"];
	$roll = $_POST["roll"];
	$preAddress = $_POST["preAddress"];
	$dayscholar = $_POST["dayscholar"];
	$s1 = $_POST["s1"];
	$s2 = $_POST["s2"];
	$s3 = $_POST["s3"];
	$s4 = $_POST["s4"];
	$s5 = $_POST["s5"];
	$s6 = $_POST["s6"];
	$s7 = $_POST["s7"];
	$s8 = $_POST["s8"];
	$email = $_POST["email"];
	$pass = $_POST["password"];


	if(isset($_POST["Cricket"]))
		$hobbies=$hobbies."cricket,";
	if(isset($_POST["Football"]))
		$hobbies=$hobbies."football,";
	if(isset($_POST["Music"]))
		$hobbies=$hobbies."music,";
	if(isset($_POST["Dance"]))
		$hobbies=$hobbies."dance,";

	for($i=0;$i<$noOfHobbies;$i++)
		$hobbies=$hobbies.$_POST["hobby"][$i].",";
//trim($hobbies);
	echo $hobbies;
$hobbies = trim($hobbies,",");
echo "<br>";
echo $hobbies;
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
	$sql = "update users2 set fname = '$fname',lname = '$lname',dob = '$dob',fatname = '$fatname',height = '$height',weight = '$weight',lefts = '$left',rights = '$right',perAddress = '$perAddress',gender = '$gender',hobbies = '$hobbies',branch = '$branch',year = '$year',roll = '$roll',preAddress = '$preAddress',dayscholar = '$dayscholar',s1 = '$s1',s2 = '$s2',s3 = '$s3',s4 = '$s4',s5 = '$s5',s6 = '$s6',s7 = '$s7',s8 = '$s8',email = '$email' where email = '".$_SESSION['email']."';";
	echo $sql;
	//exit();

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		$_SESSION["email"] = $email;
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();
	redirect_to("mydetails.php");
?>
