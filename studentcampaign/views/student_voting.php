<body>
  <?php include('includes/header.php'); ?>
  <div class="home-container"> 
  <?php
  $i=1;
  $rows = mysqli_query($conn,"SELECT * FROM campaign WHERE '1'");
  ?>
  <?php foreach($rows as $row): ?>
    <div class="camp">
      <div>
        <img src="../images/<?php echo $row['campaign_logo'] ?>" class="home-item" />
      </div>
      <div class="home-text"><?php echo $row['campaign_name'] ?></div>
     <?php $camp_name = $row['campaign_name']; ?>
      <!-- <button type="submit" class="result-btn" onclick="VoteNow() ">Vote</button> -->
      <a class="result-a" onclick="VoteNow('<?php echo  $camp_name ?>')">Vote</a>
      
    </div>
    <?php endforeach ?>
  </div>
  <?php include('includes/footer.php'); ?>
</body>