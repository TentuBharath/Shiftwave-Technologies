<head>
  <?php
  include("../config/db.php");
  $sel = mysqli_query($conn, "SELECT * FROM `results_dates` WHERE `status` = 'active'");
  $data = mysqli_fetch_assoc($sel);
  $check = mysqli_num_rows($sel);
  include('includes/header.php');
  if ($check == 1) {
    $resultstart = $data['result_activate'];
    $resultend = $data['result_closed'];
  ?>
    <div class="timer">
      <h1 class="timer-txt"></h1>
    </div>
  <?php
  }
  ?>
  <script>
    var resultactive = <?php echo json_encode($resultstart); ?>;
    var resultclose = <?php echo json_encode($resultend); ?>;
  </script>
</head>

<body>
  <div class="resultshide">
    <?php
    $i = 1;
    $win = mysqli_query($conn, "SELECT * FROM campaign WHERE `delete_status`='0' ORDER BY `campaign`.`votes` DESC limit 1");
    $data = mysqli_fetch_assoc($win);
    $maj = mysqli_query($conn, "SELECT * FROM campaign ORDER BY `campaign`.`votes` DESC limit 2");
    $result = 0;
    $scan = mysqli_num_rows($win);
    if ($scan == 1) {
      foreach ($maj as $row) :
        $result = abs($result - $row['votes']);
      endforeach;

      // $mem_name = $data['candidate_name'];
      // $campaigname = $data['campaign_name'];
      // $camplogo = $data['campaign_logo'];
      // $win_votes = $data['votes'];
      // echo $result;
      // $ins = mysqli_query($conn, "INSERT INTO `winners`(`candidate_name`, `campaign_name`, `campaign_logo`, `votes`) VALUES ('$mem_name', '$campaigname', '$camplogo', '$win_votes')");
      // } else {
      //   echo "No previous winner candidates";
    ?>
      <div class="win_cover">
        <div class="winner">
          <p class="winning"><?php echo $data['candidate_name'] ?> won by majority of <?php echo $result ?> votes</p>
          <img src="../images/<?php echo $data['campaign_logo'] ?>" class="home-item win_img" />
          <div class="win_txt"><?php echo $data['candidate_name'] ?></div>
          <button type="submit" class="result-a"><?php echo $data['votes'] ?></button>
        </div>
      </div>
    <?php
    } else {
      echo "No previous winner candidates";
    }
    ?>
    <div class="camp_members">
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM campaign WHERE `delete_status`='0'");
      ?>
      <?php
      foreach ($rows as $ro) :
      ?>
        <div class="camp">
          <img src="../images/<?php echo $ro['campaign_logo'] ?>" class="home-item" />
          <div class="home-text"><?php echo $ro['campaign_name'] ?>
          </div>
          <button type="submit" class="result-a"><?php echo $ro['votes'] ?></button>
        </div>
      <?php endforeach ?>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
</body>