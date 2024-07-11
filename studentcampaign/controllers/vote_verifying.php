 <?php
   include("../config/db.php");
   session_start();
   $college_id = $_SESSION['college_id'];
   $sname = $_SESSION['name'];
   $s_name = $_POST['sname'];
   $clg_id = $_POST['clgid'];
   if ($sname . $college_id === $s_name . $clg_id) {
      $sel = "SELECT * FROM `register_students` WHERE `student_id`= '$college_id'";
      $run = mysqli_query($conn, $sel);
      $data = mysqli_fetch_assoc($run);
      $status = $data['status'];
      if ($status != 0) {
         echo 'Already completed your vote..!';
      } else {
         echo 'success';
      }
   } else {
      echo 'Invalid details';
   }
   ?>