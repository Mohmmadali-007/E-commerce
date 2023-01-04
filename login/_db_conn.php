<?php
$server  = "localhost";
$username = "root";
$password = "";
$database = "web";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    echo "Connection fail! Try again";
    echo "<br>";
    die(mysqli_connect_error());
}

?>