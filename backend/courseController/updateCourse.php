<?php
require_once '../config.php';
$id = $_GET['id'];

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
    $query = $conn->query("UPDATE courses 
    SET course_title = '$title' , 
    course_owner = '$owner' ,  
    course_duration = '$duration' ,
    course_category = '$category' ,
    course_description = '$desc' ,
    image = '$img',
    video = '$vid'
    WHERE course_id LIKE $id
    ");
    if($query){
        header("Location: ../../LMS/update-course.php");
    }else{
        echo "error";
    }
}
