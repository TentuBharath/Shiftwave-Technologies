<body>
  <?php include('includes/header.php'); ?>
  <div class="verify-container">
    <div>
      <h1 class="verify-header"><b>Student Vote</b></h1>
    </div>
    <div class="verify-form">
      <div class="verify-group">
        <label for="text" class="verify-lable">Student Name :</label>
        <input type="text" class="sname" id="sname" />
      </div>
      <div class="verify-group">
        <label for="id" class="verify-lable">College ID :</label>
        <input type="text" class="clgid" id="clgid" />
      </div>
      <!-- <div class="verify-group">
        <label for="num" class="verify-lable">Date of Birth :</label>
        <input type="date" class="dob" id="dob" />
      </div> -->
      <button type="submit" class="verify-btn" id="verify-btn" onclick="StudentVote()">Submit</button>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
</body>