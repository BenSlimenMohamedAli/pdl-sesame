<?php
require_once '../config.php';
$id = $_GET['id'];
if($id == null){
    header('Location: ../../LMS/feedbacks.php');
}
$result = $conn->query("DELETE FROM contacts WHERE contact_id LIKE '$id'");
if($result){
    header('Location: ../../LMS/feedbacks.php');
}

?>