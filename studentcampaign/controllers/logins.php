  <?php
  include("../config/db.php");
  $college_id = $_POST['collegeid'];
  $password = $_POST['password'];
  $sel = "SELECT * FROM `register_students` WHERE `student_id` = '$college_id' AND `password` = '$password' AND `delete_status` = 0";
  $run = mysqli_query($conn, $sel);
  $data = mysqli_fetch_assoc($run);
  $name = $data['student_name'];
  // $stdt = "student";
  $check = mysqli_num_rows($run);
  if ($check == 1) {
    session_start();
    $_SESSION["type"] = "student";
    $_SESSION['college_id'] = $college_id;
    $_SESSION['name'] = $name;
    echo "success";
  } else {
    echo "failed";
  }
  ?>