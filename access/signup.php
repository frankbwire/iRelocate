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
    <title>iRelocate_SignUp - Wakarima Moving Company</title>
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
        <div class="col-md-6 col-md-offset-3" id="colfomall2" data-aos="zoom-out">
            <h4 class="text-center text-info" id="headlog"><strong>Sign Up</strong></h4>
            <form class="form-inline" id="formq" method="post" action="signup.php">
                <div class="col-md-6" id="colfom"><span class="label label-default">Username: </span>
                    <input class="form-control" type="text" placeholder=" enter username" id="inpt" name="uname" required>
                </div>
                <div class="col-md-6" id="colfom"><span class="label label-default">Email: </span>
                    <input class="form-control" type="text" placeholder=" your email" inputmode="email" id="inpt" name="umail" required>
                </div>
                <div class="col-md-6" id="colfom"><span class="label label-default">Choose Password</span>
                    <input class="form-control" type="password" placeholder=" choose password" id="inpt" name="upass" required>
                </div>
                <div class="col-md-6" id="colfom"><span class="label label-default">Repeat Password</span>
                    <input class="form-control" type="password" placeholder=" repeat password" id="inpt" name="upass2" required>
                </div>
                <div class="col-md-12" id="colfom">
                    <h6 class="text-center"><button class="btn btn-info btn-sm" type="submit" id="logbtn" name="signup"><strong>Sign Up</strong></button></h6>
                <p>Already have an account? <a href="login.php">login here</a></p>
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