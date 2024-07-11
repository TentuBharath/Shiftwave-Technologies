<?php session_start();
if (!$_SESSION && $_SESSION['type'] != 'admin') {
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
  <title>Admin Dashboard</title>
  <link rel="icon" href="../assets/images/logo/file.png">
  <link rel="stylesheet" href="../assets/css/admin_home.css">
  <link rel="stylesheet" href="../assets/css/includes/header.css">
  <link rel="stylesheet" href="../assets/css/includes/footer.css">
  <script src="../assets/js/home.js"></script>
  <script src="../assets/js/edit_detials.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </head>

<header>
<img src="../assets/images/logo/file.png" alt="Voting" width="80" height="80" />
  <nav class="navbar">
    <div class="menu">
      <a href="dashboard.php" class="item">Home</a>
      <a href="pre_data.php" class="item">Data</a>
      <a href="about.php" class="item">About</a>
      <a href="contactus.php" class="item">Contact us</a>
    </div>
    <img src="../assets/images/logo/profile.png" class="icon" onclick="toggleMenu()" />

    <div class="sub_menu_wrap" id="subMenu">
      <div class="sub_menu">
        <div class="user-info">
          <h2><?= $_SESSION['adminname'] ?></h2>
          <img src="../assets/images/logo/profile.png" alt="Profile" />
        </div>
        <hr />
        <a href="profile.php" class="sub_menu_link">
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