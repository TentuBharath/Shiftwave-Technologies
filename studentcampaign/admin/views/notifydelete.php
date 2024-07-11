<?php
include("../config/db.php");
$id = $_GET['id'];
echo $id;
// $sql = "UPDATE register_students SET `student_id`='$clg_id',`student_name`='$name',`student_email`='$mail',`password`='$pass',`student_phone`='$phone',`student_dob`='$new_dob',`student_gender`='$gender' WHERE id='$id'";
$run = mysqli_query($conn, "UPDATE `notification` SET `status`='1' WHERE `id`='$id'");
header('Location: notification.php');
