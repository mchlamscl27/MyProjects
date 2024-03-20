<?php
//This variable stores the hostname of mysql server.
$serverName = "localhost";

//This variable stores the username used to connect to the MySQL database.
$user = "root";

//This variable stores the pass used to connect to the MySQL database.
$pass = "";

//This variable stores the name of the database yo want to connect to within the MySQL server.
$databaseName = "database";

//Establishing the connection between php and your database
$conn = new mysqli($serverName, $user, $pass, $databaseName);

$sql = "SELECT * FROM Registration";

$result = $conn->query($sql);
$conn->close(); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<h2>STUDENT LIST</h2>

<table class="table">

<thead>

<tr>

<th>STUDENT ID</th>

<th>Fullname</th>

<th>Email</th>

<th>Contact</th>

<th>Address</th>

<th>Birthday</th>

</tr>

</thead>

<tbody> 

<?php

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

?>

            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td>
                    <a class="btn btn-info" href="update.php?id=<?php echo $row['ID']; ?>">Edit</a>&nbsp;
                    <a class="btn btn-danger" name="delete" href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a>
                </td>
            </tr>                       

<?php       }
    }

?>                

</tbody>

</table>

</body>
</html>