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
<script src="js/signup.js"></script>
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
      <h1>Edit Details <small>...</small></h1>
    </div>
    <form method="POST" action="update.php" class="form-horizontal" enctype="multipart/form-data">
      <div class="section col-md-6">
        <div class="page-header">
          <h4>Personal Information</h4>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Full Name</label>
          <div class="col-sm-9">
            <input class="col-sm-6"onblur="fnames();" type="text" id="fname" placeholder="First Name" name="fname" value="<?php echo $fname;?>">
            <input  class="col-sm-6" onblur="lnames();" type="text" id="lname" placeholder="Last Name" name="lname" value="<?php echo $lname;?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Date of birth</label>
          <div class="col-sm-9">
            <input  class="col-sm-12" onblur="dobs();"  id="dob" type="date" name="dob" placeholder="dd/mm/yyyy" value="<?php echo $dob;?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">AGE</label>
          <div class="col-sm-9">
            <input disabled class="col-sm-12" id="age" type="text" name="age" value="<?php echo (date('Y')-substr($dob,0,4));?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-9">
            <input  class="col-sm-12" onblur="fatnames();" type="text" id="fatname" placeholder="Father's Name" name="fatname" value="<?php echo $fatname;?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Height & Weight</label>
          <div class="col-sm-9">
            <input  class="col-sm-6" onblur="heights();" type="text" id="height" placeholder="Height" name="height" value="<?php echo $height;?>">
            <input  class="col-sm-6" onblur="weights();" type="text" id="weight" placeholder="Weight" name="weight" value="<?php echo $weight;?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Power of Glasses</label>
          <div class="col-sm-9">
            <input  class="col-sm-6" onblur="lefts();" type="text" id="left" placeholder="Left" name="left" value="<?php echo $left;?>">
            <input  class="col-sm-6" onblur="rights();" type="text" id="right" placeholder="Right" name="right" value="<?php echo $right;?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Permanent Address</label>
          <div class="col-sm-9">
            <textarea  class="col-sm-12" onblur="perAddresss();" id="perAddress" placeholder="Permanent Address" name="perAddress"><?php echo $perAddress;?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Gender</label>
          <div class="col-sm-9">
            <label>
              <input  id ="g1" type="radio" name="gender" value="male" checked> Male &nbsp&nbsp&nbsp
            </label>
            <label>
              <input  id ="g2" type="radio" name="gender" value="female"> Female<br>
            </div>
          </div>
          <?php
            $pieces = explode(",", $hobby);
            $count = count($pieces);
          ?>
          <div class="form-group">
            <label class="col-sm-3 control-label">Hobbies</label>
            <div class="col-sm-9" id="hob">
              <label>
                <input   type="checkbox" id="cricket" name="Cricket" <?php if(strpos($hobby,"cricket")!==false){ echo "checked"; $count--;}?>> Cricket&nbsp;
              </label>
              <label>
                <input   type="checkbox" id="football" name="Football" <?php if(strpos($hobby,"football")!=false){ echo "checked"; $count--;} ?>> Football&nbsp;
              </label>
              <label>
                <input   type="checkbox" id="music" name="Music" <?php if(strpos($hobby,"music")!=false) { echo "checked"; $count--;} ?>> Music&nbsp;
              </label>
              <label>
                <input   type="checkbox" id="dance" name="Dance" <?php if(strpos($hobby,"dance")!=false) { echo "checked"; $count--;} ?>> Dance
              </label>
              <br /><br />
              <button  id="addhobby" onclick="addhobbys()" type="button" class="btn btn-default">Add Hobby</button><br><br>
			  <?php
				foreach($pieces as $p){
					if(strcmp($p,'cricket') != false && strcmp($p,'football') != false && strcmp($p,'music') != false && strcmp($p,'dance') != false)
						echo '<input type="text" placeholder="hobby" name="hobby[]" id="h[]" value="'.$p.'">';
				}
        echo "
          <script>no=$count</script>
        ";
			  ?>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFile" class="col-sm-3 control-label">Photo</label>
            <input   onblur="photos();" id="photo" type="file" id="exampleInputFile" name="photo" disabled>
            <p class="help-block col-sm-9">Upload passport size photo</p>
            <div class="col-xs-4" id="gayab1"></div>
            <div class="col-xs-4" id="gayab2">
              <img id="blah" src="uploads/profilepic/<?php echo $photo;?>" alt="your image" width="100%" height ="200px"/>
            </div>
          </div>
        </div>

        <div class="section col-md-6">
          <div class="page-header">
            <h4>Academic Information</h4>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Branch</label>
            <div class="col-sm-9">
              <select  class="col-sm-12" onblur="branchs();" id="branch" name="branch">
                <option value="BT" <?php if($branch == "BT") echo "selected";?>>Biotechnology</option>
                <option value="CE" <?php if($branch == "CE") echo "selected";?>>Civil</option>
                <option value="CH" <?php if($branch == "CH") echo "selected";?>>Chemical</option>
                <option value="EE" <?php if($branch == "EE") echo "selected";?>>Electrical</option>
                <option value="IT" <?php if($branch == "IT") echo "selected";?>>Information Technology</option>
                <option value="ME" <?php if($branch == "ME") echo "selected";?>>Mechanical</option>
                <option value="MM" <?php if($branch == "MM") echo "selected";?>>Metallurgy</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Year of join</label>
            <div class="col-sm-9">
              <select  class="col-sm-12" onblur="yearofjoins();" id="yearofjoin" name="year">
                <?php
                for($i = date("Y"); $i >= 1964 ; $i--)
                  if($i == $year)
                    echo "<option value='$i' selected>$i</option>";
                  else
                    echo "<option value='$i'>$i</option>";

                ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Roll No</label>
            <div class="col-sm-9">
              <select  class="col-sm-12" onblur="rolls()" onload="rolls2()" id="roll"  name="roll">
                <?php
                $lastTwoDigits = substr($year,2,2);
                for($i = 1; $i <= 150 ; $i++)
                  if($i == substr($roll,6,2) || $i == substr($roll,6,3))
                    echo "<option value='$i' selected>$lastTwoDigits/$branch/$i</option>";
                  else
                    echo "<option value='$i'>$lastTwoDigits/$branch/$i</option>";

                ?>
              </select>
            </div>
          </div>



          <div class="form-group">
            <label class="col-sm-3 control-label">Present Address</label>
            <div class="col-sm-9">
              <textarea  class="col-sm-12" onblur="preAddresss();" id="preAddress" placeholder="Present Address" name="preAddress"><?php echo $preAddress;?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Day Scholar</label>
            <div class="col-sm-9">
              <label>
                <input  id ="ds1" type="radio" name="dayscholar" value="Yes"> Yes &nbsp&nbsp&nbsp
              </label>
              <label>
                <input  id ="ds2" type="radio" name="dayscholar" value="No" checked> No<br>
              </label>
            </div>
          </div>
          <br><br>
          <div class="page-header">
            <h4>Semester Grades in SGPA</h4>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">1st Year</label>
            <div class="col-sm-9">
              <input  class="col-sm-6" onblur="s1s();" type="text" id="s1" placeholder="1st Sem" name="s1" value="<?php echo $s1;?>">
              <input  class="col-sm-6" onblur="s2s();" type="text" id="s2" placeholder="2nd Sem" name="s2" value="<?php echo $s2;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">2nd Year</label>
            <div class="col-sm-9">
              <input  class="col-sm-6" onblur="s3s();" type="text" id="s3" placeholder="3rd Sem" name="s3" value="<?php echo $s3;?>">
              <input  class="col-sm-6" onblur="s4s();" type="text" id="s4" placeholder="4th Sem" name="s4" value="<?php echo $s4;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">3rd Year</label>
            <div class="col-sm-9">
              <input  class="col-sm-6" onblur="s5s();" type="text" id="s5" placeholder="5th Sem" name="s5" value="<?php echo $s5;?>">
              <input  class="col-sm-6" onblur="s6s();" type="text" id="s6" placeholder="6th Sem" name="s6" value="<?php echo $s6;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">4th Year</label>
            <div class="col-sm-9">
              <input  class="col-sm-6" onblur="s7s();" type="text" id="s7" placeholder="7th Sem" name="s7" value="<?php echo $s7;?>">
              <input  class="col-sm-6" onblur="s87();" type="text" id="s8" placeholder="8th Sem" name="s8" value="<?php echo $s8;?>">
            </div>
          </div>
          <br><br>

            <h4>Semester Grades in CGPA</h4>

          <table class="table">
            <tr>
              <th>Semester</th>
              <th>CGPA</th>
              <th>Semester</th>
              <th>CGPA</th>
            </tr>
            <tr>
              <td>1st</td>
              <td id="c1"><?php if($s1 != '0' )echo $s1; else echo "0";?></td>
              <td>2nd</td>
              <td id="c2"><?php if($s2 != '0' )echo round(($s1+$s2)/2,2); else echo "0";?></td>
            </tr>
            <tr>
              <td>3rd</td>
              <td id="c3"><?php if($s3 != '0' )echo round(($s1+$s2+$s3)/3,2); else echo "0";?></td>
              <td>4th</td>
              <td id="c4"><?php if($s4 != '0' )echo round(($s1+$s2+$s3+$s4)/4,2); else echo "0";?></td>
            </tr>
            <tr>
              <td>5th</td>
              <td id="c5"><?php if($s5 != '0' )echo round(($s1+$s2+$s3+$s4+$s5)/5,2); else echo "0";?></td>
              <td>6th</td>
              <td id="c6"><?php if($s6 != '0' )echo round(($s1+$s2+$s3+$s4+$s5+$s6)/6,2); else echo "0";?></td>
            </tr>
            <tr>
              <td>7th</td>
              <td id="c7"><?php if($s7 != '0' )echo round(($s1+$s2+$s3+$s4+$s5+$s6+$s7)/7,2); else echo "0";?></td>
              <td>8th</td>
              <td id="c8"><?php if($s8 != '0' )echo round(($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8,2); else echo "0";?></td>
            </tr>
          </table>
        </div>

        <div class="section col-md-12">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input class="col-sm-6" onblur="emails();" type="email" id="email" placeholder="Email" name="email" value="<?php echo $email;?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input  class="col-sm-6" disabled onblur="passwords();" type="password" id="password" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Retype Password</label>
            <div class="col-sm-10">
              <input  class="col-sm-6" disabled onblur="password2s();" type="password" id="password2" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input   id="submit" type="submit">
              <input  onclick="resetnow()" disabled type="button" id="reset" value="Reset">
            </div>
          </div>
          <input type="hidden" id="noOfHobbies" name="noOfHobbies" value=<?php echo $count;?>>
        </div>
      </form>

    </div>
    <div class="col-xs-1"></div>
  </div>
  <br /><br />
  <script>
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah').attr('src', e.target.result);
        $('#blah').css('display', 'block');
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#photo").change(function(){
    readURL(this);
  });
  </script>
  <?php
  require_once(TEMPLATES_PATH . "/footer.php");
  ?>
