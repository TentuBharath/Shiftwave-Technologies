<?php
include("../config/db.php");
$id = $_GET['id'];
// $sql = "UPDATE register_students SET `student_id`='$clg_id',`student_name`='$name',`student_email`='$mail',`password`='$pass',`student_phone`='$phone',`student_dob`='$new_dob',`student_gender`='$gender' WHERE id='$id'";
$sql = "UPDATE `winners` SET `delete_status`= '1' WHERE id='$id'";
$run = mysqli_query($conn, $sql);
header('Location: winners.php');