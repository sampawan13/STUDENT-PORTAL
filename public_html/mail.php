<?php
  require_once("../resources/config.php");
  require_once("../resources/library/templateFunctions.php");
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
$sql = "select * from users2 where email = '".$_GET['q']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Mail id exists, give a different id!!";
} else {
    echo "0";
}
$conn->close();
?>
