<?php
// load up your config file
require_once("../resources/config.php");
require_once(LIBRARY_PATH . "/templateFunctions.php");
require_once(TEMPLATES_PATH . "/header.php");
?>



<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-sm-10 page thin">
    <div class="page-header">
      <h2><small>Feedback </small></h2>
    </div>
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




    if($login == "true" && $type == "student")
    echo '
    <form method="POST" action="newfeed.php" class="form-horizontal">

      <div class="form-group">
        <label class="col-sm-2 control-label">Feedback</label>
          <div class="col-sm-10">
            <textarea  class="col-sm-6" placeholder="Enter Your text here!!" name="feedback"></textarea>
          </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="col-sm-6" name="anonymous">&nbsp&nbspDo you want to stay Anonymous?
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="col-sm-6" name="admin">&nbsp&nbspKeep this secret? Won\'t be displayed to anyone other than Admins.
            </label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" value="Confirm Submission">
        </div>
      </div>
    </form>
    ';
    if($login == "true" && $type == "admin"){
      echo '
        <h4>Only For Admin!!</h4>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Feedback</th>
          </tr>

      ';
      $sql = "SELECT * FROM feedback where admin = '1'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          if($row['anonymous'] == "0")
            echo "<td>".$row['fname']." ".$row['lname']."</td>";
          else
            echo "<td>Anonymous!</td>";
          echo "<td>".$row['feedback']."</td></tr>";
        }
      } else {
        echo "<p><strong>Not Found!!</strong></p>";
      }
      echo "</table><br><br>";
    }
      echo '
        <h4>General!!</h4>
        <table class="table">
          <tr>
            <th>Name</th>
            <th>Feedback</th>
          </tr>

      ';
      $sql = "SELECT * FROM feedback where admin = '0'";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          if($row['anonymous'] == "0")
            echo "<td>".$row['fname']." ".$row['lname']."</td>";
          else
            echo "<td>Anonymous!</td>";
          echo "<td>".$row['feedback']."</td></tr>";
        }
      } else {
        echo "<p><strong>Not Found!!</strong></p>";
      }
      echo "</table>";
      $conn->close();
    ?>
  </div>


    <div class="col-xs-1"></div>
  </div>
<br /><br />

  <?php
  require_once(TEMPLATES_PATH . "/footer.php");
  ?>
