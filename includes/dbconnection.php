<?php
//development connection

//$con=mysqli_connect("localhost", "root", "", "crmsdb");

//remote database connection
$con=mysqli_connect("remotemysql.com", "50T8ZnQNNJ", "hXJ7vXn34M", "50T8ZnQNNJ");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>