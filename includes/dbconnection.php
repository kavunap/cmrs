<?php
//development connection

// $con=mysqli_connect("localhost", "root", "", "crmsdb");

// //remote database connection
// // $con=mysqli_connect("remotemysql.com", "50T8ZnQNNJ", "hXJ7vXn34M", "50T8ZnQNNJ");
// if(mysqli_connect_errno()){
// echo "Connection Fail".mysqli_connect_error();
// }

// //remote database connection
  $host = 'remotemysql.com';
  $db = '50T8ZnQNNJ';
  $user = '50T8ZnQNNJ';
  $pass = 'hXJ7vXn34M';
  $charset = 'utf8mb4';
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // echo 'Connection failed: ' . $e->getMessage();
    throw new PDOException($e->getMessage());
    
}

  ?>