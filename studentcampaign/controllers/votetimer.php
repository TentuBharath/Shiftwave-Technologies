<?php
include("../config/db.php");
$start = $_POST['startDateTime'];
$end = $_POST['endDateTime'];
$upt = mysqli_query($conn, "UPDATE `vote_dates` SET `status`='closed', `delete_status`='1' WHERE `vote_activate`='$start'");
echo 'success';