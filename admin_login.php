<?php
session_start();
//srequire_once('db_conection.php');
//phpinfo();
//include 'db_conection.php';
?>



<!DOCTYPE html> 
<html> 
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css">  
        <title>Admin Login</title>  
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;
        }  
    </style>  

    <body background="images/back.jpg">  


        <div class="container">  
            <div class="row">  
                <div class="col-md-4 col-md-offset-4">  
                    <div class="login-panel panel panel-success">  
                        <div class="panel-heading">  
                            <h3 class="panel-title">Sign In For Admin</h3>  
                        </div>  
                        <div class="panel-body">  
                            <form role="form" method="post" action="admin_login.php">  
                                <fieldset>  


                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="User Name" name="admin_name" autofocus> 

                                    </div>  

                                    <div class="form-group">  

                                        <input class="form-control" type="password" placeholder="Enter Password" name="admin_pass" required>
                                    </div>  



                                    <button class="btn btn-lg btn-success btn-block" name="admin_login" type="submit">Login</button><br>
                                    <a href="index.php"><button type="button" class="btn btn-lg btn-success btn-block">Home</button></a>


                                </fieldset>  
                            </form>  

<?php  
 
//include("database/db_conection.php"); 
include("db_conection.php");
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form 
{  
    
    $admin_name=mysqli_real_escape_string($dbcon, $_POST['admin_name']);  
    $admin_pass=mysqli_real_escape_string($dbcon, $_POST['admin_pass']);  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
        $_SESSION['admin_name'] = $admin_name;
  
        echo "<script>window.open('welcome.php','_self')</script>";  
    }  else 
    {
        echo"<script>alert('Admin Details are incorrect..!')</script>";
    }  
  
}
  
?>  