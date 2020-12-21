<?php
include_once("dbconnect.php");

//get data first
$name = $_POST['name'];
$email = $_POST['email'];
$matric = $_POST['matric'];
$password = sha1($_POST['password']);


try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (name,  email, matric, password)
    VALUES ('$name', '$email', '$matric', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert('Registration successfully')</script>";
    echo "<script> window.location.replace('index.html') </script>";

  } catch(PDOException $e) {
    //echo $sql . "<br>" . $e->getMessage();//
    echo "<script> alert('Registration Error')</script>";
    echo "<script> window.location.replace('register.html') </script>";
  }
  
  $conn = null;

?>