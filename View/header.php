<?php
include '../Model/db.php';
include '../Controlar/regHelper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HRMS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css.css">
    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

</head>
<header class="container">

    <div class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand page-header" href="#" style="font-size: 20px;">RouseRent Management System</a>
            </div>
            <div>
                <?php

                if (isset($_SESSION['uid'])) {
                    echo '<h5 class="text-center text-capitalize text-primary" style="font-weight: bold; font-size: 15px;"><kbd> welCome<br> '.$_SESSION['name'].'</kbd></h5>';

                }
                ?>

            </div>
            <div class="collapse navbar-collapse " id="myNavbar">
                <ul class="nav navbar-nav navbar-right" >

                    <?php

                    if (isset($_SESSION['uid'])) {
                        echo '<li id="lg" ><a href="addPost.php"><span class="glyphicon glyphicon-plus"></span> Add Post</a></li>'
                        . '<li id="lg" ><a href="myPost.php"><span class="glyphicon glyphicon-file"></span> View Post</a></li>'
                        . '<li id="lg" ><a href="../Controlar/logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>';

                    } else {
                        echo '<li data-toggle="modal" data-target="#popUpLogin"><a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Add Post</a></li>';
                    }
                    ?>



                </ul>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
              <p>This is a small modal.</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="popUpLogin">
    <div class="modal-dialog">
        <div class="modal-content">


            <!-- header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">LogIn/Reg</h3>
            </div>

            <!-- body (form) -->
            <div class="modal-body">
                <div class="row">

                    <ul class="nav nav-tabs">
                        <li class="active text-primary"><a href="#Login" data-toggle="tab">Login</a></li>
                        <li ><a href="#Reg" data-toggle="tab" class="text-danger">Registration</a></li>
                    </ul>

                    <div class="tab-content" id="mbody">
                        <div class="tab-pane active" id="Login">

                            <form class="form-horizontal" id="loginForm" role="form" action="../Controlar/loginHelper.php" method="POST">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" id="username" name="username" class="form-control" placeholder="username or email">                                        
                                </div>


                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" id="password" name="password"  class="form-control" placeholder="password">
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="login_btn" id="login_btn" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>


                        </div>


                        <div class="tab-pane" id="Reg">

                            <form class="form-horizontal" id="regForm" role="form" action="../Controlar/regHelper.php" method="POST">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <label class="input-group-addon">UserName</label>
                                    <input type="text" id="reg_name" name="reg_name" class="form-control" value="" placeholder="username or email">                                        
                                </div>


                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <label class="input-group-addon">Password</label>
                                    <input type="password" id="reg_pass" name="reg_pass" class="form-control" placeholder="password">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                    <label class="input-group-addon">PhoneNo</label>
                                    <input  type="tel" id="phn" name="phn" class="form-control" placeholder="phone number" >
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="reg_btn" id="reg_btn" class="btn btn-danger btn-block">REG</button>
                                </div> 
                            </form>


                        </div>


                    </div>
                </div>

                <!-- button -->


            </div>

        </div>
    </div>
</div>

</header>

<script>

    $(document).ready(function () {
            //login script
            $('#login_btn').click(function () {
                var username = $('#username').val();
                var password = $('#password').val();
                if (username != '' && password != '')
                {
                    $.post("../Controlar/loginHelper.php", {username: username, password: password}, function (data) {

                       /* if (data = 'yes') {
                            window.location.replace("./addPost.php");
                            $('#lg').hide();

                        } else {
                            alert("Wrong data");

                        }*/


                    });
                } else
                {
                    alert("Both Fields are required");
                }

            });
            //clear form
            var form = document.getElementById("loginForm");
            form.reset();
            //clear password field
            setTimeout(function () {
                $('#password').val('');
            }, 50);


            //reg script
            $('#reg_btn').click(function () {
                var reg_name = $('#reg_name').val();
                var reg_pass = $('#reg_pass').val();
                var phn = $('#phn').val();
                if (reg_name != '' && reg_pass != '' && phn != '')
                {
                    $.post("../Controlar/regHelper.php", {reg_name: reg_name, reg_pass: reg_pass, phn: phn}, function (data) {

                        /*if (data = 'ok') {
                            $("form-horizontal")[0].reset();
                            alert("Registation Successfull ");
                            window.location = ('header.php#Login');

                        } else if (data = 'exist') {

                            alert("Name And Phone Used !!!!");

                        } else {
                            alert("Wrong data");

                        }*/


                    });
                } else
                {
                    alert("Please Fill All");
                }

            });
//clear form
var form = document.getElementById("regForm");
form.reset();
//clear password field
setTimeout(function () {
    $('#reg_pass').val('');
}, 50);


});



</script>
</html>


