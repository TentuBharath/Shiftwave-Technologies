<?php
include("../config/db.php");
$activateDate = $_POST['activateDate'];
$closeDate = $_POST['closeDate'];

$sql = "INSERT INTO registration_dates (`activate_date`, `closed_date`) VALUES ('$activateDate', '$closeDate')";
$sql_run = mysqli_query($conn, $sql);
echo 'success';
?>