<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <title>Adding Employee</title>
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
      <li><a href="admin_email_pass.php">Change Password</a></li>
      <li><a href="t-add.php" target="_blank">Add Employee</a></li>
      <li><a href="view_teachers.php">Admins</a></li>
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
        <li class="list-group-item"><a href="view_teachers.php">Current Teacher</a></li>
        <li class="list-group-item"><a href="guest_teachers.php">Guest Teacher</a></li>
        <li class="list-group-item"><a href="cat_show.php">Free teacher</a></li>
      </ul>
   

    </div>
    <div class="panel-body">
      <div class="panel-heading">Student</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="#.php">Current</a></li>
        <li class="list-group-item"><a href="#.php">Achivment</a></li>
        <li class="list-group-item"><a href="#.php">JSC $ SSC</a></li>
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
    <div class="panel-body">
      <div class="panel-heading"> Registerd Student </div>
      <!-- <ul class="list-group  display-none">
        <li class="list-group-item"><a href="sale_add.php">Add Sale</a></li>
        <li class="list-group-item"><a href="sale_remove.php">Remove sale</a></li>
        <li class="list-group-item"><a href="sale_show.php">Show sale</a></li>
      </ul> -->
    </div>
  </div>
<!-- End aside -->





 


   <div class="pull-right col-sm-4">
   <div class="container" >
    <p class="alert alert-success success-edit"> Add to the database</p>
     
    
     <form action="t-add.php" method="POST">
       <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="name">
       </div>


       <div class="form-group">
         <label for="name">Email:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="email">
       </div>

       <div class="form-group">
         <label for="name">Password:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="pass">
       </div>

       <div class="form-group">
         <label for="name">Gender:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="gender">
       </div>

         <div class="form-group">
           <label for="sel1">Possition</label>
           <input type="text" class="form-control input-sm" id="sel1" id="title"  name="possition">
           </div>
            <div class="form-group">
                <label for="title">Education Qualification:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title"  name="edu">
            </div>

            <div class="form-group">
                <label for="title">Mobile:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title"  name="mobile">
            </div>
            <div class="form-group">
                <label for="title">Start Date:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title"  name="s_date">
            </div>
       
       <input type="submit" name="submit" value="Add"/>
       <!-- <input type="reset" Value="Cancel" />
       <input type="submit" name="delete" Value="Delete" /> -->
       <!-- <button type="submit" class="btn btn-default">Submit</button>
       <button type="submit" class="btn btn-default">Submit</button>
       <input type="submit" name="delete" Value="Delete" />
     </form> -->
   </div>

   </div>

<?php

require_once('db_conection.php');
 @$_SESSION['admin_name'];
error_reporting(1);
$a= $_SESSION['admin_name'];
if(!$a){
    echo "<script>window.open('admin_login.php','_self')</script>";
}
?>


<?php  
    //include "config.php";
  
   
    ///$id = $_GET['id'];
    $query = "SELECT * FROM c_teacher WHERE id=$id";
    //$getData = $db->select($query)->fetch_assoc();

    $row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

    mysqli_select_db($dbcon, 'school');
if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $pass = test_input($_POST['pass']);
        $gender = test_input($_POST['gender']);
        $possition = test_input($_POST['possition']);
        $mobile = test_input($_POST['mobile']);
        $edu = test_input($_POST['edu']);
        $s_date = test_input($_POST['s_date']);
        
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 $sql = mysqli_query($dbcon, "INSERT INTO c_teacher(name, gender, possition, mobile, edu, email, s_date)
        values('$name', '$gender', '$possition', '$mobile', '$edu', '$email', '$s_date')");


  $admin = mysqli_query($dbcon, "INSERT INTO admin(admin_name, admin_pass)
    values('$email', '$pass')");
  
if (!$sql && !$admin) {
  echo '<script type="text/javascript">alert("Invalid Information.")</script>';
   
    //echo 'Not Inserted to class.<br>';
   
} else {
      echo '<script type="text/javascript">alert("Adding successful.")</script>';
    //echo "<script>window.open('t-add.php?','_self')</script>";
}

if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?>




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