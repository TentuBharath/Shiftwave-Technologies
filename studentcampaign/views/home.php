<head>
  <?php
  include "../config/db.php";
  $sel = mysqli_query($conn, "SELECT * FROM `vote_dates` WHERE `status` = 'active'");
  $check = mysqli_num_rows($sel);
  $data = mysqli_fetch_assoc($sel);
  include('includes/header.php');
  if ($check == 1) {
    $activateTime = $data['vote_activate'];
    $closeTime = $data['vote_closed'];
  } else {
    $ele = '<div class="timer">
        <h1 class="timer-text">The voting period has ended.</h1>
      </div>';
   }
  ?>
    <script>
      var voteactive = <?php echo json_encode($activateTime); ?>;
      var voteclose = <?php echo json_encode($closeTime); ?>;
    </script>
</head>

<body>
  <div class="home">
    <img src="../assets/images/students/home-bg.jpg" class="home-img" alt="election" />
    <div class="body">
      <div class="heading">
        <h3 class="home-header">Election Day</h3>
      </div>
      <h1 class="home-heading">ELECTION<br />CAMPAIGN</h1>
      <div class="timer">
        <h1 class="timer-text"></h1>
      </div>
      <?php
        echo @$ele
      ?>

    <button class="home-btn">
      <a href="student-vote_login.php">
        Vote now
      </a>
    </button>


    </div>
  </div>
  <div class="home-container">
    <div class="camp">
      <div><a href="campaign_registration.php">
          <img src="../assets/images/students/campaign.jpg" class="home-item" />
      </div>
      </a>
      <div class="home-text">Campaign Registeration</div>
    </div>
    <div class="notify">
      <div><a href="notification.php">
          <img src="../assets/images/students/notification.jpg" class="home-item" />
      </div>
      </a>
      <div class="home-text">Notifications</div>
    </div>
    <div class="results">
      <div><a href="student_results.php">
          <img src="../assets/images/students/reults.jpg" class="home-item" />
      </div>
      </a>
      <div class="home-text">Results</div>
    </div>
  </div>
  <div class="box_complaint">
    <div class="text">
      <h1 class="complaint-head">COMPLAINT BOX</h1><br>
    </div>
    <div class="complaint">
      <img src="../assets/images/logo/complaint.png" class="bg_contact" alt="image">
      <div class="complaint-box">
        <textarea id="message" class="message" placeholder="Describe your complaint" required></textarea>
        <div class="btn-send">
          <button type="submit" class="complaint-btn" onclick="complaint()">Submit</button>
        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
</body>