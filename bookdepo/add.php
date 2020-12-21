<?php
require_once('dbconnect.php');

$title= $_POST['title'];
$author= $_POST['author'];
$price= $_POST['price'];
$description= $_POST['description'];
$publisher= $_POST['publisher'];
$isbn= $_POST['isbn'];

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO book (title, author, price, description, publisher, isbn)
VALUES ('$title', '$author', '$price', '$description', '$publisher', '$isbn')";

$conn->exec($sql);
echo "<script>alert('Book successfully added!'); window.location='index.php'</script>";
?>