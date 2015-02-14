<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>Login</title>
    <!-- Custom CSS -->
    <link rel="shortcut icon" href="<?= base_url().'asset/images/logo.png'?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/css/login.css';?>"/>
    <!-- Google Font -->

    <!-- Bootstrap Core CSS -->
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/css/bootstrap.min.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/bootflat/css/bootflat.min.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?= base_url().'asset/fontawesome/css/font-awesome.min.css';?>"/>
    
</head>
<body>

    <section class="container">
        <section class="login-form">
            <form method="post" action="<?php echo base_url(); ?>login/masuk" role="login" id="loginForm">

                <div class="container" id="loginBody">
                    <h3 id="loginTitle"><b>-PROTOTYPE-</b></h3>
                    <div class="left-inner-addon">
                        <i class="fa fa-user"></i>      
                        <input type="text" name="email" placeholder="Nama" required class="form-control input-lg" />
                    </div>
                    <div class="left-inner-addon">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="pass" placeholder="Password" required class="form-control input-lg" />
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-warning"><i class="fa fa-sign-in"></i> Masuk</button>
                    <div>
                        <p><a href="#">Lupa Password ?</a></p>
                    </div>
                    <div>
                        <p id="catatanKaki">copyright <i class="fa fa-copyright"></i> 2015. blackomsi</p>
                    </div>
                </div>

            </form>
        </section>
    </section>

    <script src="<?= base_url().'asset/js/jquery-1.11.2.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery.validate.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/jqueryvalidate.js';?>"></script>
    <script src="<?= base_url().'asset/js/bootstrap.min.js';?>"></script>

    <script type="text/javascript">
     $("#loginForm").validate({
        rules: {
            email: {
                required: true
            },
            pass: {
                required: true
            }
        },

        messages: {
            pass: "Pesan error.",
            email: "Pesan error."
        },

        tooltip_options: {
            email: {
                placement:'bottom',html:true},
                pass: {
                    placement:'bottom',html:true}
                },
            });
 </script>
 
</body>
</html>