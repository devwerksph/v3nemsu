<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "retro_nemsu";
$port = "3306";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname,$port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 