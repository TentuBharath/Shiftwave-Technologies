<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
    <?php
    include 'includes/header.php';
    require "../config/db.php";
    // $college_id = $_SESSION['college_id'];
    $rows = "SELECT * FROM admin WHERE 1";
    $run = mysqli_query($conn, $rows);
    ?>
    <?php
    if (isset($rows)) {
        foreach ($run as $row) :
    ?>
            <div class="profile-containter">
                <div class="container-fluid">
                    <div class="card shadow mb4">
                        <div class="card-header py3">
                            <h5 class="m-0 font-weight-bold text-primary">PROFILE</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="row g-3">
                                    <div class="col-md-4">
                                        <label for="validationDefault02" class="form-label">Admin name</label>
                                        <input type="text" class="form-control" id="validationDefault02" value="<?php echo $row['admin_name'] ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationDefaultUsername" class="form-label">Email-ID</label>
                                        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="<?php echo $row['admin_email'] ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationDefault03" class="form-label">Phone No</label>
                                        <input type="text" class="form-control" id="validationDefault03" value="<?php echo $row['phone_no'] ?>" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationDefault04" class="form-label">Date of Birth</label>
                                        <p class="form-control"><?php echo $row['admin_dob'] ?></p>
                                    </div>
                                </form>
                        <?php endforeach;
                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <?php include('includes/footer.php'); ?>
</body>