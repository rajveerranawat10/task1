<?php

$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "grip";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Couldn't connect to the Database" . mysqli_connect_error());
}
?>
