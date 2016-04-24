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
			document.getElementById("dob").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("dob").disabled = true;
			alert("Last Name is not valid!");
		}
	}

	function dobs() {
		document.getElementById("fatname").disabled = false;
		year = document.getElementById("dob").value;
		year = year.substring(0,4);
		year = parseInt(year);
		var d = new Date();
		var n = d.getFullYear();
		document.getElementById("age").value = n-year;
	}

	function fatnames(){
		text = document.getElementById("fatname").value;
		var test = /[0-9!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("height").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("height").disabled = true;
			alert("Last Name is not valid!");
		}
	}

	function heights(){
		text = document.getElementById("height").value;
		var test = /[a-zA-Z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("weight").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("weight").disabled = true;
			alert("Last Name is not valid!");
		}
	}

	function weights(){
		text = document.getElementById("weight").value;
		var test = /[a-zA-Z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("left").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("left").disabled = true;
			alert("Last Name is not valid!");
		}
	}

	function lefts(){
		text = document.getElementById("left").value;
		var test = /[a-zA-Z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("right").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("right").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function rights(){
		text = document.getElementById("right").value;
		var test = /[a-zA-Z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("perAddress").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("perAddress").disabled = true;
			alert("Last Name is not valid!");
		}
	}

	function perAddresss(){
		text = document.getElementById("perAddress").value;
		var test = /[a-zA-Z0-9]/.test(text);
		if(test == true && text != ""){
			document.getElementById("g1").disabled = false;
			document.getElementById("g2").disabled = false;

			console.log("True");
		}
		else{
			document.getElementById("g1").disabled = true;
			document.getElementById("g2").disabled = true;
			document.getElementById("cricket").disabled = true;
			document.getElementById("football").disabled = true;
			document.getElementById("music").disabled = true;
			document.getElementById("dance").disabled = true;
			document.getElementById("addhobby").disabled = true;
			document.getElementById("photo").disabled = true;
			alert("Permanent Address is not valid!");
		}
	}
	function genders(){
		document.getElementById("cricket").disabled = false;
		document.getElementById("football").disabled = false;
		document.getElementById("music").disabled = false;
		document.getElementById("dance").disabled = false;
		document.getElementById("addhobby").disabled = false;
		document.getElementById("photo").disabled = false;
	}
	function photos(){
		var filename = document.getElementById("photo").value;
		if(filename.length==0 )
			document.getElementById("branch").disabled = true;
		else if(filename.endsWith("jpg") || filename.endsWith("jpeg") || filename.endsWith("png"))
			document.getElementById("branch").disabled = false;
		else {
			alert("Image should be of the following types: jpg, jpeg or png");
		}
		console.log("j"+filename+"j");
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
		document.getElementById("preAddress").disabled = false;
	}

	function preAddresss(){
		text = document.getElementById("preAddress").value;
		var test = /[a-zA-Z0-9]/.test(text);
		if(test == true && text != ""){
			document.getElementById("ds1").disabled = false;
			document.getElementById("ds2").disabled = false;
			console.log("True");
		}
		else{
			document.getElementById("ds1").disabled = true;
			document.getElementById("ds2").disabled = true;
			document.getElementById("s1").disabled = true;
			alert("Permanent Address is not valid!");
		}
	}

	function dayscholars(){
		document.getElementById("s1").disabled = false;
	}
	var s = 0;
	function s1s(){
		text = document.getElementById("s1").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s2").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s2").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s2s(){
		text = document.getElementById("s2").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s3").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s3").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s3s(){
		text = document.getElementById("s3").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s4").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s4").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s4s(){
		text = document.getElementById("s4").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s5").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s5").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s5s(){
		text = document.getElementById("s5").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s6").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s6").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s6s(){
		text = document.getElementById("s6").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s7").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s7").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s7s(){
		text = document.getElementById("s7").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("s8").disabled = false;
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("s8").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function s8s(){
		text = document.getElementById("s8").value;
		var test = /[a-z!@#$%^&*]/.test(text);
		if(test == false && text != ""){
			document.getElementById("email").disabled = false;
			console.log("True");
			s++;
			calcCGPA();
		}
		else{
			document.getElementById("email").disabled = true;
			alert("Last Name is not valid!");
		}
	}
	function calcCGPA(){
		sum = 0;
		console.log("s is "+s);
		for(i=1;i<=s;i++){
			console.log(document.getElementById("s"+i).value);
			sum += Number(document.getElementById("s"+i).value);
			document.getElementById("c"+i).innerHTML = Math.round((sum/i) * 100) / 100;
		}
	}
	function emails(str){
		text = document.getElementById("email").value;
		var test1 = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(text);
		if(test1 == true){
			document.getElementById("password").disabled = false;
		}
		else{
			document.getElementById("password").disabled = true;
			alert("Incorrect email id!!");
		}

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

	function daysInMonth(month, year) {
	    return new Date(year, month, 0).getDate();
	}


	function calculateDOB() {
			document.getElementById("fatname").disabled = false;
	    var DOB = document.getElementById('dob').value;
	    var enteredYear = DOB.substr(0, 4);
	    var enteredMonth = DOB.substr(5, 2);
	    var enteredDay = DOB.substr(8, 2);
	    console.log("entered month: " + enteredMonth);
	    console.log("entered day: " + enteredDay);
	    var d = new Date();
	    var year = d.getFullYear();
	    var month = d.getMonth();
	    var day = d.getDate();
	    console.log("day: " + day);
	    month++;
	    console.log("month: " + month);
	    var finalDay;
	    var finalYear = year - enteredYear;
	    var finalMonth = month - enteredMonth;
	    if ((enteredMonth > month) && enteredDay > day) {
	        finalYear -= 1;
	        finalMonth = 12 - (enteredMonth - month) - 1;
	        var daysInPrevMonth = daysInMonth((month - 1), year);
	        finalDay = (daysInPrevMonth - enteredDay) + day;
	    }
	    else if ((enteredMonth > month) && enteredDay <= day) {
	        finalYear -= 1;
	        finalMonth = 12 - (enteredMonth - month);
	        finalDay = day - enteredDay;
	    }
	    else if ((enteredMonth < month) && (enteredDay > day)) {

	        finalMonth = month - enteredMonth - 1;
	        var daysInPrevMonth = daysInMonth((month - 1), year);
	        finalDay = (daysInPrevMonth - enteredDay) + day;

	    }

	    else if ((enteredMonth < month) && (enteredDay <= day)) {
	        console.log("here");
	        finalMonth = month - enteredMonth;

	        finalDay = day - enteredDay;

	    }

	    document.getElementById('age').value = "Your age is " + finalYear + " years and " + finalMonth + " months " + finalDay + " days";
	    stupid('date');
	}
