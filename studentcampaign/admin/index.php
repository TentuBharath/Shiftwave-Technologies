<?php
session_start();
if ($_SESSION) {
  header("location:views/dashboard.php");
} ?>

<title>Admin Login</title>
<link rel="stylesheet" href="assets/css/style.css" />
<script src="assets/js/login.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<body>
  <div class="login_box">
    <div class="image" class="admin">
      <h1 class="admin-header"><b>Login</b></h1>
      <img src="assets/images/admin/admin.jpg" class="admin_img" />
    </div>
    <div class="loginForm">
      <div class="form-group">
        <label for="id" class="admin-label">Email ID :</label>
        <input type="email" class="admin-input" id="email_id" />
      </div>
      <div class="form-group">
        <label for="password" class="admin-label">Password:</label>
        <input type="password" class="admin-input" id="password" />
      </div>
      <button type="submit" class="admin-btn" onclick="AdminLogin()">Login</button>
    </div>
  </div>
</body>