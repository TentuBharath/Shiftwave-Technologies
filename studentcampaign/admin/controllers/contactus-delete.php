<?php
include("../config/db.php");
$id = $_GET['id'];
echo $id;
$run = mysqli_query($conn, "UPDATE `contactus` SET `delete_status`='1' WHERE `id`='$id'");
header('Location: ../views/contactus.php');