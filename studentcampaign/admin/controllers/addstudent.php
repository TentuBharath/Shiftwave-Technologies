<?php
include("../config/db.php");

$clg_id = $_POST['student_id'];
$name = $_POST['student_name'];
$mail = $_POST['student_mail'];
$dob = $_POST['student_dob'];
$new_dob = date("Y-m-d", strtotime($dob));
$phone = $_POST['student_phn'];
$gender = $_POST['student_gen'];
$pass = $_POST['student_pass'];
$sel = "SELECT * FROM `register_students` WHERE  `student_id` = '$clg_id' AND `student_dob` = '$new_dob' AND `password` = '$pass'";
$sel_run = mysqli_query($conn, $sel);
$check = mysqli_num_rows($sel_run);
if ($check >= 1) {
    echo "User Already exit's!";
} else {
    $inst = "INSERT INTO register_students(`student_id`, `student_name`, `student_email`, `password`, `student_phone`, `student_dob`, `student_gender`) VALUES ('$clg_id', '$name', '$mail', '$pass', '$phone', '$new_dob', '$gender')";
    $inst_run = mysqli_query($conn, $inst);
    $new = mysqli_query($conn, "INSERT INTO `new_password`(`student_id`, `student_name`, `new_password`) VALUES ('$clg_id', '$name','$pass')");
    echo 'success';
}
