<?php
include 'connection.php';

if(isset($_POST['insert']))
    {
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    
    $query=mysqli_query($conn,"INSERT INTO student(name,fname,address,contact) VALUES('$name','$fname','$address','$contact')");

    if($query)
    {
        echo "<script>alert('Data Inserted')</script>";
    }
    else
    {
        echo "<script>alert('No Data Inserted')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adding Data</title>
</head>
<body>
<center>
	<form method="POST">
        <h3> Student's Registration Form </h3>
		<input type="text" name="name" placeholder="Enter the User Name"><br><br>
		<input type="text" name="fname" placeholder="Enter the Father's Name"><br><br>
		<input type="text" name="address" placeholder="Enter the Address"><br><br>
		<input type="text" name="contact" placeholder="Enter the Contact No."><br><br>
		<input type="submit" name="insert" value="Submit">
	</form>
</center>
</body>
</html>



