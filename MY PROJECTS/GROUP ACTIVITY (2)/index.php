<!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="CSS/style1.css">
  </head>

  <body>
      <nav class="navbar">
          <div class="logo-container">
            <img class="logo" src="PICTURE/logo-removebg-preview.png" alt="Logo">
            <div class="header">DATAMEX COLLEGE OF ST.ADELINE</div>
          </div>
          <div class="btn-container">
              <button class="btn login-btn" onclick="togglePopupLogin()">Log In</button>
            <button class="btn register-btn" onclick="redirectToRegister()">Register</button>
          </div>
        </nav>
        
        <div class="popup-login" id="popup-login">
          <div class="login-form">
            <div class="logo-container1">
              <img class="logo1" src="PICTURE/logo-removebg-preview.png" alt="Logo">
            </div>

            <form action="index.php" method="post">
              <label for="username">Username:</label><br>
              <input type="gmail" id="username" name="username" required><br>
              <label for="password">Password:</label><br>
              <input type="password" id="password" name="password" required><br><br>
              <input type="submit" value="Log In" onclick="login()">
            </form>
            <button class="close-btn" onclick="togglePopupLogin()">
              <span class="close-icon">&times;</span>
            </button>
          </div>
        </div>
      
        
      <div class="content">
          <div class="logo">
              <img src="PICTURE/logo.jpg" alt="">
          </div>
          
          <div class="header">
              DATAMEX COLLEGE OF ST.ADELINE
          </div>
          <p>
              ELECTRONIC SCHOOL PORTAL
              <br>
              FOR STUDENTS
          </p>
    
      </div>
      <footer class="footer">
          <p>&copy;  2024 Datamex College of St. Adeline. All rights reserved.</p>
        </footer>
    
      <script>
    function togglePopupLogin() {
    const popupLogin = document.getElementById("popup-login");
    popupLogin.style.display = "block";
  }

  document.querySelector(".login-btn").addEventListener("click", togglePopupLogin);

  document.querySelector(".close-btn").addEventListener("click", () => {
    const popupLogin = document.getElementById("popup-login");
    popupLogin.style.display = "none";
  });
  function redirectToRegister() {
    window.location.href = "register.php";
  }
 
 
        </script>

<?php
include "connection1.php"; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST["password"];

  

    $sql = "SELECT * FROM dbtable WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if (!$result) {
        die("Failed to execute query: " . $conn->error);
    } elseif ($result->num_rows > 0) {

        $data = $result->fetch_array();
   
        echo "<script> alert('Login Successfully'); window.location.href = 'Student.php?ID=" . $data['ID'] . "'</script>";
        exit(); 
    } else {
        echo "<script> alert('Login failed') </script>";
    }
}

$conn->close();
?>

  </body>



  </html>