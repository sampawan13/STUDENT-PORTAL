<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");

require_once(LIBRARY_PATH . "/templateFunctions.php");
?>
<script src="js/signup.js"></script>
<script>
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              $wow = xmlhttp.responseText;
              if($wow == '0'){
                document.getElementById("txtHint").innerHTML = "";
              }
              else{
                document.getElementById("txtHint").innerHTML = $wow;
                document.getElementById("password").disabled = true;
              }
            }
        };
        xmlhttp.open("GET", "mail.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-xs-10 page">
    <div class="page-header">
      <h1>Sign Up <small>...</small></h1>
    </div>
    <form method="POST" action="createuser_new.php" class="form-horizontal" enctype="multipart/form-data">
      <div class="section col-md-6">
        <div class="page-header">
          <h4>Personal Information</h4>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Full Name</label>
          <div class="col-sm-9">
            <input class="col-sm-6"onblur="fnames();" type="text" id="fname" placeholder="First Name" name="fname">
            <input disabled class="col-sm-6" onblur="lnames();" type="text" id="lname" placeholder="Last Name" name="lname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Date of birth</label>
          <div class="col-sm-9">
            <input disabled class="col-sm-12" onblur="calculateDOB();"  id="dob" type="date" name="dob" placeholder="dd/mm/yyyy">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">AGE</label>
          <div class="col-sm-9">
            <input disabled class="col-sm-12" id="age" type="text" name="age" value="0">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Father's Name</label>
          <div class="col-sm-9">
            <input disabled class="col-sm-12" onblur="fatnames();" type="text" id="fatname" placeholder="Father's Name" name="fatname">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Height(cm) & Weight(kg)</label>
          <div class="col-sm-9">
            <input disabled class="col-sm-6" onblur="heights();" type="text" id="height" placeholder="Height" name="height">
            <input disabled class="col-sm-6" onblur="weights();" type="text" id="weight" placeholder="Weight" name="weight">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Power of Glasses(D)</label>
          <div class="col-sm-9">
            <input disabled class="col-sm-6" onblur="lefts();" type="text" id="left" placeholder="Left" name="left">
            <input disabled class="col-sm-6" onblur="rights();" type="text" id="right" placeholder="Right" name="right">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Permanent Address</label>
          <div class="col-sm-9">
            <textarea disabled class="col-sm-12" onblur="perAddresss();" id="perAddress" placeholder="Permanent Address" name="perAddress"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Gender</label>
          <div class="col-sm-9">
            <label>
              <input disabled id ="g1" type="radio" onclick="genders();" name="gender" value="male"> Male &nbsp&nbsp&nbsp
            </label>
            <label>
              <input disabled id ="g2" type="radio" onclick="genders();" name="gender" value="female"> Female<br>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Hobbies</label>
            <div class="col-sm-9" id="hob">
              <label>
                <input disabled  type="checkbox" id="cricket" name="Cricket"> Cricket&nbsp;
              </label>
              <label>
                <input disabled  type="checkbox" id="football" name="Football"> Football&nbsp;
              </label>
              <label>
                <input disabled  type="checkbox" id="music" name="Music"> Music&nbsp;
              </label>
              <label>
                <input disabled  type="checkbox" id="dance" name="Dance"> Dance
              </label>
              <br /><br />
              <button disabled id="addhobby" onclick="addhobbys()" type="button" class="btn btn-default">Add Hobby</button><br><br>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFile" class="col-sm-3 control-label">Photo</label>
            <input disabled  onchange="photos();" id="photo" type="file" id="exampleInputFile" name="photo">
            <p class="help-block col-sm-9">Upload passport size photo</p>
            <div class="col-xs-4" id="gayab1"></div>
            <div class="col-xs-4" id="gayab2">
              <img id="blah" src="#" style="display:none" alt="your image" width="100%" height ="200px"/>
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
              <select disabled class="col-sm-12" onblur="branchs();" id="branch" name="branch">
                <option value="BT" selected>Biotechnology</option>
                <option value="CE">Civil</option>
                <option value="CH">Chemical</option>
                <option value="EE">Electrical</option>
                <option value="IT">Information Technology</option>
                <option value="ME">Mechanical</option>
                <option value="MM">Metallurgy</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Year of join</label>
            <div class="col-sm-9">
              <select disabled class="col-sm-12" onblur="yearofjoins();" id="yearofjoin" name="year">
                <?php
                for($i = date("Y"); $i >= 1964 ; $i--)
                echo "<option value='$i'>$i</option>";
                ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">Roll No</label>
            <div class="col-sm-9">
              <select disabled class="col-sm-12" onblur="rolls()" onload="rolls2()" id="roll"  name="roll">

              </select>
            </div>
          </div>



          <div class="form-group">
            <label class="col-sm-3 control-label">Present Address</label>
            <div class="col-sm-9">
              <textarea disabled class="col-sm-12" onblur="preAddresss();" id="preAddress" placeholder="Present Address" name="preAddress"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Day Scholar</label>
            <div class="col-sm-9">
              <label>
                <input disabled id ="ds1" type="radio" onclick="dayscholars();" name="dayscholar" value="Yes"> Yes &nbsp&nbsp&nbsp
              </label>
              <label>
                <input disabled id ="ds2" type="radio" onclick="dayscholars();" name="dayscholar" value="No"> No<br>
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
              <input disabled class="col-sm-6" onblur="s1s();" type="text" id="s1" placeholder="1st Sem" name="s1">
              <input disabled class="col-sm-6" onblur="s2s();" type="text" id="s2" placeholder="2nd Sem" name="s2">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">2nd Year</label>
            <div class="col-sm-9">
              <input disabled class="col-sm-6" onblur="s3s();" type="text" id="s3" placeholder="3rd Sem" name="s3">
              <input disabled class="col-sm-6" onblur="s4s();" type="text" id="s4" placeholder="4th Sem" name="s4">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">3rd Year</label>
            <div class="col-sm-9">
              <input disabled class="col-sm-6" onblur="s5s();" type="text" id="s5" placeholder="5th Sem" name="s5">
              <input disabled class="col-sm-6" onblur="s6s();" type="text" id="s6" placeholder="6th Sem" name="s6">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">4th Year</label>
            <div class="col-sm-9">
              <input disabled class="col-sm-6" onblur="s7s();" type="text" id="s7" placeholder="7th Sem" name="s7">
              <input disabled class="col-sm-6" onblur="s87();" type="text" id="s8" placeholder="8th Sem" name="s8">
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
              <td id="c1"></td>
              <td>2nd</td>
              <td id="c2"></td>
            </tr>
            <tr>
              <td>3rd</td>
              <td id="c3"></td>
              <td>4th</td>
              <td id="c4"></td>
            </tr>
            <tr>
              <td>5th</td>
              <td id="c5"></td>
              <td>6th</td>
              <td id="c6"></td>
            </tr>
            <tr>
              <td>7th</td>
              <td id="c7"></td>
              <td>8th</td>
              <td id="c8"></td>
            </tr>
          </table>
        </div>

        <div class="section col-md-12">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input disabled class="col-sm-6" onblur="emails(this.value);" onkeyup="showHint(this.value);" type="email" id="email" placeholder="Email" name="email">
              <p class="label2">&nbsp;<span id="txtHint"></span></p>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input disabled class="col-sm-6" onblur="passwords();" type="password" id="password" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Retype Password</label>
            <div class="col-sm-10">
              <input disabled class="col-sm-6" onblur="password2s();" type="password" id="password2" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input disabled  id="submit" type="submit">
              <input disabled onclick="resetnow()" type="button" id="reset" value="Reset">
            </div>
          </div>
          <input type="hidden" id="noOfHobbies" name="noOfHobbies" value=0>
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
        var filename = document.getElementById("photo").value;
        if(filename.endsWith("jpg") || filename.endsWith("jpeg") || filename.endsWith("png")){
          $('#blah').attr('src', e.target.result);
          $('#blah').css('display', 'block');
        }
        else{
          $('#blah').attr('src', "");
          $('#blah').css('display', 'none');
          document.getElementById("branch").disabled = true;
        }
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
