<?php
// load up your config file
require_once("../resources/config.php");
require_once(LIBRARY_PATH . "/templateFunctions.php");
if($type == "student")
;
else
redirect_to("index.php");
require_once(TEMPLATES_PATH . "/header.php");

?>

<?php
if($login == "false")
redirect_to("index.php");

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

$sql="select * from users2 where email ='$email'";
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
  $hobby = $row["hobbies"];

  $fatname = $row["fatname"];
  $left = $row["lefts"];
  $right = $row["rights"];
  $height = $row["height"];
  $weight = $row["weight"];
  $perAddress = $row["perAddress"];
  $preAddress = $row["preAddress"];

  $s1 = $row["s1"];
  $s2 = $row["s2"];
  $s3 = $row["s3"];
  $s4 = $row["s4"];
  $s5 = $row["s5"];
  $s6 = $row["s6"];
  $s7 = $row["s7"];
  $s8 = $row["s8"];
}
?>

<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-xs-10 page">
    <div class="page-header">
      <h1>My Details <small>...</small></h1>
    </div>
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 page">
      <div class="page-header col-sm-12">
        <h4>PERSONAL</h4>
      </div>

      <div class="col-sm-8">
        <form class="form-horizontal">
          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Full Name </label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $fname." ".$lname;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Date of Birth</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $dob;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Father's Name</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $fatname;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Height</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $height;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Weight</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $weight;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Power(Left)</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $left;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Power(Right)</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $left;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Permanent Address</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $perAddress;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Gender</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $gender;?></label>
          </div>
          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Hobbies</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $hobby;?></label>
          </div>

        </form>
      </div>
      <div class="col-xs-3">
        <img src='<?php echo "uploads/profilepic/".$photo;?>' width="100%">
      </div>
      <div class="page-header col-sm-12">
        <h4>ACADEMIC</h4>
      </div>
      <div class="col-sm-8">
        <form class="form-horizontal">
          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Roll No </label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $roll;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Branch </label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $branch;?></label>
          </div>

          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Year of enroll</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $year;?></label>
          </div>
          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Day Scholar</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $dayscholar;?></label>
          </div>
          <div class="form-group col-sm-10">
            <label for="inputEmail3" class="col-sm-6 control-label">Present Address</label>
            <label for="inputEmail3" class="col-sm-6 label2"><?php echo $preAddress;?></label>
          </div>
        </form>
    </div>
    <div class="col-sm-12">
      <div class="page-header col-sm-12">
        <h4>Semester Grades</h4>
      </div>
      <table class="table">
        <tr>
          <th>Semester</th>
          <th>SGPA</th>
          <th>Semester</th>
          <th>SGPA</th>
        </tr>
        <tr>
          <td>1st</td>
          <td id="c1"><?php echo $s1;?></td>
          <td>2nd</td>
          <td id="c2"><?php echo $s2;?></td>
        </tr>
        <tr>
          <td>3rd</td>
          <td id="c3"><?php echo $s3;?></td>
          <td>4th</td>
          <td id="c4"><?php echo $s4;?></td>
        </tr>
        <tr>
          <td>5th</td>
          <td id="c5"><?php echo $s5;?></td>
          <td>6th</td>
          <td id="c6"><?php echo $s6;?></td>
        </tr>
        <tr>
          <td>7th</td>
          <td id="c7"><?php echo $s7;?></td>
          <td>8th</td>
          <td id="c8"><?php echo $s8;?></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="col-sm-2"></div>
</div>
</div>
<div class="col-xs-1"></div>
<br /><br />
<?php
require_once(TEMPLATES_PATH . "/footer.php");
?>
