 <?php

    // use function PHPSTORM_META\type;

    include("../config/db.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $cand_name = $_POST['cand_name'];
        $camp_name = $_POST['camp_name'];
        $college_id = $_POST['college_id'];
        $dob = $_POST['dob'];
        // $new_dob = date("d-m-Y", strtotime($dob));
        $gender = $_POST['gender'];
        $qualification = $_POST['qualification'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $sel = "SELECT * FROM `register_students` WHERE  `student_id` = '$college_id' AND `student_dob` = '$dob'";
        $run = mysqli_query($conn, $sel);
        $check = mysqli_num_rows($run);
        if ($check == 1) {
            $image = $_FILES['image'];
            $image_name = $image['name'];
            $image_tmp_name = $image['tmp_name'];
            $image_size = $image['size'];
            $exp = explode('.', $image_name);
            $ext = end($exp);
            $image_name_new = $exp[0] . '-' . date("Y-m-d-H-i-s") . "." . $ext;
            $image_path = '../images/';
            if (!is_dir($image_path)) {
                mkdir($image_path, 0755, true);
            }
            $image_path = $image_path . $image_name_new;
            if (move_uploaded_file($image_tmp_name, $image_path)) {
                $sel1 = "SELECT * FROM `campaign` WHERE  `college_id` = '$college_id' AND `date_of_birth` = '$dob'";
                $run1 = mysqli_query($conn, $sel1);
                $check = mysqli_num_rows($run1);
                if ($check >= 1) {
                    echo "User Already exit's!";
                } else {
                    $sel = "INSERT INTO `campaign` (`candidate_name`, `campaign_name`, `college_id`, `date_of_birth`, `qualification`, `gender`, `mail_id`, `phone_no`, `campaign_logo`) VALUES ('$cand_name', '$camp_name', '$college_id', '$dob', '$gender', '$qualification', '$mail', '$phone', '$image_name_new')";
                    $run = mysqli_query($conn, $sel);
                    echo "success";
                }
            } else {
                echo "error to move file";
            }
        } else {
            echo "User Doesn't exit";
        }
    } else {
        echo "No Data received";
    }
    ?>
