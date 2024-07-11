<?php
include("../config/db.php");
// campaign data
$upt_campaign = mysqli_query($conn, "UPDATE `campaign` SET `delete_status`='1' WHERE `delete_status`='0'");

// compaints data
$upt_complaint = mysqli_query($conn, "UPDATE `complaints` SET `delete_status`='1' WHERE `delete_status`='0'");

// notification data
$upt_notify = mysqli_query($conn, "UPDATE `notification` SET `status`='1' WHERE `status`='0'");

// registration dates data
$upt_regi_dates = mysqli_query($conn, "UPDATE `registration_dates` SET `delete_status`='1' WHERE `delete_status`='0'");

// results_dates data
$upt_result_dates = mysqli_query($conn, "UPDATE `results_dates` SET `delete_status`='1' WHERE `delete_status`='0'");

// total votes data
$sel_total_votes = mysqli_query($conn, "SELECT * FROM `total_votes` ORDER BY `id` DESC LIMIT 1");
$data=mysqli_fetch_assoc($sel_total_votes);
$id=$data['id'];
$upt_total_votes = mysqli_query($conn, "UPDATE `total_votes` SET `delete_status`='1' WHERE `id`='$id'");
$inst_total_votes = mysqli_query($conn, "INSERT INTO `total_votes`(`votes`) VALUES ('0')");

// vote_dates data
$upt_vote_dates = mysqli_query($conn, "UPDATE `vote_dates` SET `delete_status`='1' WHERE `delete_status`='0'");

// voting data
$upt_voting = mysqli_query($conn, "UPDATE `voting` SET `delete_status`='1' WHERE `delete_status`='0'");
header("Location: ../views/dashboard.php");

// Forgot password table data
$upt_forgot = mysqli_query($conn, "UPDATE `new_password` SET `delete_status`='1' WHERE `delete_status`='0'");