<!DOCTYPE html>
<html>
<?php
require 'connect.php';
    if($user=$_SESSION["log"])
    {
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/irelocate%20i.png">
    <title>iRelocate_Admin - Wakarima Moving Company</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/aos/aos.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-default" id="nav_bar">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="admin_home.php" id="brand"><i class="fa fa-truck"></i> <strong>iRelocate</strong></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active" role="presentation"><a href="admin_home.php" id="lnk">Home </a></li>
                        <li role="presentation"><a href="admin_quote.php" id="lnk">Quotations </a></li>
                        <li role="presentation"><a href="admin_message.php" id="lnk">Messages </a></li>
                        <li role="presentation">
                            <a href="logout.php" id="lnk">
                                <button class="btn btn-info" type="button"><strong>logout</strong> </button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" id="headcont" data-aos="fade-up">
            <h3 class="text-center" id="heading01"><strong>WAKARIMA MOVING COMPANY</strong></h3>
            <h5 class="text-center" id="heading02" data-aos="flip-up"><em>Relocation made Easy</em></h5>
        </div>
    </header>
    <div class="container post" id="contbody">
        <div class="row" id="row1">
            <div class="col-md-12">
                <div>
                    
                    <div class="col-md-12">
                <div>
                    <div data-aos="fade-right">
                    <h6 class=""><strong class="text-danger">Administrator: </strong><b> <?php echo $user;  ?></b> </h6>
                    </div>
                </div>
            </div>
             <div class="col-md-12">
                <hr>
            </div>
                    
                    <div data-aos="flip-up">
                     <h3 class="" id="headcontent"><strong>Who we are</strong></h3>
                    <p class="text-muted"><em>Relocation made Easy</em></p>
                    </div>
                    <div data-aos="fade-left">
                    <p id="par">Wakarima Movers is a Nakuru-based moving and storage company specializing in all aspects of residential and commercial moves. The company was founded by a team of professionals with more than 20 years of combined experience in the
                        business.</p>
                   
                    <h4><strong>Our Mission </strong></h4>
                    <p id="par">To provide differentiated value added moving services and service solutions that are aligned with our customer needs. </p>
                   
                    <h4><strong>Our Vision </strong></h4>
                    <p id="par">To be the east Africa’s leading removal company embodying superior customer intimacy, operational efficiency and service excellence. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
               <hr>
            </div>
        </div>
        <div class="row" id="">
            <div class="col-md-12" data-aos="flip-down">
                <h4 class="text-info" id="headcontent"><strong>Administrator Services</strong></h4></div>
            <div class="col-md-6" data-aos="fade-in-right">
                <div id="divcol">
                    <h2 class="text-center"><i class="fa fa-users"></i></h2>
                    <h4 class="text-center">View Quotation Requests</h4>
                    <p class="text-left" id="par">Wakarima Movers is a premier moving services company in Nakuru Kenya, We specialize in both commercial and residential house moving,office relocation, secure storage units and office spaces.</p>
                    <a href="admin_quote.php">
                    <button class="btn btn-info" type="button">More <i class="fa fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div id="divcol" data-aos="fade-in-left">
                    <h2 class="text-center"><i class="fa fa-envelope-o"></i></h2>
                    <h4 class="text-center"> View Messages</h4>
                   <p class="text-left" id="par">Wakarima Movers is a premier moving services company in Nakuru Kenya, We specialize in both commercial and residential house moving,office relocation, secure storage units and office spaces.</p>
                    <a href="admin_message.php">
                    <button class="btn btn-info" type="button">More <i class="fa fa-arrow-right"></i></button>
                    </a>
                </div>
            </div>
             <div class="col-md-12">
               <hr>
            </div>
        </div>
    </div>
    <footer>
        <h5>iRelocate - Wakarima Moving Company © 2020</h5></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js">
    </script>
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
<?php
    }
    else {
        header("location:../index.php");
    };
?>
</html>