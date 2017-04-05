<?php
session_start();
require_once('db_conection.php');

?>



<!DOCTYPE html> 
<html> 
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css">  
    <title>Login</title>  
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
                        <h3 class="panel-title">Sign In</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="login.php">  
                            <fieldset>  


                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> 

                                </div>  

                                <div class="form-group">  

                                    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
                                </div>  



                                <button class="btn btn-lg btn-success btn-block" name="login" type="submit">Login</button><br>
                                <a href="registration.php"><button type="button" class="btn btn-lg btn-success btn-block">Register</button></a><br>
                                <a href="admin_login.php"><button type="button" class="btn btn-lg btn-success btn-block">Teachers</button></a>


                            </fieldset>  
                        </form>  
                        <?php

                        if (isset($_POST['login'])) {
                            $email = mysqli_real_escape_string($dbcon, $_POST['email']);
                            $password = mysqli_real_escape_string($dbcon, $_POST['password']);
                            $query = "select email, password from class1 where email='$email' and password='$password' ";
                            
                            $query_run = mysqli_query($dbcon, $query);
                            
                            if (mysqli_num_rows($query_run) > 0) {
                                if($row = mysqli_fetch_array($query_run, MYSQLI_ASSOC));
                                
                                $_SESSION['email'] = $email;
                                
                                echo "<script>window.open('welcomee.php','_blank')</script>"; 
                                        header("Location: welcomee.php?loginsuccess");
                                exit();
                            } else {
                                    	header("Location: index.php?loginfailed");
                                echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                                exit();
                            }
                               // } else {
                               //     echo '<script type="text/javascript">alert("Database Error")</script>';
                                //}
                        } else {
                            
                        }
                        ?>
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  


</body>  

</html>  

