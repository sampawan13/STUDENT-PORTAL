	var no = 0;
	function fnames() {
		text = document.getElementById("fname").value;
		var test = /[0-9!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("lname").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("lname").disabled = true;
			alert("First Name is not valid!");
		}
	}
	function lnames() {
		text = document.getElementById("lname").value;
		var test = /[0-9!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("branch").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("branch").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function branchs() {
		text = document.getElementById("branch").value;
		var test = /^[^0-9]/.test(text);
		if(test == true){
			document.getElementById("yearofjoin").disabled = false;
			var year = document.getElementById("yearofjoin").value;
			var last = year.substring(2, 4);
			var branch = document.getElementById("branch").value;
			document.getElementById("roll").innerHTML = "";
			for(i=1;i<=150;i++){
				str = document.getElementById("roll").innerHTML;
				if(i == 1)
					document.getElementById("roll").innerHTML = str+"<option selected>"+last+"/"+branch+"/"+i+"</option>";
				else
					document.getElementById("roll").innerHTML = str+"<option>"+last+"/"+branch+"/"+i+"</option>";
			}
			console.log("True");
		}
		else{
			document.getElementById("yearofjoin").disabled = true;
			console.log("False");
		}
	}

	function yearofjoins() {
		text = document.getElementById("yearofjoin").value;
		var test = /[0-9]/.test(text);
		if(test == true){
			document.getElementById("roll").disabled = false;
			var year = document.getElementById("yearofjoin").value;
			var last = year.substring(2, 4);
			var branch = document.getElementById("branch").value;
			document.getElementById("roll").innerHTML = "";
			for(i=1;i<=150;i++){
				str = document.getElementById("roll").innerHTML;
				document.getElementById("roll").innerHTML = str+"<option>"+last+"/"+branch+"/"+i+"</option>";
			}
			console.log("Truegg");
		}
		else{
			document.getElementById("roll").disabled = true;
			console.log("Falsegg");
		}
	}
	function rolls() {
		document.getElementById("dob").disabled = false;
	}
	function dobs() {
		document.getElementById("address").disabled = false;
		document.getElementById("cricket").disabled = false;
		document.getElementById("football").disabled = false;
		document.getElementById("music").disabled = false;
		document.getElementById("dance").disabled = false;//
		document.getElementById("ds1").disabled = false;
		document.getElementById("ds2").disabled = false;
		document.getElementById("g1").disabled = false;
		document.getElementById("g2").disabled = false;
		document.getElementById("photo").disabled = false;
		document.getElementById("addhobby").disabled = false;
		year = document.getElementById("dob").value;
		year = year.substring(0,4);
		year = parseInt(year);
		var d = new Date();
		var n = d.getFullYear();
		document.getElementById("age").value = n-year;
	}

	function photos(){
		var filename = document.getElementById("photo").value;
		if(filename.length==0)
			document.getElementById("email").disabled = true;
		else
			document.getElementById("email").disabled = false;
		console.log("j"+filename+"j");
	}

	function emails(){
		text = document.getElementById("email").value;
		var test1 = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(text);
		if(test1 == true){
			document.getElementById("password").disabled = false;
		}
		else{
			document.getElementById("password").disabled = true;
			alert("Incorrect email id!!");
		}
	}

	function passwords(){
		var pass = document.getElementById("password").value;
		if(pass.length<8){
			document.getElementById("password2").disabled = true;
			alert("Atleast 8 characters!!");
		}
		else
			document.getElementById("password2").disabled = false;
	}

	function password2s(){
		var pass2 = document.getElementById("password2").value;
		var pass1 = document.getElementById("password").value;
		if(pass2!="" && pass1==pass2)
			document.getElementById("submit").disabled = false;
		else{
			document.getElementById("submit").disabled = true;
			alert("Passwords Don't Match!!");
		}
	}

	function resetnow(){
		document.getElementById("fname").value="";
		document.getElementById("lname").value="";
		document.getElementById("branch").value="BT";
		document.getElementById("yearofjoin").value="2016";
		document.getElementById("roll").value="";
		document.getElementById("dob").value="";
		document.getElementById("ds1").value="";
		document.getElementById("ds2").value="";
		document.getElementById("g1").value="";
		document.getElementById("g2").value="";
		document.getElementById("photo").value="";
		document.getElementById("email").value="";
		document.getElementById("password").value="";
		document.getElementById("password2").value="";
		document.getElementById("address").value="";

		document.getElementById("lname").disabled="true";
		document.getElementById("branch").disabled="true";
		document.getElementById("yearofjoin").disabled="true";
		document.getElementById("roll").disabled="true";
		document.getElementById("dob").disabled="true";
		document.getElementById("ds1").disabled="true";
		document.getElementById("ds2").disabled="true";
		document.getElementById("g1").disabled="true";
		document.getElementById("g2").disabled="true";
		document.getElementById("photo").disabled="true";
		document.getElementById("email").disabled="true";
		document.getElementById("password").disabled="true";
		document.getElementById("password2").disabled="true";
		document.getElementById("addhobby").disabled="true";
		document.getElementById("address").disabled="true";
		document.getElementById("cricket").disabled="true";
		document.getElementById("football").disabled="true";
		document.getElementById("music").disabled="true";
		document.getElementById("dance").disabled="true";

		for(i=0;i<=no;i++){
			var element = document.getElementById("hob");
			var child = document.getElementById("h"+i);
			element.removeChild(child);
		}
	}

	function addhobbys(){
		console.log("fsfsf");
		var para = document.createElement("input");
		var breaks = document.createElement("br");
		para.setAttribute("type", "text");
		para.setAttribute("placeholder", "Hobby");
		para.setAttribute("name", "hobby[]");
		para.setAttribute("id", "h[]");
		var element = document.getElementById("hob");
		element.appendChild(para);
		element.appendChild(breaks);
		no++;
		document.getElementById("noOfHobbies").value=no;
	}
