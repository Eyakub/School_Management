<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <title>Registration</title>
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <!-- bootstrap css ends-->
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body background="images/back.jpg">
  <div class="container-fluid">

   <div class="pull-right col-sm-4">
     <div class="container" >
      <p class="alert alert-success success-edit">Follow those steps to Registration.</p>


      <form action="registration.php" method="POST">
       <div class="form-group">
         <label for="name">Title:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="title">
       </div>


       <div class="form-group">
         <label for="name">First Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="first">
       </div>

       <div class="form-group">
         <label for="name">Last Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="last">
       </div>

       <div class="form-group">
         <label for="name">User Name:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="username">
       </div>

       <div class="form-group">
         <label for="sel1">Password:</label>
         <input type="text" class="form-control input-sm" id="sel1" id="title"  name="password">
       </div>
       <div class="form-group">
        <label for="title">Class Name:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="classname">
      </div>

      <div class="form-group">
        <label for="title">Date Of Birth [yyyy-mm-dd]:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="bdate">
      </div>
      <div class="form-group">
        <label for="title">Age:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="age">
      </div>

      <div class="form-group">
        <label for="name">Blood Group:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="bgroup">
      </div>

      <div class="form-group">
        <label for="name">Present Address:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="paddress">
      </div>

      <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="email">
      </div>

      <div class="form-group">
        <label for="name">Admission Date[yyyy-mm-dd]:</label>
        <input type="text" class="form-control input-sm" id="sel1" id="title"  name="admission_date">
      </div>



      <tr>
        <td width = "250"> Gender</td>
        <td>

          <input type = "radio" name = "gender" value = "f">Female
          <input type = "radio" name = "gender" value = "m">Male
        </td>
      </tr><br>
      <input type="submit" name="submit" value="Submit"/>
    </form>
  </div>

</div>
</div>
</body>
</html>
