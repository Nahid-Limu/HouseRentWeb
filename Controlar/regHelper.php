<?php

include '../Model/db.php';

/*echo "string";
echo "<br>";
$user_name = strtolower($_POST['reg_name']);
$user_pass = strtolower($_POST['reg_pass']);
$user_phn = $_POST['phn'];
echo $user_name;*/
if (isset($_POST['reg_btn'])) {


    global $con;
    $user_name = strtolower($_POST['reg_name']);
    $user_pass = strtolower($_POST['reg_pass']);
    $user_phn = $_POST['phn'];

    $check_sql = "SELECT * FROM `login` WHERE phn ='$user_phn'";
    $check_res = mysqli_query($con, $check_sql);
    $row = mysqli_num_rows($check_res);

    if ($row > 0) {
        echo '<script>alert("Exist Account !!!");</script>';
        echo '<script>window.location.replace("../View/index.php");</script>';

    } else {

        $sql = "INSERT INTO `login`(`name`, `pass`, `phn`) VALUES ('$user_name','$user_pass','$user_phn')";
        $res = mysqli_query($con, $sql);


        if ($res) {
            echo '<script>alert("Registation Successful  ");</script>';
            header('location: ../View/index.php');

        //echo 'ok';
        } else {
            echo 'sorry';
        }
    }


}

?>
