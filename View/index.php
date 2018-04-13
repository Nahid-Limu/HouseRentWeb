<?php
include '../Model/db.php';


function AllPost() {
    global $con;
    $sql = "SELECT * FROM `rent` ORDER by id DESC";
    $result = mysqli_query($con, $sql);
    $postNo = 1;
    

    while ($row = mysqli_fetch_assoc($result)) {
        
        $output = '<div class="container col-md-8 col-md-offset-2" style="margin-top: 10px;">
            <table class="table table-responsive table-striped table-bordered text-center ">
                <thead class="text-capitalize ">
                    <tr class="bg-primary" style="font-weight: bold;">
                        <td >Post No</td>
                        <td>Type</td>
                        <td>Rent</td>
                        <td>Details</td>
                        <td>Contact</td>
                        <td><span class="glyphicon glyphicon-earphone"></span></td>
                        <td>Address</td>
                        <td>Available Date</td>

            </tr>
            </thead>
        <tbody>';
        echo $output;
        echo "<tr>";
        echo "<td class='bg-primary' style='font-weight: bold;'>" . $postNo . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['rent'] . "</td>";
        echo "<td>" . $row['details'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" .'<a href="tel:+880'.$row['phone'].'">
          <span class="glyphicon glyphicon-earphone"></span>
        </a>' . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
        
        echo "</tbody>
            </table>
            </div>";
        $postNo++;
    }
}
?>
<?php
include './header.php';
?>
<html>

    <head>
        <title>HRMS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">


        <script src="../js/jquery-3.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body class="container ">
        <div class="page-header"> <h1 class="text-center"><kbd>All POST</kbd></h1></div>

        <?php
        AllPost();
        
        ?>
        
    </body>
</html>