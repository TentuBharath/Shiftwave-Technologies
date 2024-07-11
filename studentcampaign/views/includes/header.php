<?php session_start();
if (!$_SESSION && $_SESSION['type'] != 'student') {
  header("location:../index.php");
} ?>
<?php
require("../config/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Campaign</title>
  <link rel="icon" href="../assets/images/logo/file.png">
  <link rel="stylesheet" href="../assets/css/home.css" />
  <link rel="stylesheet" href="../assets/css/includes/header.css">
  <link rel="stylesheet" href="../assets/css/includes/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="../assets/js/results_date.js"></script>
  <script src="../assets/js/login.js"></script>
  <script src="../assets/js/campaign_register.js"></script>
  <script src="../assets/js/home.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<header>
  <img src="../assets/images/logo/file.png" alt="Voting" width="80" height="80" />
  <nav class="navbar">
    <div class="menu">
      <a href="home.php" class="item">Home</a>
      <a href="about.php" class="item">About</a>
      <a href="contactus.php" class="item">Contact us</a>
    </div>
    <img src="../assets/images/logo/profile.png" class="icon" onclick="toggleMenu()" />

    <div class="sub_menu_wrap" id="subMenu">
      <div class="sub_menu">
        <div class="user-info">
          <h2><?= $_SESSION['name'] ?></h2>
          <img src="../assets/images/logo/profile.png" alt="Profile" />
        </div>
        <hr />
        <a href="../views/profile.php" class="sub_menu_link">
          <p>Profile</p>
          <span>></span>
        </a>

        <a href="../controllers/logout.php" class="sub_menu_link">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>
  </nav>
</header>