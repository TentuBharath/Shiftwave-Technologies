<?php if(!@$_GET['id']){
 header('Location: edit_details.php');
}else{?>
<body>
    <?php include('includes/header.php'); ?>
    <div class="overlay"></div>
    <div class="edit-form" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Student Edit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $id = $_GET['id'];
                    $rows = mysqli_query($conn, "SELECT * FROM register_students WHERE id=$id");
                    $data = mysqli_fetch_assoc($rows);
                    ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>College ID</label>
                            <input type="text" id="student_id" class="form-control" placeholder="Enter the college id" value="<?php echo $data['student_id'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" id="student_name" class="form-control" placeholder="Enter the name" value="<?php echo $data['student_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Mail ID</label>
                            <input type="email" id="student_mail" class="form-control" placeholder="Enter the email id" value="<?php echo $data['student_email'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="student_pass" class="form-control" placeholder="Enter the password" value="<?php echo $data['password'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" id="student_dob" class="form-control" value="<?php echo $data['student_dob'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone no</label>
                            <input type="tel" id="student_phn" class="form-control" placeholder="Enter the phone no" value="<?php echo $data['student_phone'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="" class="form-control" id="student_gen">
                                <option value="Select"><?php echo $data['student_gender'] ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            <div>
                                <button class="btn btn-primary" id="btn btn-primary" onclick=" Submit(<?php echo $id ?>)">submit</button>
                            </div>
                        </div>
                    </div>
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>
</body>

<script>
    // var over = $(".overley");
    var span = $(".btn-close")[0];
    span.onclick = function() {
        $('.overley').css('display', 'flex');
        window.location.href = "edit_details.php";
    }
</script>

<?php } ?>


<!-- original -->