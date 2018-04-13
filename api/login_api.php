<?php
include '../Model/db.php';
?>

<?php

global $con;

$un = $_POST['name'];
$up = $_POST['pass'];

if (!empty($un) && !empty($up)) {

    $sql = "SELECT * FROM login WHERE name = '$un' AND pass = '$up'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);


    if ($row['name'] == $un && $row['pass'] == $up) {

        $data['login_status'] = "successful";
        echo json_encode($data);
        
    } else {
        $data['login_status'] = "failed";
        echo json_encode($data);
    }
}
 else {
    $data['login_status'] = "failed";
        echo json_encode($data);
}
?>
