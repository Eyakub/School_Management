<?php
session_start();
require_once('db_conection.php');
 @$_SESSION['email'];
error_reporting(1);
$email= $_SESSION['email'];
if(!$email){
    echo "<script>window.open('login.php','_self')</script>";
}
?>
  
<html>  
<head>  
  
    <title>  
        Your Information  
    </title>  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css">
</head>  
  
<body>  
<h1>Welcome</h1><br>  
<?php echo $email ;?>
<?php

    $id = $_GET['id'];
    echo $id;
    $query = "SELECT * FROM class1 WHERE email='$email'";


//$getData = $db->select($query)->fetch_assoc();
$query_run = mysqli_query($dbcon, $query);
?>
<div class="table-scrol">  
    <h1 align="center">Information About Yourself.</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  

            <tr>  

                <th>Roll</th>  
                <th>Student Name</th>  
                <th>Student E-mail</th>  
                <th>Class Name</th> 
                <th>Result</th> 
                <th>Update Info</th>

            </tr>  
        </thead>  
        <?php  
        //include("database/db_conection.php");  
        include_once("db_conection.php");
        echo "STring";
        $query = "SELECT * FROM class1 WHERE email = '$email'";//select query for viewing users.  
        $run=mysqli_query($dbcon,$query);//here run the sql query.  

        while($row = mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id = $row['id']; 
            $roll = $row['roll'];
            $full_name=$row['full_name'];  
            $user_email=$row['email'];  
            $class_name=$row['class_name'];
            $result = $row['result'];
            ?>  


            <tr>  
                <!--here showing results in the table -->  
                
                <td><?php echo $roll; ?></td>
                <td><?php echo $full_name;  ?></td>  
                <td><?php echo $user_email;  ?></td>  
                <td><?php echo $class_name;  ?></td>
                <td><?php echo $result; ?> </td>
                
                <td> <a href ="specific_student.php?id=<?php echo $id ?>" ><button class="btn btn-danger">Update</button></a> </td>
            </tr>  

            <?php } ?>  

        </table>  
    </div>  
</div>  
 <?php
 //session_start();
 if(!empty($_SESSION['email'])){
    ?>
    <a href="logout.php"><button type="button" class="btn btn-lg btn-success btn-block">Logout</button></a>
    <?php
 } else{ ?>
        <a href="logout.php"><button type="button" class="btn btn-lg btn-success btn-block">Logout</button></a>
        <?php
 }
 ?>
<?php //echo "Bsl"; ?>
  
  

  
  
</body>  
  
</html>  