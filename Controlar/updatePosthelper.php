<?php
include '../Model/db.php';

if(isset($_POST['up_post'])){
    
    $id = $_GET['id'];
    
    $new_type =$_POST['select_type']; 
    $new_rent =$_POST['n_rent'];
    $new_phn = $_POST['n_tel'];
    $new_date =$_POST['date'];
    
    
    $sql = "UPDATE `rent` SET type ='$new_type',rent='$new_rent',phone='$new_phn',date='$new_date' WHERE id = '$id';";
     $res = mysqli_query($con, $sql);


    if ($res) {
        echo "<script>"
        . "alert('Post Update Successful');"
                . "window.location = ('../View/editPost.php');"
                . "</script>";

        //echo 'ok';
    } else {
        echo 'sorry';
    }
    
    
}
?>
