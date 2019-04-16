<?php
$servername = "localhost";
$username = "gdgjalan_admin";
$password = "gdg@admin23";
$dbname = "gdgjalan_gdg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else
    //echo "done";

?>