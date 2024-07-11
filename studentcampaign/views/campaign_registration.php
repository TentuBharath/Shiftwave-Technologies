<head>
  <?php
  include("../config/db.php");
  $sel = mysqli_query($conn, "SELECT * FROM `registration_dates` WHERE `status` = 'active'");
  $data = mysqli_fetch_assoc($sel);
  $check = mysqli_num_rows($sel);
  include('includes/header.php');
  if ($check == 1) {
    $activateTime = $data['activate_date'];
    $closeTime = $data['closed_date'];
  ?>
    <div class="timer">
      <h1 class="timer-txt"></h1>
    </div>
  <?php
  } else {
    ?>
    <div class="end-timer">
      <h1 class="endtimer-txt">The registration period has ended.</h1>
        </div>
    <?php
  }
  ?>
  <script>
    var regisetractive = <?php echo json_encode($activateTime); ?>;
    var registerclose = <?php echo json_encode($closeTime); ?>;
  </script>
</head>

<body>
  <div class="camp_container">
    <div id="hide" class="form">
      <h1 class="heading">CAMPAIGN REGISTRATION</h1>
      <form class="camp_form">
        <lable class="register-lable">Candidate Name:</lable>
        <input type="text" class="camp-text" id="cand_name" /><br />
        <lable class="register-lable">Campaign Name:</lable>
        <input type="text" class="camp-text" id="camp_name" /><br />
        <lable class="register-lable">College ID:</lable>
        <input type="class" class="camp-text" id="college_id" /><br />
        <lable class="register-lable">Date of Birth:</lable>
        <input type="date" class="camp-text" id="dob" /><br />
        <lable class="register-lable">Gender:</lable>
        <select name="" class="camp-text" id="gender">
          <option value="Select">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select><br />
        <lable class="register-lable">Qualification:</lable>
        <input type="text" class="camp-text" id="qualification" /><br />
        <lable class="register-lable">Mail ID:</lable>
        <input type="text" class="camp-text" id="mail" /><br />
        <lable class="register-lable">Phone No:</lable>
        <input type="text" class="camp-text" id="phone" maxlength="10" /><br />
        <lable class="register-lable">Campaign logo:</lable>
        <input type="file" class="camp-text" id="logo" />
      </form>
      <div class="camp_btn">
        <button type="submit" class="btn-submit" onclick="Register()">Submit</button>
        <!-- <button type="reset" class="btn-reset">Reset</button> -->
      </div>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
</body>