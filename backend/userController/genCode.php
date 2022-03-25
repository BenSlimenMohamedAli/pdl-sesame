<?php
require_once '../config.php';
if(isset($_POST['email'])){
$email = $_POST['email'];
$query = $conn->query("SELECT * FROM users WHERE email LIKE '$email'");
$result = $query->fetch();
if($result){
    $_SESSION['id'] = $result['user_id'];
    $_SESSION['code'] = rand(1000,9999);
    $to = $email;
    $subject = "Reset password";
    $message = '
    <html>
    <body>
    <h1>Hello <font color="red">'.$result['firstname'].' '.$result['lastname'].'</font></h1>
    <p><h3>We are sorry to know that your having trouble logging into your account, your confirmation code is <font color="red">'.$_SESSION['code'].'</font> please confirm your code and after you will be redirected to a reset password page  <font color="red"></font></h3></p> if the displayed information are wrong feel free to reply and we will contact you</body></html>';
    $headers = "From:Glife <TEK-UP@tek-up.de>\r\n";
    $headers .= "Reply-To: TEK-UP@tek-up.de\r\n";
    $headers .= "Content-type: text/html\r\n";
    mail($to,$subject,$message,$headers);
    header('Location: ../../LMS/insert-code.php');

    
}else{
    
    $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">
    Ops !! email dont exist.
  </div>';
  
   header('Location: ../../LMS/forget-password.php');
}
}



?>
