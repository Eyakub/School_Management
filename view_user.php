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
<html>  
<head lang="en">  
    <meta charset="UTF-8">  

    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Classes</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="welcome.php">Home</a></li>
      <li><a href="admin_email_pass.php">Change Password</a></li>
      <li><a href="t-add.php" target="_blank">Add Employee</a></li>
      <li><a href="view_teachers.php">Admins</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
    <div class="table-scrol">  
        <h1 align="center">All the Students Of Our School</h1>  
        <div class="panel-body">
          <div class="panel-heading"> Class List </div>
          <ul class="list-group  display-none">
            <li class="list-group-item"><a href="class1.php" target="_blank">Class One</a></li>
            <li class="list-group-item"><a href="class2.php" target="_blank">Class Two</a></li>
            <li class="list-group-item"><a href="class3.php" target="_blank">Class Three</a></li>
            <li class="list-group-item"><a href="class4.php" target="_blank">Class Four</a></li>
            <li class="list-group-item"><a href="class5.php" target="_blank">Class Five</a></li>
            <li class="list-group-item"><a href="class6.php" target="_blank">Class Six</a></li>
            <li class="list-group-item"><a href="class7.php" target="_blank">Class Seven</a></li>
            <li class="list-group-item"><a href="class8.php" target="_blank">Class Eight</a></li>
            <li class="list-group-item"><a href="class9.php" target="_blank">Class Nine</a></li>
            <li class="list-group-item"><a href="class10.php" target="_blank">Class Ten</a></li>
        </ul>
    </div>
</div>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
     
 <?php
 //session_start();
 if(!empty($_SESSION['admin_name'])){
    ?>
    <a href="logout.php"><button type="button" class="btn btn-lg btn-success btn-block">Logout</button></a>
    <?php
 } else{ ?>
        <a href="logout.php"><button type="button" class="btn btn-lg btn-success btn-block">Logout</button></a>
        <?php
 }
 ?>

</body>  
  
</html>