<?php
include("../config/db.php");
$vot_date = mysqli_query($conn, "SELECT * FROM vote_dates  ORDER BY `id` DESC limit 1");
$vote_data = mysqli_fetch_assoc($vot_date);
$end_date = $vote_data['vote_closed'];
$currentDate = date('Y-m-d');
$win = mysqli_query($conn, "SELECT * FROM campaign WHERE `delete_status` = '0' ORDER BY `campaign`.`votes` DESC limit 1");
$dat = mysqli_fetch_assoc($win);
$mem_name = $dat['candidate_name'];
$campaigname = $dat['campaign_name'];
$camplogo = $dat['campaign_logo'];
$win_votes = $dat['votes'];
$sel = mysqli_query($conn, "SELECT * FROM `winners` WHERE `candidate_name` = '$mem_name' AND `campaign_name` = '$campaigname'");
$check = mysqli_num_rows($sel);
if ($currentDate >= $end_date) {
    $ins = mysqli_query($conn, "INSERT INTO `winners`(`candidate_name`, `campaign_name`, `campaign_logo`, `votes`) VALUES ('$mem_name', '$campaigname', '$camplogo', '$win_votes')");
    echo 'success';
} if ($check == 1) {
    echo "Already this person in the table.";
    echo 'success';
}
