<?php
$servername = "sql104.infinityfree.com"; // Correct host
$username = "if0_41467238";              // Correct user
$password = "i9JoIIfcAK2g";            // Correct password
$dbname = "if0_41467238_pay2";        // Correct database name

// Create connection
$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    header("location:connection_error.php?error=" . $conne->connect_error);
    die($conne->connect_error);
}
?>
