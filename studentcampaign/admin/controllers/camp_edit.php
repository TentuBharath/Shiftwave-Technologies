<?php
include("../config/db.php");

$cnd_name = $_POST['candidate_name'];
$camp_name = $_POST['campaign_name'];
$clg_id = $_POST['college_id'];
$dob = $_POST['date_of_birth'];
$new_dob = date("d-m-Y", strtotime($dob));
$qualify = $_POST['qualification'];
$gender = $_POST['gender'];
$mail_id = $_POST['mail_id'];
$phone = $_POST['phone_no'];
$image = $_FILES['image'];
$image_name = $image['name'];
$image_tmp_name = $image['tmp_name'];
$image_size = $image['size'];
$exp = explode('.', $image_name);
$ext = end($exp);
$image_name_new = $exp[0] . '-' . date("Y-m-d-H-i-s") . "." . $ext;
$image_path = '../../images/';
$image_path = $image_path . $image_name_new;
$id = $_POST['id'];
if (move_uploaded_file($image_tmp_name, $image_path)) {
    $sql = "UPDATE campaign SET `candidate_name`='$cnd_name',`campaign_name`='$camp_name',`college_id`='$clg_id',`date_of_birth`='$new_dob',`qualification`='$qualify',`gender`='$gender',`mail_id`='$mail_id',`phone_no`='$phone',`campaign_logo`='$image_name_new' WHERE id='$id'";
    $run = mysqli_query($conn, $sql);
    echo "success";
}
