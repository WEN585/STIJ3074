<?php
require_once('dbconnect.php');

$id=$_REQUEST['id'];

$title= $_POST['title'];
$author= $_POST['author'];
$price= $_POST['price'];
$description= $_POST['description'];
$publisher= $_POST['publisher'];
$isbn= $_POST['isbn'];

$sql = "UPDATE book SET title ='$title', author ='$author', price ='$price', 
description ='$description', publisher ='$publisher', isbn ='$isbn' WHERE id = '$id' ";

$conn->exec($sql);
echo "<script>alert('Successfully Edit The Book!'); window.location='index.php'</script>";


?>

