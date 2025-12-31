<?php
$host = "sql312.infinityfree.com";
$user = "if0_40800658";
$pass = "XReiQu20tp6";
$db   = "if0_40800658_mytodo";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
