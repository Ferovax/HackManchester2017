<?php
$servername = "helios.csesalford.com";
$username = "stc905";
$password = "turtlebrainholocaust";
$dbname = "stc905";
$urls = $_POST['urls'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO urls (ID, urlString)
VALUES (NULL , '$urls')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for submitting this complaint <br>";
    $urlarr = explode(",",$urls);
    foreach($urlarr as $item){
        echo "<img src='$item'>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>