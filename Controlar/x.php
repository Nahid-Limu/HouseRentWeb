<?php
include '../model/db.php';

if (isset($_GET['eid'])) {
    
    $id = $_GET['eid'];
    echo "<h1>".$id."</h1>";
    
}
if (isset($_GET['did'])) {
    
    $id = $_GET['did'];
    echo $id;
    
}
?>

