<body>
  <?php
  include('includes/header.php');
  ?>
  <!-- registration dates -->

  <div class="modal fade" id="studentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registration Date</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div id="overlay">
              <div id="std_form">
                <div class="form-group">
                  <label for="activate-date">Active Date</label>
                  <input type="datetime-local" id="activate-date" name="activate-date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="close-date">Closed Date</label>
                  <input type="datetime-local" id="close-date" name="close-date" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="savedates()">Save Dates</button>
        </div>
      </div>
    </div>
  </div>

  <!-- voting dates -->

  <div class="modal fade" id="vote-date" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Voting Date</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" enctype="multipart/form-data">
          <div class="modal-body">
            <div id="overlay">
              <div id="std_form">
                <div class="form-group">
                  <label for="activate-date">Active Date</label>
                  <input type="datetime-local" id="start-date" name="activate-date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="close-date">Closed Date</label>
                  <input type="datetime-local" id="end-date" name="close-date" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick="votedates()">Save Dates</button>
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
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vote-date">
            Voting
          </button>
        </h5>
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
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rows = mysqli_query($conn, "SELECT * FROM campaign WHERE `delete_status` = '0'");
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
                    <td>
                      <form action="edit.php" method="POST">
                        <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-primary" href="campaign_edit.php?id=<?= $row['id'] ?>">Edit</a></button>
                      </form>
                    </td>
                    <td>
                      <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-danger" href="camp_delete.php?id=<?= $row['id'] ?>">Delete</a></button>
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