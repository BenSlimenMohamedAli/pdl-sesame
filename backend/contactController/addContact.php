<?php
require_once '../config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$result = $conn->query("INSERT INTO contacts VALUES('','$name','$email','$subject','$message')");
if($result){
    $_SESSION['alert'] = '<div class="alert alert-info" role="alert">
    Registred seccessfully!
  </div>';
    header('Location: ../../LMS/contact.php');
}else{
    $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">
    Ops !! something went wrong.
  </div>';
  header('Location: ../../LMS/contact.php');
}
?>