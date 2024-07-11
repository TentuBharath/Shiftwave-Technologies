<?php
include("../config/db.php");
$cid = $_POST['cid'];
$clgpass = $_POST['clgpass'];
$npass = $_POST['npass'];
$cpass = $_POST['cpass'];
$sel = mysqli_query($conn, "SELECT * FROM `register_students` WHERE `student_id` = '$cid' AND `password` = '$clgpass' AND `delete_status` = '0'");
$data = mysqli_fetch_assoc($sel);
$clg_id = $data['student_id'];
$old_pass = $data['password'];
$check = mysqli_num_rows($sel);
 if ($npass == $cpass && $cid == $clg_id && $clgpass == $old_pass) {
    $updt = mysqli_query($conn, "UPDATE `new_password` SET `new_password`='$npass' WHERE `student_id` = '$cid'");
    echo "success";
}