<?php
include("../config/db.php");
$activateDate = $_POST['activateDate'];
$closeDate = $_POST['closeDate'];

$sql = "INSERT INTO vote_dates (vote_activate, vote_closed) VALUES ('$activateDate', '$closeDate')";
$sql_run = mysqli_query($conn, $sql);
echo 'success';
?>