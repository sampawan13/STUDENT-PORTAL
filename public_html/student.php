<?php
    // load up your config file
    require_once("../resources/config.php");
    require_once(LIBRARY_PATH . "/templateFunctions.php");
    if(isset($type) && $type == "admin")
    	;
    else
    	redirect_to("index.php");
    require_once(TEMPLATES_PATH . "/header.php");
?>

<?php


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

		//GET values
		if(isset($type) && $type=="admin" && isset($_GET["email"])){
			$em=$_GET["email"];
			$sql="select * from users2 where email ='$em'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$fname = $row["fname"];
				$lname = $row["lname"];
				$branch = $row["branch"];
				$year = $row["year"];
				$roll = $row["roll"];
				$dob = $row["dob"];
				$dayscholar = $row["dayscholar"];
				$gender = $row["gender"];
				$photo = $row["photo"];
				$email = $row["email"];
				$registered = $row["registered"];
        $hobby = $row["hobbies"];
        $address = $row["perAddress"];
			}
		}
?>


<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10 page">
		<div class="page-header">
			<h1>Student Details <small>...</small></h1>
		</div>
		<div class="col-xs-10">
<?php
	if(isset($type) && $type=="admin" && isset($_GET["email"])){
		echo '
		<form class="form-horizontal" action="register.php" method="POST">

			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Full Name</label>
					<label for="inputEmail3" class="control-label">'.$fname." ".$lname.'</label>
			</div>

			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Roll No</label>
					<label for="inputEmail3" class="control-label">'.$roll.'</label>
			</div>

			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Date of Birth</label>
					<label for="inputEmail3" class="control-label">'.$dob.'</label>
			</div>

			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Day Scholar</label>
					<label for="inputEmail3" class="control-label">'.$dayscholar.'</label>
			</div>

			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
					<label for="inputEmail3" class="control-label">'.$gender.'</label>
			</div>
      <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Hobbies</label>
					<label for="inputEmail3" class="control-label">'.$hobby.'</label>
			</div>
      <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Branch</label>
					<label for="inputEmail3" class="control-label">'.$branch.'</label>
			</div>
      <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<label for="inputEmail3" class="control-label">'.$email.'</label>
			</div>
      <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
					<label for="inputEmail3" class="control-label">'.$address.'</label>
			</div>
			';
			if($registered == "0")
				echo '
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input id="submit" type="submit" value="Register">
          <div class="rem"><a href="remove.php?email='.$email.'">Remove</a></div>
				</div>
			</div>

			';
			else
				echo '
			<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Registered</label>
					<label for="inputEmail3" class="control-label">Yes</label>
			</div>
			';
			echo '
			<input type="hidden" name="email" value="'.$em.'">
		</form>

	</div>
	<div class="col-xs-2">
		<img src="uploads/profilepic/'.$photo.'" width="100%">
	</div>
	';
}
else if (isset($type) && $type=="admin") {
  echo "<h3>List of Registered students: </h3>";
  $sql = "SELECT * FROM users2 where registered = 1 order by roll";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "<table class='table table-hover'>
              <tr>
                <th>Roll</th>
                <th>Name</th>
              </tr>
      ";
      while($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>".$row['roll']."</td>";
          echo "<td><a href='student.php?email=".$row['email']."'>".$row['fname']." ".$row['lname']."</a></td></tr>";
      }
      echo "</table>";
  } else {
      echo "0 results";
  }
  $conn->close();
}
?>
	</div>
</div>
  <div class="col-xs-1"></div>
</div>
<br />
<br />

<?php
    require_once(TEMPLATES_PATH . "/footer.php");
?>
