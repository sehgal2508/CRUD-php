<?php
include_once 'connection.php';

if(count($_POST)>0) 
{
mysqli_query($conn,"UPDATE student set 
        id='" . $_POST['id'] . "', 
        name='" . $_POST['name'] . "', 
        fname='" . $_POST['fname'] . "', 
        address='" . $_POST['address'] . "' ,
        contact='" . $_POST['contact'] . "' WHERE id='" . $_POST['id'] . "'");

$message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
    <center>
<form method="POST">
<div>
    <?php if(isset($message)) { echo $message; } ?>
</div>

<a href="read.php">Show All Student</a>
</div>
<table>
    <tr>
        <td>ID : </td><td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
                <input type="text" name="id"  value="<?php echo $row['id']; ?>"></td>
    </tr>
    <tr>
        <td>Name: </td><td><input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>"></td>
    </tr>
    <tr>
        <td>Father's Name :</td><td><input type="text" name="fname" class="txtField" value="<?php echo $row['fname']; ?>"></td>
    </tr>
    <tr>
        <td>Address:</td><td><input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>"></td>
    </tr>
    <tr>
        <td>Contact :</td><td><input type="text" name="contact" class="txtField" value="<?php echo $row['contact']; ?>"></td>
    </tr>
        <tr><td></td><td><input type="submit" name="submit" value="Submit" class="buttom"></td>
    </tr>
</form>
</center>
</body>
</html>
