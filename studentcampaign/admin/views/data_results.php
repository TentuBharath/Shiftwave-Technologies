<body>
  <?php
  include('includes/header.php');
  ?>
  <div class="container-fluid">
    <div class="card shadow mb4">
      <div class="card-header py3">
        <h5 class="m-0 font-weight-bold text-primary">Campaign Voting results data</button>
          <?php
          $i = 1;
          $rows = mysqli_query($conn, "SELECT * FROM total_votes WHERE `delete_status`='0'");
          ?>
          <?php foreach ($rows as $row) : ?>
            <a href="data_total_votes.php" class="btn btn-primary">Total Votes : <?php echo $row['votes'] ?></a>
          <?php endforeach ?>
        </h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Candidate Name</th>
                <th>Campaign Name</th>
                <th>Votes</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rows = mysqli_query($conn, "SELECT * FROM campaign WHERE `delete_status` = 0");
              ?>
              <?php
              if (isset($rows)) {
                foreach ($rows as $row) :
              ?>
                  <tr>
                    <td><?php echo $row['candidate_name'] ?></td>
                    <td><?php echo $row['campaign_name'] ?></td>
                    <td><?php echo $row['votes'] ?></td>
                  </tr>
              <?php endforeach;
              } else {
                echo "No Records Found";
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php'); ?>
</body>