<?php
include '../Model/db.php';

function editPost() {
    global $con;

    if (isset($_GET['eid'])) {
    $id = $_GET['eid'];


    $sql = "SELECT * FROM `rent` WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $postNo = 1;
    


    while ($row = mysqli_fetch_assoc($result)) {

        $output = '<form action=" " method="POST">
            
        <div class="container col-md-8 col-md-offset-2" style="margin-top: 10px;">
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
        echo "<td>" . '<a href="tel:+880' . $row['phone'] . '"><span class="glyphicon glyphicon-earphone"></span></a>' . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";

        echo "</tbody>
            </table>
            </div>
            </form>";
        $postNo++;
        }
    }
}

?>

