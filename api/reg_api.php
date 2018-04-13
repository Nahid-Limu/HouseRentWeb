<?php
include '../Model/db.php';
?>

<?php

global $con;

$un = $_POST['name'];
$up = $_POST['pass'];
$phn = $_POST['phn'];

 
if (!empty($un) && !empty($up) && !empty($phn)) {
    
    
    $sql = "INSERT INTO `login` (name, pass, phn) VALUES ('$un','$up','$phn')";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $data['reg_status'] = "successful";
        echo json_encode($data);
        
    } else {
        
        $data['reg_status'] = "failed";
        echo json_encode($data);
        
    }
}
 else {
    
        $data['reg_status'] = "failed";
        echo json_encode($data);
}
?>
