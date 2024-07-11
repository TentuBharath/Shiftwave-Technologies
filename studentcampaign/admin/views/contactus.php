 <body>
     <?php include('includes/header.php') ?>
     <div class="container-fluid">
        <div class="card shadow mb4">
            <div class="card-header py3">
                <h5 class="m-0 font-weight-bold text-primary">contact us</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mail-ID</th>
                                <th>Phone No</th>
                                <th>Message</th>
                                <th>Time</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = mysqli_query($conn, "SELECT * FROM `contactus` WHERE `delete_status` = '0'");
                            ?>
                            <?php
                            if (isset($rows)) {
                                foreach ($rows as $row) :

                            ?>
                                    <tr>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['mail_id'] ?></td>
                                        <td><?php echo $row['phn_no'] ?></td>
                                        <td><?php echo $row['message'] ?></td>
                                        <td><?php echo $row['time'] ?></td>
                                        <td>
                                            <button type="submit" class="edit" data-bs-toggle="modal"><a class="btn btn-danger" href="../controllers/contactus-delete.php?id=<?=$row['id']?>">Delete</a></button>
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
     <?php include('includes/footer.php') ?>
 </body>