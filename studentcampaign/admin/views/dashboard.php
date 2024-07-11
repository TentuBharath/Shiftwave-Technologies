<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../assets/images/logo/file.png" />
  <title>Dashboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head> -->

<body>
  <?php include('includes/header.php'); ?>
  <div class="totalvotes">
    <a href="edit_details.php" class="btn-totalvotes student-btn">Students</a>
    <a href="../controllers/new_session.php" class="btn_newsession student-btn">New Session</a>
  </div>
  <div class="home-container">
    <div class="camp">
      <div><a href="admin-campaign.php">
          <img src="../assets/images/admin/campaign.jpg" class="home-img" />
      </div>
      </a>
      <div class="home-text">Campaign Members</div>
    </div>
    <div class="notify">
      <div><a href="notification.php">
          <img src="../assets/images/admin/notification.jpg" class="home-img" />
      </div>
      </a>
      <div class="home-text">Notifications</div>
    </div>
    <div class="notify">
      <div><a href="admin_results.php">
          <img src="../assets/images/admin/reults.jpg" class="home-img" />
      </div>
      </a>
      <div class="home-text">Results</div>
    </div>
    <div class="results">
      <div><a href="complaints.php">
          <img src="../assets/images/admin/complaint.jpg" class="home-img" />
      </div>
      </a>
      <div class="home-text">Complaints</div>
    </div>

  </div>
  <?php include('includes/footer.php'); ?>
</body>