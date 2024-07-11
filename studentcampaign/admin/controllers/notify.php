<?php
include("../config/db.php");
$message = $_POST['txt_notify'];
$now = date('Y-m-d H:i:s');
$sql = "INSERT INTO notification (`notification`, `created_date`) VALUES ('$message', '$now')";
$sql_run = mysqli_query($conn, $sql);
echo 'success';
?>