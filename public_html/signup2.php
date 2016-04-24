<html>
	<head>
		<title>Sign up</title>
		<link href="css/info.css" rel="stylesheet">
	</head>
	<body bgcolor="#2c3e50">
		
		
		<form method="POST" action="fillup.php" >
			<center><h1 id = "signup">Signup</h1></center>
			<center>
			<div class="formplace">
				<fieldset>
					<desc>First Name</desc><br /><input id = "fname"  type="text" name="fname" placeholder="enter your first name"><br />
					<desc>Last Name</desc><br /><input id = "lname"  type="text" name="lname" placeholder="enter your last name"><br />
					<desc>Username</desc><br /><input id = "email" onblur = "myEmail();" type="text" name="email" placeholder="enter your email id"><br />
					<span id="demo"></span><br />
					<desc>Password</desc><br /><input type="password" name="password" placeholder="enter your password"><br /><br />
					<desc>Roll</desc><br /><input type="text" name="roll" placeholder="enter your rollno"><br /><br />
					<desc>Room</desc><br /><input type="text" name="room" placeholder="enter your roomno"><br /><br />
					<desc>Phone</desc><br /><input type="text" name="phone" placeholder="enter your phone no"><br /><br />
					<desc>Height</desc><br /><input type="text" name="height" placeholder="enter your height"><br /><br />
					<desc>Weight</desc><br /><input type="text" name="weight" placeholder="enter your weight"><br /><br />
					<desc>Gender</desc><br /><input type="text" name="gender" placeholder="enter your gender"><br /><br />

					<input id="submit" type="submit" value="Log in">
				</fieldset>
			</div>
			</center>
		</form>
		<audio id=key1>
			<source src=sounds/key1.wav>
		</audio>
		<audio id=key2>
			<source src=sounds/key2.wav>
		</audio>
		<audio id=key3>
			<source src=sounds/key3.wav>
		</audio>
		<audio id=key4>
			<source src=sounds/key4.wav>
		</audio>
		<audio id=key5>
			<source src=sounds/key5.wav>
		</audio>
		<script>
			function myEmail() {
				text = document.getElementById("email").value; 
				var test1 = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(text);
				if(test1 == false){
					document.getElementById("demo").innerHTML = "incorrect email id";
					document.getElementById("submit").disabled = true;
				}
				else{
					document.getElementById("submit").disabled = false;
					document.getElementById("demo").innerHTML = "";
				}
			}
			var a = 1;
			
			document.onkeydown = function(e) {
				document.getElementById("key"+a).play();
				console.log("key".a);
				a++;
				if(a == 6)
					a=1;
			}
			
		</script>
	</body>
</html>
