
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
$sql = "insert into notice values('".$_POST['title']."','".$_POST['type']."','".$_FILES['fileToUpload']['name']."')";
//echo $sql;
//exit();

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
}
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$target_dir = "uploads/notices/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "PDF" && $imageFileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        redirect_to("add_notice.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
