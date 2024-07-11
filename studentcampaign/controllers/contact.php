<?php
  include("../config/db.php");
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $phn_no = $_POST['phn_no'];
  $msg = $_POST['msg'];
  $currentDateTime = date('Y-m-d H:i:s');
  $inst = mysqli_query($conn, "INSERT INTO `contactus`(`name`, `mail_id`, `phn_no`, `message`,`time`) VALUES ('$name','$mail','$phn_no','$msg','$currentDateTime')");
  echo "success";