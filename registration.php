<?php
include 'db_conection.php';

$dbcon = mysqli_connect('localhost', 'root', 'mdes');
//selecting database

if (!mysqli_select_db($dbcon, 'school')) {
    //echo 'Database not selected.';
}
mysqli_select_db($dbcon, 'school');
if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = test_input($_POST['title']);
        $first = test_input($_POST['first']);
        $last = test_input($_POST['last']);
        $fname = $title . ' ' . $first . ' ' . $last;
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);
        $classname = test_input($_POST['classname']);
        //$fname = $_POST['fname'];
        $bdate = test_input($_POST['bdate']);
        $age = test_input($_POST['age']);
        $paddress = test_input($_POST['paddress']);
        $email = test_input($_POST['email']);
        $adate = test_input($_POST['admission_date']);
        $bgroup = test_input($_POST['bgroup']);
        $gender = test_input($_POST['gender']);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_query($dbcon, "INSERT INTO login(user_email, password)
        values('$email', '$password')");
      
//if (!mysqli_query($dbcon, $login)) {
//    
//} else {
    //echo 'inserted to login.<br>';
    //echo "<script>window.open('sitemap.html?','_self')</script>"
//}

//sql command line
//if(isset($_POST['email']))

    $sql = "INSERT INTO class1(full_name, user_name, password, class_name, birth_date, age, present_address, email, admission_date, blood_group, gender) " .
            "VALUES('$fname', '$username', '$password', '$classname', '$bdate', '$age', '$paddress', '$email', '$adate', '$bgroup', '$gender') ";





//$retval = mysql_query($sql, $conn);
if (!mysqli_query($dbcon, $sql)) {
    //echo 'Not Inserted to class.<br>';
    echo '<script type="text/javascript">alert("Invalid Information.")</script>';
} else {
    //echo 'inserted to class.<br>';

    echo '<script type="text/javascript">alert("Registration successful.")</script>';
    echo "<script>window.open('registration.php?','_self')</script>";
}
mysqli_close($dbcon);
//}
?>
