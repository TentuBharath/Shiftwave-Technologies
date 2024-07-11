<body>
  <?php
  include('includes/header.php');
  ?>
  <div class="container-fluid">

<div class="card shadow mb4">
  <div class="card-header py3">
    <h5 class="m-0 font-weight-bold text-primary">Campaign Members Data</h5>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Candidate Name</th>
            <th>Campaign Name</th>
            <th>College ID</th>
            <th>DOB</th>
            <th>Qualification</th>
            <th>Gender</th>
            <th>Mail ID</th>
            <th>Phone no</th>
            <th>Campaign Logo</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $rows = mysqli_query($conn, "SELECT * FROM campaign WHERE 1");
          ?>
          <?php
          if (isset($rows)) {
            foreach ($rows as $row) :
          ?>
              <tr>
                <td><?php echo $row['candidate_name'] ?></td>
                <td><?php echo $row['campaign_name'] ?></td>
                <td><?php echo $row['college_id'] ?></td>
                <td><?php echo $row['date_of_birth'] ?></td>
                <td><?php echo $row['qualification'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['mail_id'] ?></td>
                <td><?php echo $row['phone_no'] ?></td>
                <td><img src="../../images/<?php echo $row['campaign_logo'] ?>" alt="image" width="100px" height="100px"></td>
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