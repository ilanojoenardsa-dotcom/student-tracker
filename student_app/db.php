<?php
$servername = "sql204.infinityfree.com";
$username   = "if0_40217029";
$password   = "dj4n3ro0n4lEe";
$dbname     = "if0_40217029_student_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

