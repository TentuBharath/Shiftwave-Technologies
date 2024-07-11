<body>
    <?php
    include('includes/header.php');
    ?>
    <div class="container-fluid">
        <div class="card shadow mb4">
            <div class="card-header py3">
                <h5 class="m-0 font-weight-bold text-primary">Winners</h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Candidate Name</th>
                                <th>Candidate Name</th>
                                <th>Campaign Logo</th>
                                <th>Votes</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM winners WHERE `delete_status` = 0");
                            ?>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row) :
                            ?>
                                    <tr>
                                        <td><?php echo $row['candidate_name'] ?></td>
                                        <td><?php echo $row['campaign_name'] ?></td>
                                        <td><?php echo $row['campaign_logo'] ?></td>
                                        <td><?php echo $row['votes'] ?></td>
                                        <td>
                                            <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-danger" href="delete_winners.php?id=<?= $row['id'] ?>">Delete</a></button>
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
    </div><br><br><br>
    <?php include('includes/footer.php'); ?>
</body>