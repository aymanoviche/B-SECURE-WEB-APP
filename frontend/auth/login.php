<?php
session_start(); // Start session to access error messages
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="./media/Webclip.png" type="image/x-icon" />
    <link rel="shortcut icon" href="./media/Webclip.png" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#1b4e72" />
    <title>B-Secure | Login</title>
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" />
    <!-- GENERAL CSS FILE -->
    <link rel="stylesheet" href="../css/general.css" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../css/all.min.css" />
    <!-- MAIN CSS FILE -->
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/register.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="nav flex">
          <ul class="nav_list flex desktop_list">
            <li class="nav_link middle"><a href="../index.html#about">About Us</a></li>
            <li class="nav_link middle"><a href="../index.html#leadership">Leadership</a></li>
            <li class="nav_link middle"><a href="../index.html#contact">Join Us</a></li>
          </ul>
          <a href="../index.html" class="nav_logo">
            <div class="logo">
              <img src="../media/logo.png" alt="Bugbeat logo" />
            </div>
          </a>
          <ul class="nav_list flex desktop_list">
            <li class="nav_link middle"><a href="../index.html#gallery">Club Gallery</a></li>
            <li class="nav_link middle"><a href="../auth/register.php">Register</a></li>
            <li class="nav_link middle"><a href="../auth/login.php">Login</a></li>
          </ul>
          <div class="nav_icon hidden">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </nav>
      </div>
    </header>

    <main class="main-content">
      <div class="form-container">
        <form class="form" action="/B-SECURE-WEB-APP/backend/login.php" method="POST">
          <p class="title">Login</p>
          
          <!-- Display Error Messages -->
          <?php
          if (isset($_SESSION['error'])) {
              echo "<p class='error-message' style='color: red; font-size: 14px;'>" . $_SESSION['error'] . "</p>";
              unset($_SESSION['error']); // Clear error message after displaying it
          }
          ?>

          <label>
              <input class="input" type="email" name="email" placeholder="" required>
              <span>Email</span>
          </label> 
      
          <label>
              <input class="input" type="password" name="password" placeholder="" required>
              <span>Password</span>
          </label>
      
          <button class="submit">Submit</button>
          <p class="signin">Forgot Password? <a href="../auth/login.php">Reset Password</a></p>
        </form>
      </div>
    </main>

    <script src="../script.js"></script>
  </body>
</html>
