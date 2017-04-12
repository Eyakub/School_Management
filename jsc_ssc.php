<?php include("i_header.php"); ?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  

    
    <title>Top Students</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
        margin: 400px;
    } 
table th, td{
	border: 1px solid black;
	border-collapse: collapse;
	opacity: .95;
}
th, td{
	padding: 10px;
	text-align: center;
}
th{
	background-image: color: 8a700000;
	color: white;
}
tr:nth-child(even){
	background-color: white;
}
tr:nth-child(odd){
	background-color: gray;
}

</style>  

<body>  


<div ><!--this is used for responsive display in mobile and other devices-->  


    <table  border="5" class="container">  
        <thead>  

            <tr>  
             
                <th>Roll</th>  
                <th>Student Name</th>  
                <th>Student E-mail</th>  
                <th>Class Name</th>  
                <th>Result</th>
                
            </tr>  
        </thead>  

        <?php  
        //include("database/db_conection.php");  
        include_once("db_conection.php");
        $view_users_query="select * from class1 where class_name in(8, 10)";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  

        while($row = mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
             
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
                <td><?php echo $result; ?></td>
                
            </tr>  

            <?php } ?>  

        </table>  
    </div>  
</div>  


</body>  

</html>