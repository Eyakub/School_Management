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


<div class="container-fluid">




<div>

  <div class="panel panel-default col-sm-5">
    
    <div class="panel-body">
    	<div class="panel-heading">Categories</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="add_cat.php">Add Category</a></li>
        <li class="list-group-item"><a href="delete_cat.php">Delete Category</a></li>
        <li class="list-group-item"><a href="show_cat.php">Show categories</a></li>
      </ul>
   

    </div>
    <div class="panel-body">
    	<div class="panel-heading">Products</div>
      <ul class="list-group  display-none">
        <li class="list-group-item"><a href="">Add Products</a></li>
        <li class="list-group-item"><a href="">Delete Products</a></li>
        <li class="list-group-item"><a href="">Show Products</a></li>
      </ul>
    

    </div>
  </div>


    <div class="pull-right col-sm-7">
  	
  </div>
</div>





  


	<!-- jquery -->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<!-- jquery ends -->

	<!-- bootstrap javascript-->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- bootstrap javascript ends -->

</body>
</html>