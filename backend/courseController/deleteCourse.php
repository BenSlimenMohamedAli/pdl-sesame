<?php
require_once '../config.php';
$id = $_GET['id'];
$result = $conn->query("DELETE FROM courses WHERE course_id LIKE '$id'");
if($result){
    header('Location: ../../LMS/feedbacks.php');
}

?>