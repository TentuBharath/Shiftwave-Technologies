<body>
    <?php
    include('includes/header.php');
    ?>
    <div class="container-fluid">
        <div class="card shadow mb4">
            <div class="card-header py3">
                <h5 class="m-0 font-weight-bold text-primary">Notifications Data</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Notification</th>
                                <th>created date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM `notification` WHERE 1");
                            ?>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row) :
                            ?>
                                    <tr>
                                        <td><?php echo $row['notification'] ?></td>
                                        <td><?php echo $row['created_date'] ?></td>
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