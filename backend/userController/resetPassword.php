<?php
require_once '../config.php';

if(isset($_SESSION['id']) && $_SESSION['id'] != null){
    $id = $_SESSION['id'];
    $password = $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = $conn->query("UPDATE users SET password = '$password' WHERE user_id LIKE '$id'");
    if($query){
        header('Location: ../../LMS/login.php');
    }   
}else{
    echo $id;
    //header('Location: ../../LMS/forget-password.php');
}


?>
