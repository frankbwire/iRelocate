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
    <link rel="stylesheet" href="assets/css/user.css">
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
                        <li class="" role="presentation"><a href="admin_home.php" id="lnk">Home </a></li>
                        <li role="presentation"><a href="admin_quote.php" id="lnk">Quotations </a></li>
                        <li role="presentation" class="active"><a href="admin_message.php" id="lnk">Messages </a></li>
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
                <h3 class="text-info" id="headcontent" data-aos="flip-up">Messages <i class="fa fa-comments"></i></h3>
                <p data-aos="flip-down">Here is a list of all Client messages/requests. As an <strong class="text-warning">Administrator</strong>, you can view and reply to a messages.</p>
                <div id="contform" data-aos="fade-in">
                    <div class="table-responsive" id="tabloc" >
                        <?php
                        $sqlm="SELECT * FROM `messages` WHERE `feedback`='NO' order by `date_received` DESC";
                    $querym=mysqli_query($connect,$sqlm) or die (mysqli_error($connect));
                        
                        ?>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th class="success">Message_Date:</th>
                                    <th class="success" id="cellast">Message_Content:</th>
                                    <th> </th>
                                </tr>
                            </thead>
                             <?php
                        while($rowm=mysqli_fetch_assoc($querym)){
                            ?>
                            <tbody>
                                <tr>
                                    <td><i class="text-danger"><?php echo $rowm["date_received"]; ?></i></td>
                                     <td>subject: <strong class="text-muted"><?php echo $rowm["subject"]; ?></strong>
                                         <br>
                                         <?php echo $rowm["message"]; ?> <br>
                                         From: <i class="text-primary"><?php echo $rowm["email"]; ?></i>
                                        </td>
                                    <td id="btncell"><a class="btn btn-info btn-block btn-sm" role="button" href="admin_single_message.php?id=<?php echo $rowm["message_id"]; ?>" id="btnmessage"><strong>Reply </strong><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i><strong> </strong></a></td>
                                </tr>
                            </tbody>
                            <?php
                            };
                            ?>
                        </table>
                    </div>
                    <h4 class="text-center text-muted"><strong>inbox empty </strong><i class="fa fa-inbox"></i></h4>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <h5>iRelocate - Wakarima Moving Company © 2020</h5></footer>
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
<?php
    }
    else {
        header("location:../index.php");
    };
?>
</html>