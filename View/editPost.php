<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header('location: index.php');
} else {
    include '../Controlar/deletePost.php';
}
?>

<?php
include '../Model/db.php';
include './header.php';
include '../Controlar/editPostHelper.php';
include '../Controlar/updatePosthelper.php';
?>

<html>


    <body class="container ">
        <div class="page-header"> <h1 class="text-center"><kbd>POST</kbd></h1></div>
        
        <div>
        <?php
        editPost();
        ?>    
        </div>
        


        <form class="form-horizontal" action=" " method="POST">

            <div class="container col-md-8 col-md-offset-2" style="margin-top: 10px;">
                <div class="page-header"> <h1 class="text-center"><kbd>Edit POST</kbd></h1></div>

                <table class="table table-responsive table-striped table-bordered text-center ">
                    <thead class="text-capitalize ">
                        <tr class="bg-primary" style="font-weight: bold;">

                            <td>Type</td>
                            <td>Rent</td>

                            <td>Contact</td>

                            <td>Available Date</td>


                        </tr>
                    <tbody>
                        <tr >

                            <td>
                                <select class="form-control" name="select_type" id="select_type">
                                    <option value="">---Select Type---</option>
                                    <option value="Family">Family</option>
                                    <option value="Bachelor">Bachelor</option>
                                </select>
                            </td>
                            <td><input class="form-control" type="text" name="n_rent" id="n_rent" placeholder="New Rent"></td>

                            <td><input class="form-control" type="tel" name="n_tel" id="n_tel" placeholder="New Phone No"></td>

                            <td><input class="form-control" type="date" name="date" id="date" placeholder="" required=""></td>

                        </tr>

                    </tbody>
                    </thead>
                </table>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-5">
                        <button type="submit" name="up_post" id="up_post" class="btn btn-danger">Update Post</button>
                    </div>
                </div>
            </div>
        </form>

    </body>

    <script>

        $(document).ready(function () {
            //login script
            $('#dlt').click(function () {
                var id = $('dltlink').val();

                $.post("../Controlar/deletePost.php", {id: id}, function (data) {


                });
            });


        });

    </script>
</html>