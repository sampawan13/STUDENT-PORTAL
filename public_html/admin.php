<?php
// load up your config file
require_once("../resources/config.php");
require_once("../resources/library/templateFunctions.php");
if(isset($type) && $type == "admin")
;
else
redirect_to("index.php");
require_once(TEMPLATES_PATH . "/header.php");
?>



<div class="row">
  <div class="col-xs-1"></div>
  <div class="col-xs-10 page">
    <div class="page-header">
      <h1>Admin <small>...</small></h1>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h4>List of unregistered students...</h4>
        <ol>
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
          $sql = "SELECT * FROM users2 where registered = 0";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<li><strong><a href='student.php?email=".$row['email']."'>".$row['fname']." ".$row['lname']."</a></strong></li>";
            }
          } else {
            echo "<p><strong>Not Found!!</strong></p>";
          }
          $conn->close();
          ?>
        </ol>
      </div>
      <div class="col-sm-6">
        <h4>List of registered students...</h4>
        <ol>
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
          $sql = "SELECT * FROM users2 where registered = 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<li><strong><a href='student.php?email=".$row['email']."'>".$row['fname']." ".$row['lname']."</a></strong></li>";
            }
          } else {
            echo "<p><strong>Not Found!!</strong></p>";
          }
          $conn->close();
          ?>
        </ol>
      </div>
    </div>
  </div>

  <div class="col-xs-1"></div>
</div>
<br />
<br />
<?php
require_once(TEMPLATES_PATH . "/footer.php");

?>
