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

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link href="css/info.css" rel="stylesheet">

  <!-- jquery -->
  <script src="js/jquery.js"></script>

  <!-- JavaScript -->
  <script src="js/bootstrap.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="navbar navbar-<?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin") echo "inverse"; else echo "default";?> navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin") echo "Admin"; else if(isset($_SESSION["type"]) && $_SESSION["type"] == "student") echo "Student"; else echo "NITD";?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
              <?php
              if(isset($type) && $type == "admin"){
                echo "<li><a href='admin.php'>Admin</a></li>";
                echo "<li><a href='student.php'>Student</a></li>";
              }
              else if(isset($type) && $type == "student")
              echo "<li><a href='mydetails.php'>My Details</a></li>";
              ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notices <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="general_notice.php">General Notices</a></li>
                  <li><a href="student_notice.php">Student Notice Board</a></li>
                  <?php
                  if(isset($type) && $type == "admin"){
                    echo '<li><a href="add_notice.php">Add Notice</a></li>';
                  }
                  ?>
                </ul>
              </li>
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
              if($login == "true" && $_SESSION["type"] == "student")
              echo '
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$email.' <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="edit_details.php">Edit Details</a></li>
              <li><a href="mydetails.php">My Details</a></li>
              <li role="separator" class="divider"></li>
              <li id="logout"><a href="logout.php">LOG OUT</a></li>

              </ul>
              </li>
              ';
              else if($login == "true" && $_SESSION["type"] == "admin")
              echo '
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$email.' <span class="caret"></span></a>
              <ul class="dropdown-menu">
              
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

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/1.jpg" alt="..." width="100%">
          <div class="carousel-caption">
            <h3>National Institute of Technology, Durgapur</h3>
            <p>Student Information System</p>
          </div>
        </div>
        <div class="item">
          <img src="img/2.jpg" alt="..." width="100%">
          <div class="carousel-caption">
            <h3>National Institute of Technology, Durgapur</h3>
            <p>Student Information System</p>
          </div>
        </div>
        <div class="item">
          <img src="img/3.jpg" alt="..." width="100%">
          <div class="carousel-caption">
            <h3>National Institute of Technology, Durgapur</h3>
            <p>Student Information System</p>
          </div>
        </div>
        <div class="item">
          <img src="img/4.jpg" alt="..." width="100%">
          <div class="carousel-caption">
            <h3>National Institute of Technology, Durgapur</h3>
            <p>Student Information System</p>
          </div>
        </div>
        <div class="item">
          <img src="img/5.jpg" alt="..." width="100%">
          <div class="carousel-caption">
            <h3>National Institute of Technology, Durgapur</h3>
            <p>Student Information System</p>
          </div>
        </div>
      </div>


    </div>
    <br>
