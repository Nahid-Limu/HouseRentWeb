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
include '../Controlar/addPost_helper.php';
?>
<html>
    <body>
        <div class="container">
            <div class="page-header"> <h1 class="text-center"><kbd>POST ADVERTISE</kbd></h1></div>


            <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                <div class="container col-md-8 col-md-offset-2">
                    <table class="table table-responsive table-bordered " style="width: 800px;">
                        <tbody>

                            <tr class="form-group">
                                <td>
                                    <label class="form-control text-center" for="select_type">House Type:</label>
                                </td>
                                <td>
                                    <select class="form-control" name="select_type" id="select_type">
                                        <option value="">---Select Type---</option>
                                        <option value="Family">Family</option>
                                        <option value="Bachelor">Bachelor</option>
                                    </select>
                                </td>
                            </tr>

                            <tr class="form-group">
                                <td>
                                    <label class="form-control text-center" for="rent">Rent:</label>
                                </td>
                                <td>
                                    <input class="form-control text-center" type="number" name="rent" id="rent" placeholder="00000 tk" required="1">
                                </td>
                            </tr>

                            <tr class="form-group">
                                <td>
                                    <br><br><label class="form-control text-center" for="details">Details:</label>
                                </td>
                                <td>
                                    <table class="table table-responsive">
                                        <tr>
                                            <select class="form-control" name="no_of_bed" id="select_type">
                                                <option value="">---No Of BedRoom---</option>
                                                <option value="1 Bed Room">1 BedRoom</option>
                                                <option value="2 Bed Room">2 BedRoom</option>
                                                <option value="3 Bed Room">3 BedRoom</option>
                                                <option value="4 Bed Room">4 BedRoom</option>
                                            </select>
                                        </tr>
                                        <br>
                                        <tr>
                                            <select class="form-control" name="no_of_drawing" id="select_type">
                                                <option value="">---No Of DrawingRoom---</option>
                                                <option value="1 Drawing Room">1 DrawingRoom</option>
                                                <option value="2 Drawing Room">2 DrawingRoom</option>
                                            </select>
                                        </tr>
                                        <br>
                                        <tr>
                                            <select class="form-control" name="no_of_kitchen" id="select_type">
                                                <option value="" class="">---No Of Kitchen---</option>
                                                <option value="1 Kitchen">1 Kitchen</option>
                                                <option value="2 Kitchen">2 Kitchen</option>
                                            </select>
                                        </tr>
                                        <br>
                                        <tr>
                                            <select class="form-control" name="no_of_bathroom" id="select_type">
                                                <option value="">---No Of BathRoom---</option>
                                                <option value="1 BathRoom">1 BathRoom</option>
                                                <option value="2 BathRoom">2 BathRoom</option>
                                            </select>
                                        </tr>
                                        <br>
                                        <tr >
                                            <td>
                                                <label class="form-control text-center" for="dining">Dining:</label>
                                            </td>
                                                    
                                            <td>
                                                <input type="radio" name="dining" value="1 Dining"><b class="text-success"> Yes</b><br>
                                                <input type="radio" name="dining" value="No Dining"><b class="text-danger"> No</b>
                                            </td>

                                        </tr>
                                        <br>
                                        <tr >
                                            <td>
                                                <label class="form-control text-center" for="belcony">Belcony:</label>
                                            </td>
                                                    
                                            <td>
                                                <input type="radio" name="belcony" value="1 Belcony"><b class="text-info"> 1</b><br>
                                                <input type="radio" name="belcony" value="2 Belcony"><b class="text-info"> 2</b><br>
                                                <input type="radio" name="belcony" value="No Belcony"><b class="text-danger"> No</b>
                                            </td>

                                        </tr>
                                    </table>
                                </td>
                            </tr>

                    <tr class="form-group">
                        <td>
                            <label class="form-control text-center" for="phn">Phone No:</label>
                        </td>
                        <td>
                            <input class="form-control text-center" type="tel" name="phn" id="phn" placeholder="01719******" required="1">
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td>
                            <label class="form-control text-center" for="address">Address:</label>
                        </td>
                        <td>
                            <input class="form-control text-center" type="text" name="address" id="address" placeholder="Dhaka, Uttara" required="1">
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td>
                            <label class="form-control text-center" for="date">House Availabl From:</label>
                        </td>
                        <td>
                            <input class="form-control text-center" type="date" name="date" id="date" placeholder="" required="1">
                        </td>
                    </tr>
                    <tr class="form-group">
                        <td class="f">
                            <label class="form-control text-center" for="">Uplode Image </label>
                        </td>
                        <td>
                            
                            <input type="file" class="form-control text-right" name="image" >
                        </td>

                    </tr>
                    <tr class="form-group">

                        <td><button class="btn btn-md bg-primary col-md-offset-12" type="submit" name="add_post" style="font-size: 20px; font-weight: bolder;"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-book"></i> Add Post</button></td>

                    </tr>


                    </tbody>
                    </table>
                </div>

            </form>


        </div>


    </body>
</html>
