<body>
    <?php
    include('includes/header.php');
    ?>
    <div class="modal fade" id="studentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Studnet</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="addstudent.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="overlay">
                            <div id="std_form">
                                <div class="form-group">
                                    <label>College ID</label>
                                    <textarea name="" id="notify" class="form-control" placeholder="Enter the college id" ></textarea>
                                    <!-- <input type="text" id="student_id" class="form-control" placeholder="Enter the college id" required> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="sentnotification()">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card shadow mb4">
            <div class="card-header py3">
                <h5 class="m-0 font-weight-bold text-primary">Notifications
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentmodal">
                        Generate
                    </button>
                </h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Notification</th>
                                <th>created date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM `notification` WHERE `status` = 0");
                            ?>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row) :

                            ?>
                                    <tr>
                                        <td><?php echo $row['notification'] ?></td>
                                        <td><?php echo $row['created_date'] ?></td>
                                        <td>
                                            <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-danger" href="notifydelete.php?id=<?= $row['id'] ?>">Delete</a></button>
                                        </td>
                                    </tr>
                            <?php
                                endforeach;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>