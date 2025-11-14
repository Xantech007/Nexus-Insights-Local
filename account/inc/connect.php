<?php
$servername = "sql204.infinityfree.com"; // Correct host
$username = "if0_40415630";              // Correct user
$password = "Oa8DAvaEmcByE4q";            // Correct password
$dbname = "if0_40415630_db";        // Correct database name

// Create connection
$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    header("location:connection_error.php?error=" . $conne->connect_error);
    die($conne->connect_error);
}
?>
