<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location: index.php');
} else {
    
}
?>

<?php
include '../Model/db.php';
include './header.php';
include '../Controlar/myPostHelper.php';
include '../Controlar/deletePost.php';
include '../Controlar/x.php';
?>

<html>

    <body class="container ">
        <div class="page-header"> <h1 class="text-center"><kbd>My POST</kbd></h1></div>


        <?php
        MyPost();
        ?>

    </body>

    <script>

        /* $(document).ready(function () {
         //login script
         $('#dlt').click(function () {
         var id = $('dltlink').val();
         
         $.post("../Controlar/deletePost.php", { function (data) {
         
         
         });
         });
         
         
         });*/

    </script>
</html>