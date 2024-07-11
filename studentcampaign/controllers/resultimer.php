<?php
include("../config/db.php");
$start = $_POST['active'];
$end = $_POST['close'];
$upt = mysqli_query($conn, "UPDATE `results_dates` SET `status`='closed', `delete_status`='1' WHERE `result_activate` = '$start'");
echo 'success';