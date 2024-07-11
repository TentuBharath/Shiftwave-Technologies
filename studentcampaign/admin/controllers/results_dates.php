<?php
include("../config/db.php");
$activateDate = $_POST['activateDate'];
$closeDate = $_POST['closeDate'];

$sql = "INSERT INTO results_dates (result_activate, result_closed) VALUES ('$activateDate', '$closeDate')";
$sql_run = mysqli_query($conn, $sql);
echo 'success';
?>