<?php
require_once('dbconnect.php');

$id=$_GET['id'];

// sql to delete a record
$sql = "Delete from book where id = '$id'";

// use exec() because no results are returned
$conn->exec($sql);
header('location:index.php');
?>