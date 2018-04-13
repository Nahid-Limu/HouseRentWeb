<?php
include '../Model/db.php';
?>

<?php

global $con;
    $sql = "SELECT * FROM `rent`";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $emptyarray [] = $row;
    }
    
    echo json_encode($emptyarray);
    
    mysqli_close($con);
?>