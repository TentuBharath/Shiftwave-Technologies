<body>
    <?php
    include('includes/header.php');
    ?>
    <div class="container-fluid">
        <div class="card shadow mb4">
            <div class="card-header py3">
                <h5 class="m-0 font-weight-bold text-primary">Total no of votes</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>College ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM voting WHERE `delete_status` = 0");
                            ?>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row) :
                            ?>
                                    <tr>
                                        <td><?php echo $row['student_name'] ?></td>
                                        <td><?php echo $row['student_id'] ?></td>
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