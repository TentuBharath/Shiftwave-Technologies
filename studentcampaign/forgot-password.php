<body>
  <script src="assets/js/login.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css" />
  <div class="forgot-container">
    <h3 class="forgot-header"><b>Forgot Password?</b></h3>
    <div class="forgot-form">
      <div class="group">
        <label for="text">College ID :</label>
        <input type="text" class="input-item" id="cid" /><br />
      </div>
      <div class="group">
        <label for="text" class="forgot-label">College password :</label>
        <input type="password" class="input-item" id="clgpass" /><br />
      </div>
      <div class="group">
        <label for="text" class="forgot-label">New password :</label>
        <input type="password" class="input-item" id="npass" /><br />
      </div>
      <div class="group">
        <label for="text" class="forgot-label">Confirm password :</label>
        <input type="password" class="input-item" id="cpass" /><br />
      </div>
      <div class="btn-class">
        <button type="submit" class="forgot-btn" onclick="Login()">Submit</button>
      </div>
    </div>
  </div>
</body>