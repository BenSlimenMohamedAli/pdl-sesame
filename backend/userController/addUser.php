<?php
require_once '../config.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$address = $_POST['address'] . '@tek-up.de';
$password = $_POST['password'];

$path = "images/";
$tmp_name= $_FILES['image']['tmp_name'];
$extention = explode("/",$_FILES['image']['type']);
$img = md5(date('Y-m-d H:i:s:u')).".".$extention[1];

// encrypting password
$hash = password_hash($password, PASSWORD_DEFAULT);
$result = $conn->query("SELECT * FROM users WHERE email LIKE '$address'");
if ($result->fetch() == 0) {
  $result = $conn->query("INSERT INTO users VALUES('','$firstname','$lastname','$phone','$address','$hash','$img','0')");
  if ($result) {
    $_SESSION['alert'] = '<div class="alert alert-info" role="alert">
    Registred seccessfully!
  </div>';
    move_uploaded_file($tmp_name,$path.$img);
    header('Location: ../../LMS/login.php');
  } else {
    $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">
    Ops !! something went wrong.
  </div>';
    header('Location: ../../LMS/register.php');
  }
}else{
  $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">
    Ops !! address already exits.
  </div>';
    header('Location: ../../LMS/register.php');
}
?>