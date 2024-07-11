  <?php
  include("../config/db.php");
  $email_id = $_POST['email_id'];
  $password = $_POST['password'];
  $sel = "SELECT * FROM `admin` WHERE `admin_email` = '$email_id' AND `password` = '$password'";
  $run = mysqli_query($conn, $sel);
  $data = mysqli_fetch_assoc($run);
  $adminname = strtoupper($data['admin_name']);
//   $admin = "admin";
  $check = mysqli_num_rows($run);
  if ($check == 1) {
      session_start();
      $_SESSION["type"] = "admin";
      $_SESSION['email_id'] = $email_id;
      $_SESSION['adminname'] = $adminname;
      echo "success";
  } else {
      echo "failed";
  }
  ?>