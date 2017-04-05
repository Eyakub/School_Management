<?php
session_start();
require_once('db_conection.php');
 @$_SESSION['admin_name'];
error_reporting(1);
$a= $_SESSION['admin_name'];
if(!$a){
    echo "<script>window.open('admin_login.php','_self')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <title>Welcome To Admin Panel</title>
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <!-- bootstrap css ends-->
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Home</a></li>
      <li><a href="admin_email_pass.php" target="_blank">Change Password</a></li>
      <li><a href="t-add.php" target="_blank">Add Employee</a></li>
      <li><a href="view_teachers.php" target="_blank">Admins</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
 <!-- End Header -->
  <!-- Start aside -->
<div class="container-fluid">
  <div class="panel panel-default col-sm-5">
    
    <div class="panel-body">
      <div class="panel-heading">Teacher</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="view_teachers.php", target="_blank">Current Teacher</a></li>
        <li class="list-group-item"><a href="guest_teachers.php">Guest Teacher</a></li>
        
      </ul>
   

    </div>
    <div class="panel-body">
      <div class="panel-heading">Student</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="view_user.php" target="_blank">Current</a></li>
        <li class="list-group-item"><a href="top_student.php" target="_blank">Achivment</a></li>
        <li class="list-group-item"><a href="jsc_ssc.php" target="_blank">JSC $ SSC</a></li>
      </ul>
    

    </div>
    <div class="panel-body">
      <div class="panel-heading">Another Emplyee</div>
      <!-- <ul class="list-group  display-none">
        <li class="list-group-item"><a href="company_add.php">Add Company</a></li>
        <li class="list-group-item"><a href="company_delete.php">Delete Company</a></li>
        <li class="list-group-item"><a href="company_show.php">Show Company</a></li>
      </ul> -->
    </div>
    
  </div>
<!-- End aside -->





 


   <div class="pull-right col-sm-4">
   <div class="container" >
    <p class="alert alert-success success-edit"> Welcome to the admin panel</p>
     
    
     <form action="welcome.php" method="POST">
       
     </form>
   </div>

   </div>




<!-- Start Footer -->
        <!-- jquery -->
  <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  <!-- jquery ends -->

  <!-- bootstrap javascript-->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- bootstrap javascript ends -->
</body>
</html>
<!-- End Footer -->