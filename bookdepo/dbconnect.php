<?php
//connect to db
$servername = "localhost";
$username = "develope";
$passworddb = "neverGiveUp555";
$dbname = "develope_bookrepo";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passworddb);
$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>