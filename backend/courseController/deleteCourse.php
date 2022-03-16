<?php
require_once '../config.php';
$id = $_GET['id'];
if($id == null){
    header('Location: ../../LMS/delete-course.php');
}
$result = $conn->query("DELETE FROM courses WHERE course_id LIKE '$id'");
if($result){
    header('Location: ../../LMS/delete-course.php');
}

?>