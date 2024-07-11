<body>
    <?php include('includes/header.php'); ?>
    <!-- Modal -->
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
                                    <input type="text" id="student_id" class="form-control" placeholder="Enter the college id" required>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" id="student_name" class="form-control" placeholder="Enter the name" required>
                                </div>
                                <div class="form-group">
                                    <label>Mail ID</label>
                                    <input type="email" id="student_mail" class="form-control" placeholder="Enter the email id" required autocomplete="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" id="student_pass" class="form-control" placeholder="Enter the password" required autocomplete="current-password">
                                </div>
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" id="student_dob" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone no</label>
                                    <input type="tel" id="student_phn" class="form-control" placeholder="Enter the phone no" required>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select name="" class="form-control" id="student_gen">
                                        <option value="Select">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="SaveDetails()">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">


        <div class="card shadow mb4">
            <div class="card-header py3">
                <h4 class="m-0 font-weight-bold text-primary">Students
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentmodal">
                        ADD
                    </button>
                </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>College ID</th>
                                <th>Name</th>
                                <th>Mail ID</th>
                                <th>Password</th>
                                <th>DOB</th>
                                <th>Phone no</th>
                                <th>Gender</th>
                                <th>Vote Status</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM register_students WHERE `delete_status` = '0'");
                            ?>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row) :
                            ?>

                                    <tr>
                                        <td><?php echo $row['student_id'] ?></td>
                                        <td><?php echo $row['student_name'] ?></td>
                                        <td><?php echo $row['student_email'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><?php echo $row['student_dob'] ?></td>
                                        <td><?php echo $row['student_phone'] ?></td>
                                        <td><?php echo $row['student_gender'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td>
                                            <form action="edit.php" method="POST">
                                                <button type="submit" class="edit" data-bs-toggle="modal" onclick="EditStudent()"><a class="btn btn-primary" href="student_edit.php?id=<?= $row['id'] ?>">Edit</a></button>
                                            </form>
                                        </td>
                                        <td>
                                            <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-danger" href="deletedata.php?id=<?= $row['id'] ?>">Delete</a></button>
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