<?php
    // load up your config file
    require_once(LIBRARY_PATH . "/templateFunctions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
 
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>NIT Durgapur - Sttudent Information System</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="css/info.css" rel="stylesheet">
		
		<!-- jquery -->
		<script src="js/jquery.js"></script>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>
    
	</head>
 
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.php">iDEAS</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="menu.php">Student</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="feedback.php">Feedback</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="aboutus.php">About Us</a></li>
					  </ul>
					</li>
				  </ul>
				  
				  <ul class="nav navbar-nav navbar-right">
					<?php
						if($login == "true")
							echo '
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$email.' <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">My Wall</a></li>
									<li><a href="fillchoice.php">Fill Choice</a></li>
									<li><a href="mydetails.php">My Details</a></li>
									<li role="separator" class="divider"></li>
									<li id="logout"><a href="logout.php">LOG OUT</a></li>

								</ul>
								</li>
							';
						else
							echo '
								<li><a href="signin.php">Sign in</a></li>
							';
					?>
					
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	<div class="row">
		<div id = "jumboout" class="jumbotron text-cloud colp">
			<div id="jumbo">
				<h1>NIT Durgapur</h1>
				<p>Student information system</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
		</div>
	</div>