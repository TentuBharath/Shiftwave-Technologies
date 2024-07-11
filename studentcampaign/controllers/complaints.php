<?php
  include("../config/db.php");
  session_start();
  $college_id = $_SESSION['college_id'];
  $stud_name = $_SESSION['name'];
  $text_message = $_POST['complaint'];
  $sel = "INSERT INTO `complaints` (`college_id`, `student_name`, `complaint`) VALUES ('$college_id', '$stud_name ', '$text_message')";
  $run = mysqli_query($conn, $sel);
  echo 'success';