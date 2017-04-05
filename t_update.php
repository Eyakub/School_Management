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
  <title>Update Teacher Info</title>
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
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="admin_email_pass.php">Change Password</a></li>
      <li><a href="view_teachers.php" target="_blank">Show users</a></li>
      <li><a href="#">Admins</a></li>
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
        <li class="list-group-item"><a href="t-add.php">Current Teacher</a></li>
        <li class="list-group-item"><a href="cat_delete.php">Guest Teacher</a></li>
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





 <?php  
    //include "config.php";
    include "db_conection.php";
    ?>

    <?php 
    $id = $_GET['id'];
    $query = "SELECT * FROM c_teacher WHERE id=$id";
    //$getData = $db->select($query)->fetch_assoc();

    $query_run = mysqli_query($dbcon, $query);

    if(isset($_POST['submit'])){
     $name  = mysqli_real_escape_string($dbcon, $_POST['name']);
     $email  = mysqli_real_escape_string($dbcon, $_POST['email']);
     $possition = mysqli_real_escape_string($dbcon, $_POST['possition']);
     $mobile  = mysqli_real_escape_string($dbcon, $_POST['mobile']);
     $edu  = mysqli_real_escape_string($dbcon, $_POST['edu']);
     //$s_date  = mysqli_real_escape_string($dbcon, $_POST['s_date']);
     if($name == '' || $email == '' || $possition == ''|| $mobile == '' || $edu == ''){
        $error = "Field must not be Empty !!";
  } 
  else {
      $query = "UPDATE c_teacher
      SET
      name  = '$name',
      email = '$email',
      possition = '$possition',
      mobile  = '$mobile',
      edu = '$edu'
      WHERE id = $id";
      $update = mysqli_query($dbcon, $query);
  }
}
?>

<?php
    if(isset($_POST['delete'])){
     $query = "DELETE FROM c_teacher WHERE id=$id";
     $deleteData = mysqli_query($dbcon, $query);
}
?>

<?php 
if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?>



   <div class="pull-right col-sm-4">
   <div class="container" >
    <p class="alert alert-success success-edit">Update data</p>
     
    
     <form action="t_update.php?id=<?php echo $id; ?>" method="post">
     <?php
    $query = "SELECT * FROM c_teacher WHERE id='$id'";
$query_run = mysqli_query($dbcon, $query);
$row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

//$row=mysqli_fetch_row($query_run);
?>
       <div class="form-group">
         <label for="name">Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $row['name'] ?>" name="name">
       </div>

       <div class="form-group">
         <label for="name">Email:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $row['email'] ?>" name="email">
       </div>

         <div class="form-group">
           <label for="sel1">Possition</label>
           <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $row['possition'] ?>" name="possition">
           </div>
            <div class="form-group">
                <label for="title">Education Qualification:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $row['edu'] ?>" name="edu">
            </div>

            <div class="form-group">
                <label for="title">Mobile:</label>
                <input type="text" class="form-control input-sm" id="sel1" id="title" value="<?php echo $row['mobile'] ?>" name="mobile">
            </div>
            
       
       <input type="submit" name="submit" value="Update"/>
       <input type="reset" Value="Cancel" />
       <input type="submit" name="delete" Value="Delete" />
       <!-- <button type="submit" class="btn btn-default">Submit</button>
       <button type="submit" class="btn btn-default">Submit</button>
       <input type="submit" name="delete" Value="Delete" />
     </form> -->
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