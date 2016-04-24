<?php
    // load up your config file
    require_once("../resources/config.php");

    require_once(TEMPLATES_PATH . "/header.php");

    require_once(LIBRARY_PATH . "/templateFunctions.php");
?>
<script src="js/signup.js"></script>


<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10 page">
		<div class="page-header">
			<h1>Sign Up <small>...</small></h1>
		</div>
		<form method="POST" action="createuser.php" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-sm-2 control-label">First Name</label>
				<div class="col-sm-10">
					<input onblur="fnames();" type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Last Name</label>
				<div class="col-sm-10">
					<input disabled onblur="lnames();" type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Branch</label>
				<div class="col-sm-10">
					<select disabled onblur="branchs();" id="branch" name="branch">
						<option value="BT" selected>Biotechnology</option>
						<option value="CE">Civil</option>
						<option value="CH">Chemical</option>
						<option value="EE">Electrical</option>
						<option value="IT">Information Technology</option>
						<option value="ME">Mechanical</option>
						<option value="MME">Metallurgy</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Year of join</label>
				<div class="col-sm-10">
					<select disabled onblur="yearofjoins();" id="yearofjoin" name="year">
						<?php
							for($i = date("Y"); $i >= 1964 ; $i--)
								echo "<option value='$i'>$i</option>";
						?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Roll No</label>
				<div class="col-sm-10">
					<select onblur="rolls()" onload="rolls2()" id="roll" disabled name="roll">

					</select>
				</div>
			</div>


			<div class="form-group">
				<label class="col-sm-2 control-label">Date of birth</label>
				<div class="col-sm-10">
					<input onblur="dobs();" disabled id="dob" type="date" name="dob" placeholder="dd/mm/yyyy">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Day Scholar</label>
				<div class="col-sm-10">
					<input disabled id ="ds1" type="radio" name="dayscholar" value="Yes"> Yes<br>
					<input disabled id ="ds2" type="radio" name="dayscholar" value="No" checked> No<br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Gender</label>
				<div class="col-sm-10">
					<input disabled id ="g1" type="radio" name="gender" value="male" checked> Male<br>
					<input disabled id ="g2" type="radio" name="gender" value="female"> Female<br>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Hobbies</label>
				<div class="col-sm-10" id="hob">
					<button disabled id="addhobby" onclick="addhobbys()" type="button" class="btn btn-default">Add Hobby</button><br><br>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputFile" class="col-sm-2 control-label">Photo</label>
				<input disabled onblur="photos();" id="photo" type="file" id="exampleInputFile" name="photo">
				<p class="help-block col-sm-10">Upload passport size photo</p>
				<div class="col-xs-2" id="gayab1"></div>
				<div class="col-xs-2" id="gayab2">
					<img id="blah" src="#" alt="your image" width="100%" height ="200px"/>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input disabled onblur="emails();" type="email" class="form-control" id="email" placeholder="Email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input disabled onblur="passwords();" type="password" class="form-control" id="password" placeholder="Password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Retype Password</label>
				<div class="col-sm-10">
					<input disabled onblur="password2s();" type="password" class="form-control" id="password2" placeholder="Password" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button disabled id="submit" type="submit" class="btn btn-default">Submit</button>
					<button onclick="resetnow()" type="button" id="reset" class="btn btn-default">Reset</button>
				</div>
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
