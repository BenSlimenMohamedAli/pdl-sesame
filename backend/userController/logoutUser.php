<?php
require_once '../config.php';
if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    session_destroy();
    header('Location: ../../LMS/login.php');
}
?>