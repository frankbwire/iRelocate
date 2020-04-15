<!DOCTYPE html>
<html>
<?php
    require 'connect.php';
    $idm=$_GET["id"];
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
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/aos/aos.css">
    <style type="text/css">
        #inpt, #txtarea{
            color: saddlebrown;
        }
    </style>
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
    <div class="container">
        <hr>
        <div class="row" id="admsinrow1">
            <div class="col-md-8 col-md-offset-2" id="coladmq1" data-aos="fade-in">
                <?php
                $idm;
                //echo $emailid;
                $sqlm="SELECT * FROM `messages` WHERE `message_id`='$idm' LIMIT 1";
                $querym=mysqli_query($connect,$sqlm) or die (mysqli_error($connect));
                $rowm=mysqli_fetch_assoc($querym);
                ?>
                <form class="form-inline" method="post" id="formq" action="admin_single_message.php" >
                    <h4 class="text-info" id="headcontent">Message Info: <i class="fa fa-envelope-o"></i><strong> </strong></h4>
                    <p>Use the provided form to <strong class="text-danger">reply</strong> to the requested query above:</p>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Sender Name: </span>
                        <input class="form-control" type="text" placeholder="Enter Name" id="inpt" readonly value="<?php echo $rowm["name"]; ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Subject: </span>
                        <input class="form-control" type="text" placeholder="Enter Name" id="inpt" readonly value="<?php echo $rowm["subject"]; ?>" name="emailm">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Sender Email: </span>
                        <input class="form-control" type="text" placeholder="Enter Name" id="inpt" readonly value="<?php echo $rowm["email"]; ?>" name="emailm">
                    </div>
                    <div class="col-md-12" id="colfom"><span class="label label-default">Message: </span>
                        <textarea class="form-control" rows="3" required="" placeholder="More Details" maxlength="300" id="txtarea" readonly><?php echo $rowm["message"]; ?></textarea>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>
                    <h5 class="text-info">Reply <i class="fa fa-arrow-down"></i></h5>
                     <input type="text" value="<?php echo $rowm["message_id"]; ?>" name="mid" readonly hidden>
                    <div class="col-md-12" id="colfom"><span class="label label-default">Reply below:</span>
                        <textarea class="form-control" rows="5" required="" placeholder="Message reply" maxlength="300" id="txtarea" name="message"></textarea>
                    </div>
                    <div class="col-md-12" id="colfom">
                        <button class="btn btn-info btn-sm" type="submit" name="replym"> <strong>Reply message </strong><i class="fa fa-envelope"></i></button>
                    </div>
                </form>
                 <?php
if(isset($_POST["replym"])){
    
    $message=ucfirst($_POST["message"]);
    $mid=$_POST["mid"];

    $sqlm1="UPDATE `messages` SET `feedback`='YES',`message_reply`='$message',`reply_date`= CURRENT_TIMESTAMP() WHERE `message_id` = '$mid'";
    $querym1=mysqli_query($connect,$sqlm1) or die (mysqli_error($connect));
    echo "<script type='text/javascript'>alert('Message Reply Success');
            window.location='admin_message.php';</script>";
};
?>
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