<?php
require_once '../config.php';

$address = $_POST['address'];
$password = $_POST['password'];

$query = $conn->query("SELECT * FROM users WHERE email LIKE '$address'");
$result = $query->fetch();
if($result){
    if(password_verify($password, $result['password'])){
        $_SESSION['logged'] = true;
        $_SESSION['firstname'] = $result['firstname'];
        $_SESSION['lastname'] = $result['lastname'];
        $_SESSION['role'] = $result['role'];
        $_SESSION['image'] = $result['image'];
        
        header("Location: ../../LMS/dashboard.php");
    }else{
        $_SESSION['alert']= '<div class="alert alert-danger" role="alert">
    Wrong email or password.
  </div>';
    header("Location: ../../LMS/login.php");
    }
    
}else{
    $_SESSION['alert']= '<div class="alert alert-danger" role="alert">
    Wrong email or password.
  </div>';
    header("Location: ../../LMS/login.php");
}

?>