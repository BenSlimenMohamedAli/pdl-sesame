<?php
require_once '../config.php';
$title = $_POST['title'];
$owner = $_POST['owner'];
$duration = $_POST['duration'];
$desc = $_POST['desc'];
$category = $_POST['category'];
$path_vid = "videos/";
$path_img = "images/";

$tmp_name_vid= $_FILES['video']['tmp_name'];
$tmp_name_img= $_FILES['image']['tmp_name'];
$extention = explode("/",$_FILES['video']['type']);
$vid = md5(date('Y-m-d H:i:s:u')).".".$extention[1];
$extention = explode("/",$_FILES['image']['type']);
$img = md5(date('Y-m-d H:i:s:u')).".".$extention[1];
if(move_uploaded_file($tmp_name_vid, $path_vid.$vid) && move_uploaded_file($tmp_name_img, $path_img.$img)){
    $query = $conn->query("INSERT INTO courses VALUES('','$title','$owner','$duration','$category','$desc','$img','$vid')");
    if($query){
        header("Location: ../../LMS/add-course.php");
    }else{
        echo "error";
    }
}

?>