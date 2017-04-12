<?php include("i_header.php"); ?>
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
<h3>
	View
	<div class="table-scrol">  
    <h1 align="center">Information About School Teacher's.</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="container" style="table-layout: fixed" border="5">  
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
    <?php 
    mysql_close($dbcon);
    ?>
        </div>  
</div>  
</h3>

<?php include("i_footer.php");?>