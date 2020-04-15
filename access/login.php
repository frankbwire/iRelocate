<!DOCTYPE html>
<html>
<?php
    require 'connect.php';
    include 'log_algo.php';
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="assets/img/irelocate%20ic.png">
    <title>iRelocate_Login - Wakarima Moving Company</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/aos/aos.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default" id="nav_bar">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="../index.php" id="brand"><i class="fa fa-truck"></i> <strong>iRelocate</strong></a>
                    
                </div>
            </div>
        </nav>
        <div class="container" id="headcont" data-aos="fade-up">
            <h3 class="text-center" id="heading01"><strong>WAKARIMA MOVING COMPANY</strong></h3>
            <h5 class="text-center" id="heading02" data-aos="flip-up"><em>Relocation made Easy</em></h5>
        </div>
    </header>
    <div class="row" id="login">
        <div class="col-md-6 col-md-offset-3" id="colfomall2" data-aos="zoom-in">
            <h4 class="text-center text-info" id="headlog"><strong>Log In</strong></h4>
            <form class="form-inline" id="formq" method="post" action="login.php">
                <div class="col-md-12" id="colfom"><span class="label label-default">Email: </span>
                    <input class="form-control" type="text" placeholder=" your email" inputmode="email" id="inpt" name="emailu" required>
                </div>
                <div class="col-md-12" id="colfom"><span class="label label-default"> Password</span>
                    <input class="form-control" type="password" placeholder=" password" id="inpt" name="passu" required>
                </div>
                <div class="col-md-12" id="colfom">
                    <h6 class="text-center"><button class="btn btn-info btn-sm" type="submit" id="logbtn" name="login"><strong>LogIn </strong></button></h6>
                <p>Don't have an account? <a href="signup.php">signup here</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/aos/aos.js"></script>
    <script type="text/javascript">
    AOS.init({
      offset: 150,
      duration: 600,
      easing: 'ease-in-sine',
      delay: 60,
    });
    </script>
</body>

</html>