<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/register.css">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <fieldset>
        <div class="form-group">
            <div class="form-group">
                <div class="form-group">
                   
                    <legend>STUDENT REGISTRATION:</legend>
                    <br>
                <label>ID:</label>
                <input id="id" type="text" name="id" class="form-control" value="Auto" readonly><br><br>

                <label>Username</label>
                <input type="text" name="username" class="form-control" required><br><br>

                <label>Password:</label>
                <input type="text" name="password" class="form-control" required><br><br>

                <label>Student ID:</label>
                <input type="text" name="student_id" class="form-control" required><br><br>

                <label>Fullname:</label>
                <input type="text" name="fullname" class="form-control" required><br><br>

                <label>Email:</label>
                <input type="text" name="email" class="form-control" required><br><br>

                <label>Contact:</label>
                <input type="text" name="contact" class="form-control" required><br><br>

                <label for="birthday">Birthdate:</label>
                <input type="date" name="birthday" class="form-control" required><br><br>

                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control" required><br><br>
          
            </div>

            <div class="form-group">
                <input id="submit" type="submit" name="submit" value="SUBMIT" class="btn btn-primary" ><br>
            </div>
          <div class="register-link " ><p>Already Registered <a href="index.php">Login Here</a></p></div>
        </div>
    </fieldset>
    </form>
    <?php

    include "connection1.php";
        
        //PASSING THE DATA FROM HTML TO PHP AND STORE IT IN VARIABLES
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $student_id = $_POST['student_id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
        
            // INSERT DATA TO DATABASE (Student information)
        $sql = "INSERT INTO `dbtable`(`username`, `password`, `student_id`, `fullname`, `email`, `contact`, `birthday`, `address`) VALUES ('$username','$password','$student_id','$fullname','$email' ,'$contact' ,'$birthday','$address')";
            $result = $conn->query($sql);
        
            if ($result == TRUE) {
              
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        $conn->close();
        ?>
</body>
</html>