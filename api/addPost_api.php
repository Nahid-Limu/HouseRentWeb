<?php
include '../Model/db.php';
?>

<?php

global $con;

$type = $_POST['type'];
$rent = $_POST['rent'];
$details = $_POST['details'];
$phn = $_POST['phn'];
$address = $_POST['address'];
$date = $_POST['date'];



    
if (!empty($type) && !empty($rent) && !empty($details) && !empty($phn) && !empty($address) && !empty($date)) {
    
    
    $sql = "INSERT INTO `rent`(type, `rent`, `details`, `phone`, `address`, `date`) VALUES('$type','$rent','$details','$phn','$address','$date')";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $data['post_status'] = "successful";
        echo json_encode($data);
        
    } else {
        $data['post_status'] = "failed";
        echo json_encode($data);
    }
}
 else {
    
     $data['post_status'] = "failed";
        echo json_encode($data);
}
?>
