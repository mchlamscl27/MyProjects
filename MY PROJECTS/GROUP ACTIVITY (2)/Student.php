<?php

include "connection1.php";
$ID = $_GET['ID'];
$Record = mysqli_query($conn, "SELECT * FROM `dbtable` WHERE ID = $ID");
$data = mysqli_fetch_array($Record);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/student.css">
  <title>WELCOME STUDENT!</title>
</head>

<body>
  <nav class="navbar">
    <div class="logo-container">
      <img class="logo" src="PICTURE/logo-removebg-preview.png" alt="Logo">
      <div class="header">DATAMEX COLLEGE OF ST.ADELINE</div>
    </div>
    <div class="btn-container">

      <button class="btn" id="logout-btn" onclick="redirectToindex()">Log Out</button>

    </div>
  </nav>

  <form action="" method="POST">
    <fieldset>

      <div class="form-group">

        <legend>INFORMATION</legend>
        <br>

        <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">

        <label>Username:</label>
        <input type="text" name="Username" value="<?php echo $data['username'] ?>" disabled><br><br>

        <label>Password:</label>
        <input type="text" name="Password" value="<?php echo $data['password'] ?>" disabled><br><br>

        <label for="id">Student ID:</label>
        <input id="id" type="text" name="Student_ID" class="form-control" value="<?php echo $data['student_id'] ?>"
          disabled><br><br>

        <label for="firstname">Fullname:</label>
        <input type="text" name="Fullname" class="form-control" value="<?php echo $data['fullname'] ?>"><br><br>

        <label for="lastname">Email:</label>
        <input type="text" name="Email" class="form-control" value="<?php echo $data['email'] ?>"><br><br>

        <label for="age">Contact:</label>
        <input type="number" name="Contact" class="form-control" value="<?php echo $data['contact'] ?>"><br><br>

        <label for="address">Address:</label>
        <input type="text" name="Address" class="form-control" value="<?php echo $data['address'] ?>"><br><br>

        <label for="birthday">Birthdate:</label>
        <input type="date" name="Birthday" class="form-control" value="<?php echo $data['birthday'] ?>"><br><br>

        <input id="submit" type="submit" name="submit" value="UPDATE" class="btn btn-primary"><br>
      </div>

    </fieldset>

  </form>

  </div>

  <footer class="footer">
    <p>&copy; 2024 Datamex College of St. Adeline. All rights reserved.</p>
  </footer>
  <script>
    function redirectToindex() { window.location.href = "index.php"; }
  </script>
</body>

</html>

<?php

include "connection1.php";

if (isset($_GET['ID'])) {
  $ID = $_GET['ID'];
  $Record = mysqli_query($conn, "SELECT * FROM `dbtable` WHERE ID = $ID");
  $data = mysqli_fetch_array($Record);
}

if (isset($_POST['submit'])) {
  $ID = $_POST['id'];
  $username = $_POST['Username'];
  $password = $_POST['Password'];
  $fullname = $_POST['Fullname'];
  $contact = $_POST['Contact'];
  $address = $_POST['Address'];
  $birthday = $_POST['Birthday'];
  $email = $_POST['Email'];


  $sql = "SELECT * FROM dbtable WHERE username ='$username' AND fullname = '$fullname' AND contact = '$contact' AND address = '$address' AND birthday = '$birthday' AND email = '$email'";
  $result = $conn->query($sql);

  if (!$result) {
    die("Failed to execute query: " . $conn->error);
  } elseif ($result->num_rows > 0) {
    echo "<script>alert('No data has been updated')</script>";
  } else {
    $sql = "UPDATE dbtable SET fullname = '$fullname', contact = '$contact', address = '$address', birthday = '$birthday', email = '$email' WHERE ID = '$ID'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
      echo "<script>alert('Successfully updated'); window.location.href = 'index.php?id=$ID'</script>";
    } else {
      echo "Error: " . $conn->error;
    }
  }
}

?>