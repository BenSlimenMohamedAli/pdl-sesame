<?php
require_once '../config.php';
if(isset($_SESSION['id']) && $_SESSION['id'] != null){
    $code = $_POST['code'];
    if($code == $_SESSION['code']){
        $_SESSION['code'] = null;
        header('Location: ../../LMS/reset-password.php');
    }else{
        header('Location: ../../LMS/insert-code.php');
    }
}else{
    header('Location: ../../LMS/forget-password.php');
}

?>