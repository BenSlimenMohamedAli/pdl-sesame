<?php
require_once '../config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id = $_SESSION['id'];


$tmp_name = $_FILES['image']['tmp_name'];

if($tmp_name != null){
    $path = "images/";
    $extention = explode("/",$_FILES['image']['type']);
    $img = md5(date('Y-m-d H:i:s:u')).".".$extention[1];
    $query = $conn->query("UPDATE users 
    SET firstname = '$firstname' , 
    lastname = '$lastname' , 
    phone = '$phone' , 
    email = '$email' , 
    image = '$img' 
    WHERE user_id LIKE '$id'");
    move_uploaded_file($tmp_name,$path.$img);
    $_SESSION['image'] = $img;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    header('Location: ../../LMS/settings.php');
}else{
    $query = $conn->query("UPDATE users 
    firstname = '$firstname' ,
    lastname = '$lastname' , 
    phone = '$phone' , 
    email = '$email' 
    WHERE user_id LIKE '$id'");
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    header('Location: ../../LMS/settings.php');
}


?>