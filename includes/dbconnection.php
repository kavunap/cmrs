<?php
//$con=mysqli_connect("localhost", "root", "", "crmsdb");
$con=mysqli_connect("us-cdbr-east-02.cleardb.com", "b879d7a55bdd88", "199c32a4", "heroku_7f476346699d35d");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>