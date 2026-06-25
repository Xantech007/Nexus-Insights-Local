<?php
$servername = "sql104.infinityfree.com";
// Enter your MySQL username below(default=root)
$username = "if0_41467238";
// Enter your MySQL password below
$password = "i9JoIIfcAK2g";
$dbname = "if0_41467238_pay2";

// Create connection
$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    header("location:connection_error.php?error=$conne->connect_error");
    die($conne->connect_error);
}
?>
