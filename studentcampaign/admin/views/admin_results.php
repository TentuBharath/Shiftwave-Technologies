<body>
  <?php
  include('includes/header.php');
  ?>
  <div class="modal fade" id="studentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Results Date</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div id="overlay">
              <div id="std_form">
                <div class="form-group">
                  <label for="activate-date">Active Date</label>
                  <input type="datetime-local" id="activatedate" name="activate-date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="close-date">Closed Date</label>
                  <input type="datetime-local" id="closedate" name="close-date" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="resultsdates()">Save Dates</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <div class="card shadow mb4">
      <div class="card-header py3">
        <h5 class="m-0 font-weight-bold text-primary">Campaign Members
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentmodal">
            Registration
          </button>
          <?php
          $i = 1;
          $rows = mysqli_query($conn, "SELECT * FROM total_votes WHERE `delete_status`='0'");
          ?>
          <?php foreach ($rows as $row) : ?>
            <a href="total_votes.php" class="btn btn-primary">Total Votes : <?php echo $row['votes'] ?></a>
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
                <th>Delete</th>
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
                    <td>
                      <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-danger" href="delete_result.php?id=<?= $row['id'] ?>">Delete</a></button>
                    </td>
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