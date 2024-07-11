<?php if(!@$_GET['id']){
 header('Location: admin-campaign.php');
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
                    $rows = mysqli_query($conn, "SELECT * FROM campaign WHERE id=$id");
                    $data = mysqli_fetch_assoc($rows);
                    ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Candidate Name</label>
                            <input type="text" id="candidate_name" class="form-control" placeholder="Enter the candidate name" value="<?php echo $data['candidate_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Campagin Name</label>
                            <input type="text" id="campaign_name" class="form-control" placeholder="Enter the campaign name" value="<?php echo $data['campaign_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>College ID</label>
                            <input type="text" id="college_id" class="form-control" placeholder="Enter the college id" value="<?php echo $data['college_id'] ?>">
                        </div>
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" id="date_of_birth" class="form-control" placeholder="Enter the date of birth" value="<?php echo $data['date_of_birth'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" id="qualification" class="form-control" placeholder="Enter your qualification" value="<?php echo $data['qualification'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="" class="form-control" id="gender">
                                <option value="Select"><?php echo $data['gender'] ?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="form-group">
                                <label>Mail ID</label>
                                <input type="email" id="mail_id" class="form-control" placeholder="Enter the mail id" value="<?php echo $data['mail_id'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Phone no</label>
                                <input type="tel" id="phone_no" class="form-control" placeholder="Enter the phone no" value="<?php echo $data['phone_no'] ?>">
                            </div>
                            <div class="form-group">
                                <label>campaign Logo</label>
                                <input type="file" id="campaign_logo" class="form-control" placeholder="select your campaign logo" value="<?php echo $data['campaign_logo'] ?>">
                            </div>

                            <div>
                                <button class="btn btn-primary" id="btn btn-primary" onclick="Data(<?php echo $id ?>)">submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php'); ?>
</body>

<script>
    var span = $(".btn-close")[0];
    span.onclick = function() {
        $('.overley').css('display', 'flex');
        window.location.href = "admin-campaign.php";
    }
</script>
<?php } ?>


<!-- original -->