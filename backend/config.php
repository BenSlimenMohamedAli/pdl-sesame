<?php
session_start();
$host='mysql-server';
$db = 'sesame';
$username = 'root';
$password = 'pdlsesameTEAM2023';

try {
    $dsn = "mysql:host=$host;dbname=$db";
    $conn = new PDO($dsn,$username,$password);
  } catch (Exception $error) {
    die('can not connect to database reason :'.$error->getMessage());
  }
?>