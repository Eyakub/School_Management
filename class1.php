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
    <title>Student of Class One</title>  
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
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  

            <tr>  

                <th>Serial</th>
                <th>Roll</th>  
                <th>Student Name</th>  
                <th>Student E-mail</th>  
                <th>Class Name</th>  
                <th>Result</th>
                <th>Delete User</th>  
                <th>Update User</th>
            </tr>  
        </thead>  

        <?php  
        //include("database/db_conection.php");  
        include_once("db_conection.php");
        $view_users_query="select * from class1 where class_name = 1";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  

        while($row = mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row['id'];  
            $roll = $row['roll'];
            $full_name=$row['full_name'];  
            $user_email=$row['email'];  
            $class_name=$row['class_name'];
            $result = $row['result'];

            ?>  


            <tr>  
                <!--here showing results in the table -->  
                <td><?php echo $user_id;  ?></td>  
                <td><?php echo $roll; ?></td>
                <td><?php echo $full_name;  ?></td>  
                <td><?php echo $user_email;  ?></td>  
                <td><?php echo $class_name;  ?></td>
                <td><?php echo $result; ?></td>
                <td> <a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a>  </td> <!--btn btn-danger is a bootstrap button to show danger-->  
                <td> <a href ="update.php?id=<?php echo $user_id ?>" ><button class="btn btn-danger">Update</button></a> </td>
            </tr>  

            <?php } ?>  

        </table>  
    </div>  
</div>  
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