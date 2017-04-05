
<html>  
<head lang="en">  
    <meta charset="UTF-8">  

    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.transitions.css">
    <!-- theme css -->

    <link rel="stylesheet" type="text/css" href="font-awesome/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">  
    <title>Current Teacher's</title>  
</head>  
 
  
<body>  

  
<div class="table-scrol">  
    <h1 align="center">Information About School Teacher's.</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Serial</th>
            <th>Name</th>  
            <th>Email</th>  
            <th>Profession</th>  
            <th>Education</th>  
        </tr>  
        </thead>  
  
        <?php  
        //include("database/db_conection.php");  
        include_once("db_conection.php");
        $view_users_query="select * from c_teacher";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
  
        while($row = mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $user_id=$row['id'];  
            $name = $row['name'];
            $email=$row['email'];  
            $possition=$row['possition'];  
            $edu=$row['edu'];
            $mobile = $row['mobile'];
            $s_date = $row['s_date'];

        ?>  
 
        
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $name; ?></td>
            <td><?php echo $email;  ?></td>  
            <td><?php echo $possition;  ?></td>  
            <td><?php echo $edu;  ?></td>
            
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  


</body>  
  
</html>