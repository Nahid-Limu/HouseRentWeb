<?php
include '../Model/db.php';

if(isset($_POST['login_btn'])){
    
    $user_name = strtolower($_POST['username']);
    $user_pass = strtolower($_POST['password']);
    
    $sql = "SELECT * FROM `login` WHERE name ='$user_name' AND pass = '$user_pass'";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);
    
    if ($row['name']==$user_name && $row['pass']==$user_pass) {
        
       session_start();
        $_SESSION['uid'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        
        header('location: ../View/addPost.php');
        
    } else {
        echo '<script>alert("Wrong User Name/Password !!!");'
        . 'window.location.replace("../View/index.php");</script>';
        
       
    }
    
    
}
?>
