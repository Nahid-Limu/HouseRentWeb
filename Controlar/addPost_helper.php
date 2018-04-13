<?php
//session_start();
include '../Model/db.php';

if (isset($_POST['add_post'])) {
    
    $uid = $_SESSION['uid'];
    $houseType = $_POST['select_type'];
    $rent = $_POST['rent'];
   
    //details
        $br = $_POST['no_of_bed'];
        $dr = $_POST['no_of_drawing'];
        $kr = $_POST['no_of_kitchen'];
        $bath = $_POST['no_of_bathroom'];
        $dining = $_POST['dining'];
        $bencony = $_POST['belcony'];
        
        $details = $br . '<br>' . $dr . '<br>' . $kr . '<br>' . $bath . '<br>' .  $dining .'<br>' . $bencony;
        
    $phn = $_POST['phn'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    
    $query = "INSERT INTO `rent` (`uid`, `type`, `rent`, `details`, `phone`, `address`, `date`) VALUES ('$uid', '$houseType', '$rent', '$details', '$phn', '$address', '$date');";
    $result = mysqli_query($con, $query);
    
    if (($result)) {
       // echo "<script>alert('Insert Successfully...!!!')</script>";
        echo "<script>"
        . "alert('Insert Successfully...!!!');"
        . "window.location = ('../View/myPost.php');"
        . "</script>";
    }
    
   
}

?>
