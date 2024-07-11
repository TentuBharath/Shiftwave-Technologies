<body>
  <?php
  include('includes/header.php');
  ?>
  <div class="container-fluid">
    <div class="card shadow mb4">
      <div class="card-header py3">
        <h5 class="m-0 font-weight-bold text-primary">Student Complaints</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>College ID</th>
                <th>Student Name</th>
                <th>complaint</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rows = mysqli_query($conn, "SELECT * FROM complaints WHERE `delete_status`='0'");
              ?>
              <?php
              if (isset($rows)) {
                foreach ($rows as $row) :
              ?>
                  <tr>
                    <td><?php echo $row['college_id'] ?></td>
                    <td><?php echo $row['student_name'] ?></td>
                    <td><?php echo $row['complaint'] ?></td>
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