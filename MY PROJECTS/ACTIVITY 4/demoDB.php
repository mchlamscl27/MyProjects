<?php
$serverName = "localhost";

$user = "root";

$pass = "";

$databaseName = "Activity3";

$conn = new mysqli($serverName, $user, $pass, $databaseName);

if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);

}
echo "Connection Established!";
?>

<?php 

  if (isset($_POST['submit'])) {
   
    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $age = $_POST['age'];

    $address = $_POST['address'];

    $contact = $_POST['contact'];

    $birthday = $_POST['birthday'];

    $sql = "INSERT INTO `gumangcamInfo`(`firstname`, `lastname`, `age`, `address`, `contact`, `birthday`) VALUES ('$first_name','$last_name','$age','$address','$contact','$birthday')";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        
      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

}

$sql = "SELECT * FROM gumangcaminfo";

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
<h2>Student Profile</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Student Information:</legend>

    Student ID:<br>

    <input id="id" type="text" name="id" value="Auto" readonly>

    <br>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Age:<br>

    <input type="number" name="age">

    <br>

    Address:<br>

    <input type="text" name="address">

    <br>

    Contact Number:<br>
    <input type="phone" name="contact"><br>

    Birthdate: <br>
    <input type="date" name="birthday">    
    <br>


    <input id="submit" type="submit" name="submit" value="submit">
 
  </fieldset>

</form>





<div class="container">

        <h2>STUDENT LIST</h2>

<table class="table">

    <thead>

        <tr>

        <th>STUDENT ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Age</th>

        <th>Address</th>

        <th>Contact</th>

        <th>Birthday</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
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