<?php

include '../Model/db.php';


function MyPost() {
    global $con;

    if (isset($_SESSION['uid'])) {
    $uid = $_SESSION['uid'];


    $sql = "SELECT * FROM `rent` WHERE uid = '$uid' ORDER by id DESC";
    $result = mysqli_query($con, $sql);
    $postNo = 1;
    


    while ($row = mysqli_fetch_assoc($result)) {

        $output = '<form action="./deletePost.php?d_id=$id" method="POST">
            
        <div class="container col-md-9 col-md-offset-2" style="margin-top: 10px;">
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
                        <td>Action</td>

            </tr>
            </thead>
        <tbody>';
        echo $output;
        
        
        $id = $row['id'];
        $dlink = "myPost.php?did=$id"; 
        $editlink = "../View/editPost.php?eid=$id"; 
        
        //$dltlink = "./deletePost.php?d_id=$id";
        //$editlink = "../View/editPost.php?id=$id";
        
        echo "<tr>";
        echo "<td class='bg-primary' style='font-weight: bold;'>" . $postNo . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['rent'] . "</td>";
        echo "<td>" . $row['details'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . '<a href="tel:+880' . $row['phone'] . '"><span class="glyphicon glyphicon-earphone"></span></a>' . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo '<td><button type="submit" class="btn btn-danger" name="edit" id="edit"><a href='.$dlink.' style="color: white; font-weight: bold; text-decoration: none;">Delete</a></button></br></br>'
                . '<button type="submit" class="btn btn-success" name="edit" id="edit"><a href='.$editlink.' style="color: white; font-weight: bold; text-decoration: none;">Edit</a></button></td>';
        
        
        /*echo '<td><button type="submit" class="btn btn-danger" name="dlt" id="dlt"><a href='.$dltlink.' style="color: white; font-weight: bold; text-decoration: none;">Delete</a></button>'
                . '<br><br>'
                . '<button type="submit" class="btn btn-success" name="edit" id="edit"><a href='.$editlink.' style="color: white; font-weight: bold; text-decoration: none;">Edit</a></button></td>';*/
       // echo '<td><button type="submit" class="btn btn-danger" name="edit" id="edit"><a href='.$link.' style="color: white; font-weight: bold; text-decoration: none;">Edit</a></button></td>';
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