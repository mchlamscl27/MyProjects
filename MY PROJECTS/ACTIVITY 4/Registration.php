<?php
$serverName = "localhost";
$user = "root";
$pass = "";
$databaseName = "database";
$conn = new mysqli($serverName, $user, $pass, $databaseName);
if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);

}


if (isset($_POST['submit'])) {
   
    $username = $_POST['username'];

    $password = $_POST['password'];

    $student_id = $_POST['student_id'];

    $fullname = $_POST['fullname'];

    $contact = $_POST['contact'];

    $address = $_POST['address'];

    $birthday = $_POST['birthday'];

    $email = $_POST['email'];


    $sql = "INSERT INTO `Registration`(`username`, `password`, `student_id`, `fullname`, `email`, `contact`, `address`, `birthday`) VALUES ('$username','$password','$student_id','$fullname','$email','$contact','$address','$birthday')";

    $result = $conn->query($sql);
    if ($result == TRUE) {
        
      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method = "POST">
        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>
        
        <label>Student ID:</label>
        <input type="text" name="student_id"><br><br>

        <label>Fullname:</label>
        <input type="text" name="fullname"><br><br>

        <label>Email:</label>
        <input type="email" name="email"><br><br>

        <label>Contact:</label>
        <input type="text" name="contact"><br><br>

        <label>Address:</label>
        <input type="text" name="address"><br><br>

        <label>Birthday:</label>
        <input type="text" name="birthday"><br><br>

        <input id="submit" type="submit" name="submit" value="SUBMIT">
    </form>
</body>
</html>