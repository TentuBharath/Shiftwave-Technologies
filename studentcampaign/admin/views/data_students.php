<body>
    <?php include('includes/header.php'); ?>
    <div class="container-fluid">
        <div class="card shadow mb4">
            <div class="card-header py3">
                <h4 class="m-0 font-weight-bold text-primary">Students List</h4>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM register_students WHERE 1");
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