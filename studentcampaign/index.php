<?php
session_start();
if ($_SESSION) {
  header("location:views/home.php");
}
include("config/db.php")
?>

<body>
  <script src="assets/js/login.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css" />
  <div class="container">
    <div class="image">
      <h1 class="header"><b>Login</b></h1>
      <img src="assets/Images/Students/home_login.jpg" class="login_img" />
    </div>
    <form class="loginForm">
      <div class="form-group">
        <label for="id" class="login-label">College ID :</label>
        <input type="text" class="login-input" id="collegeid" autocomplete="username" />
      </div>
      <div class="form-group">
        <label for="password" class="login-label">Password:</label>
        <input type="password" class="login-input" id="password" autocomplete="current-password">
      </div>
      <button type="submit" class="login-btn" onclick="StudentLogin()">Login</button>
      <a href="forgot-password.php" class="forgot"><em>forgot password?</em></a>
    </form>
  </div>
</body>