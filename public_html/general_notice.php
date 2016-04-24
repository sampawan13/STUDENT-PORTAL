<?php
// load up your config file
require_once("../resources/config.php");

require_once(TEMPLATES_PATH . "/header.php");

require_once(LIBRARY_PATH . "/templateFunctions.php");
?>



<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-sm-10 page thin">
    <div class="page-header">
      <h2><small>General Notices </small></h2>
    </div>
    <ul>
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
      $sql = "SELECT * FROM notice where type = 'general'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<strong><li><a href='uploads/notices/".$row['fileToUpload']."'>".$row['title']."</a></li></strong><br>";
        }
      } else {
        echo "<p><strong>Not Found!!</strong></p>";
      }
      $conn->close();
      ?>
    </ul>
  </div>


    <div class="col-xs-1"></div>
  </div>
<br /><br />

  <?php
  require_once(TEMPLATES_PATH . "/footer.php");
  ?>
