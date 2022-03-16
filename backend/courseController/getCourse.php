<?php
$id = $_GET['id'];
$query = $conn->query("SELECT * FROM courses WHERE course_id LIKE '$id'");
$result = $query->fetch();
?>