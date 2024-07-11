<?php
include("../config/db.php");
session_start();
$college_id = $_SESSION['college_id'];
$sname = $_SESSION['name'];
$camp_name = $_POST['camp_name'];
$vot = "SELECT * FROM `voting` WHERE `student_name` = '$sname' AND `student_id` = '$college_id'";
$run = mysqli_query($conn, $vot);
$data = mysqli_fetch_assoc($run);
$check = mysqli_num_rows($run);
if ($check >= 1) {
    echo "Already completed your vote..!";
} else {
    $sel = "INSERT INTO `voting` (`student_name`, `student_id`, `campaign_name`) VALUES ('$sname', '$college_id', '$camp_name')";
    $run1 = mysqli_query($conn, $sel);
    $udt = "UPDATE `register_students` SET `status`='1' WHERE `student_id` = '$college_id'";
    $out = mysqli_query($conn, $udt);
    // for candidate votes counting
    $camp_run = mysqli_query($conn, "SELECT * FROM `campaign` WHERE `campaign_name` = '$camp_name'");
    $data = mysqli_fetch_assoc($camp_run);
    $vote = $data['votes'];
    $countvotes = $vote + 1;
    $udt_camp = mysqli_query($conn, "UPDATE `campaign` SET `votes`='$countvotes' WHERE `campaign_name` = '$camp_name'");
    // total votes counting
    $campaign_run = mysqli_query($conn, "SELECT * FROM `total_votes` WHERE `delete_status`= '0'");
    $vote_data = mysqli_fetch_assoc($campaign_run);
    $total_vote = $vote_data['votes'];
    $totalvotes = $total_vote + 1;
    $sel_total = mysqli_query($conn, "UPDATE `total_votes` SET `votes`='$totalvotes' WHERE `delete_status`= '0'");
    echo "success";
}
