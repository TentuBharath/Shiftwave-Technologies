<?php
include("../config/db.php");

$clg_id = $_POST['student_id'];
$name = $_POST['student_name'];
$mail = $_POST['student_mail'];
$pass = $_POST['student_pass'];
$dob = $_POST['student_dob'];
$new_dob = date("d-m-Y", strtotime($dob));
$phone = $_POST['student_phn'];
$gender = $_POST['student_gen'];
$id = $_POST['id'];
$sql = "UPDATE register_students SET `student_id`='$clg_id',`student_name`='$name',`student_email`='$mail',`password`='$pass',`student_phone`='$phone',`student_dob`='$new_dob',`student_gender`='$gender' WHERE id='$id'";
$run = mysqli_query($conn, $sql);
echo "success";
