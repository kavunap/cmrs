<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['crmscid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $jid=$_GET['editid'];
    $message=$_POST['message'];
    $status=$_POST['status'];
    $examdate=$_POST['examdate'];
     
    $query=mysqli_query($con, "update tblmessage set Message='$message',Status='$status',examdate='$examdate' where  ID='$jid'");
    if ($query) {
    $msg="Message Detail Has been Updated.";
  }
  else
    {
        $msg="Something Went Wrong. Please try again";
    }

  
}
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
   
    <title>Campus Recruitment Management System-Update Message</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php include_once('includes/sidebar.php');?>
<!--Sidebar End-->
<?php include_once('includes/header.php');?>
    <div class="page has-sidebar-left">
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-package"></i>
                        Update Message
                    </h4>
                </div>
            </div>
        </div>
    </header>

    <div class="animatedParent animateOnce">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    
                        <div class="card-body b-b">
                            <p>Message Information</p>
                        </div>
                        <div class="card-body b-b">
                            <form method="post">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
  <?php
    $jid=$_GET['editid'];
    $ret=mysqli_query($con,"select * from  tblmessage where ID='$jid'");
    $cnt=1;
    while ($row=mysqli_fetch_array($ret)) {

?>
<table class="table table-bordered table-hover data-tables">

        <form method="post" name="submit">                    
        <tr>
          <th>Message :</th>
          <td>
            <textarea name="message" placeholder="Message" rows="12" cols="14" class="form-control wd-450" required="true" value="<?php  echo $row['message'];?>"></textarea></td>
        </tr>                           

        <tr>
          <th>Status :</th>
          <td>

            <select name="status" class="form-control wd-450" required="true" value="<?php  echo $row['status'];?>" >
              <option value="Rejected" selected="true">Rejected</option>
              <option value="Sorted">Sort Listed</option>
            </select></td>
        </tr>
        </table>
      </div>
      <div class="modal-footer">
        <a href="view-applied-apllications.php?viewid=<?php echo $row['AppID'];?>" class="btn btn-secondary">Cancel</a>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
        </form>

<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
</body>
</html>
<?php } } ?>