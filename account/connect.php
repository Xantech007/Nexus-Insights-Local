<?php
$servername = "sql204.infinityfree.com";
// Enter your MySQL username below(default=root)
$username = "if0_40415630";
// Enter your MySQL password below
$password = "Oa8DAvaEmcByE4q";
$dbname = "if0_40415630_db";

// Create connection
$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    header("location:connection_error.php?error=$conne->connect_error");
    die($conne->connect_error);
}
?>
