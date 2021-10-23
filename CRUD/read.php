<?php
include("connection.php");
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total !=0)
{
?>
<html>
<head>
    <title> Display Records</title>
</head>
<body>               
<center>
    <h3>Display Student Records</h3>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Address</th>
        <th>Contact No.</th>  
        <th>Action</th>      
    </tr>
</body>
</html>

<?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo 
        "<tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['address']."</td>
        <td>".$result['contact']."</td>
        <td><a href='delete.php?id=$result[id]'>Delete</a> |
            <a href='update.php?id=$result[id]'>Update</a></td>
        </tr>";
    }
}
else
{
    echo "No record found";
}

?>
</table>
