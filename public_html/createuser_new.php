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
	$photo = $_FILES["photo"]["name"];
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
		$hobbies=$hobbies."cricket";
	if(isset($_POST["Football"]))
		$hobbies=$hobbies.",football";
	if(isset($_POST["Music"]))
		$hobbies=$hobbies.",music";
	if(isset($_POST["Dance"]))
		$hobbies=$hobbies.",dance";

	for($i=0;$i<$noOfHobbies;$i++)
		$hobbies=$hobbies.",".$_POST["hobby"][$i];
$hobbies = trim($hobbies,",");
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
	$sql = "insert into users2(fname,lname,dob,fatname,height,weight,lefts,rights,perAddress,gender,hobbies,photo,branch,year,roll,preAddress,dayscholar,s1,s2,s3,s4,s5,s6,s7,s8,email,password) values('$fname','$lname','$dob','$fatname','$height','$weight','$left','$right','$perAddress','$gender','$hobbies','$photo','$branch','$year','$roll','$preAddress','$dayscholar','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$email','$pass')";
	//echo $sql;

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	$conn->close();

	$target_dir = "uploads/profilepic/";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["photo"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["photo"]["size"] > 1000000000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	redirect_to("signin.php");
?>
