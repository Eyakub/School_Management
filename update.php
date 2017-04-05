<?php
include 'inc/header.php';
include 'db_conection.php';
//    include "Database.php";
?>

<?php

    $id = $_GET['id'];
    $query = "SELECT * FROM class1 WHERE id='$id'";

//$getData = $db->select($query)->fetch_assoc();
$query_run = mysqli_query($dbcon, $query);
?>

<?php
if (isset($_POST['submit'])) {
    $roll = mysqli_real_escape_string($dbcon, $_POST['id']);
    $name = mysqli_real_escape_string($dbcon, $_POST['full_name']);
    $email = mysqli_real_escape_string($dbcon, $_POST['email']);
    $result = mysqli_real_escape_string($dbcon, $_POST['result']);
    $roll = mysqli_real_escape_string($dbcon, $_POST['roll']);
    
    if ($name == '' || $email == '' || $result == '') {
        $error = "Field must not be Empty !!";
    } else {
        $query = "UPDATE class1
      SET
      full_name  = '$name',
      email = '$email',
      result = '$result',
      roll = '$roll'
      WHERE id = $id";
        $update = mysqli_query($dbcon, $query);
    }
}
?>

<?php
if (isset($_POST['delete'])) {
    $query = "DELETE FROM class1 WHERE id=$id";
    $deleteData = mysqli_query($dbcon, $query);
}
?>

<?php
if (isset($error)) {
    echo "<span style='color:red'>" . $error . "</span>";
}
?>


<form action="update.php?id=<?php echo $id; ?>" method="post">
    <?php
    $query = "SELECT * FROM class1 WHERE id='$id'";
$query_run = mysqli_query($dbcon, $query);
$row = mysqli_fetch_array($query_run, MYSQLI_ASSOC);

//$row=mysqli_fetch_row($query_run);
?>

    <table>
        <tr>
            <td>Serial</td>
            <td><input type="text" name="id" 
                       value="<?php echo $row['id'] ?>"/></td>
        </tr>

        <tr>
            <td>Roll</td>
            <td><input type="text" name="roll" 
                       value="<?php echo $row['roll'] ?>"/></td>
        </tr>

        <tr>
            <td>Full Name</td>
            <td><input type="text" name="full_name"
                       value="<?php echo $row['full_name'] ?>"/></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type="text" name="email" 
                       value="<?php echo $row['email'] ?>"/></td>
        </tr>

        <tr>
            <td>Result</td>
            <td><input type="text" name="result" 
                       value="<?php echo $row['result'] ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Update"/>
                <input type="reset" Value="Cancel" />
                <input type="submit" name="delete" Value="Delete" />
            </td>
        </tr>

    </table>
</form>
<a href="view_user.php">Go Back</a>