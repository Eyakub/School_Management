<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <title></title>
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- bootstrap css ends-->
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<style type="text/css">
  
</style>
<body>
<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="#">Change Password</a></li>
      <li><a href="#">Show users</a></li>
      <li><a href="#">Admins</a></li>
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
        <li class="list-group-item"><a href="product_add.php">Current</a></li>
        <li class="list-group-item"><a href="product_delete.php">Achivment</a></li>
        <li class="list-group-item"><a href="product_show.php">JSC $ SSC</a></li>
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
<!-- Database Start -->

<div class="pull-right col-sm-4">
   <div class="container" >
    <p class="alert alert-success success-edit"> Added to the database</p>


<?php 
include "config.php";
include "Database.php";
?>

<?php 
 $db = new Database();
 $query = "SELECT * FROM c_teacher";
 $read = $db->select($query);
?>

<?php 
if(isset($_GET['msg'])){
 echo "<span style='color:green'>".$_GET['msg']."</span>";
}
?>

<table class="tblone">
<tr>
     <th width="15%">Serial</th>
     <th width="15%">Name</th>
     <th width="15%">Gender</th>
     <th width="15%">possition</th>
     <th width="15%">Mobile</th>
     <th width="15%">Education</th>

     <th width="15%">Start Date</th>
    </tr>
<?php if($read){?>
<?php 
$i=1;
while($row = $read->fetch_assoc()){
?>
<tr>
     <td><?php echo $i++ ?></td>
     <td><?php echo $row['name']; ?></td>
     <td><?php echo $row['gender']; ?></td>
     <td><?php echo $row['possition']; ?></td>
     <td><?php echo $row['mobile']; ?></td>
     <td><?php echo $row['edu']; ?></td>
     <td><?php echo $row['s_date']; ?></td>
     <td><a href="t-add.php?id=<?php echo urlencode($row['id']); ?>">
      Edit</a></td>
</tr>


<?php } ?>
<?php } else { ?>
<p>Data is not available !!</p>
<?php } ?>
</table>
<a href="t-add.php">Create</a>



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