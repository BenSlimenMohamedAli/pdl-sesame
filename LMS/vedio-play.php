<?php
require_once '../backend/config.php';
if(!(isset($_SESSION['logged'])) || $_SESSION['logged'] != true){
	header('Location: login.php');
}

$vid = $_GET['vedio'];
?>

<html>
<head>

</head>
<body>
<video width="320" height="240" controls>
  <?php
  echo '<source src="../backend/courseController/videos/'.$vid.'" type="video/mp4">';
  ?>
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
</body>
</html>