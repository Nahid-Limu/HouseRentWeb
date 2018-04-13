<?php

include '../Model/db.php';

if (isset($_GET['did'])) {
    $id = $_GET['did'];


    $sql = "DELETE FROM `rent` WHERE id = '$id';";
    $res = mysqli_query($con, $sql);


    if ($res) {
        echo "<script>"
        . "alert('Post Deleted !!!!');"
        . "window.location = ('../View/myPost.php');"
        . "</script>";

        //echo 'ok';
    } else {
        echo 'sorry';
    }
}

/**/
?>
