<!DOCTYPE html>
<html>
<?php
    require 'connect.php';
    $id=$_GET["id"];
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
            color: darkred;
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
                        <li role="presentation" class="active"><a href="admin_quote.php" id="lnk">Quotations </a></li>
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
    <div class="container">
        <div class="row" id="admsinrow">
            <div class="col-md-10 col-md-offset-1" id="coladmq" data-aos="fade-in">
                <h4 class="text-info" id="headcontent"><strong>Single Quotation Request </strong><i class="fa fa-briefcase"></i></h4>
                <p> The form below shows quotation details from a single client.</p>
                <?php
                $emailid;
                //echo $emailid;
                $sqladmq="SELECT * FROM `quotations` WHERE `quote_id`='$id' LIMIT 1";
                $queryadmq=mysqli_query($connect,$sqladmq) or die (mysqli_error($connect));
                $rowadmq=mysqli_fetch_assoc($queryadmq);
                ?>
                <form class="form-inline" id="formq">
                    <div class="col-md-4" id="colfom"><span class="label label-default">Client Name: </span>
                        <input class="form-control" type="text" readonly="" placeholder="Your Name" id="inpt" value="<?php echo $rowadmq["name"];  ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Email: </span>
                        <input class="form-control" type="text" readonly="" placeholder="Your Email" inputmode="email" id="inpt" value="<?php echo $rowadmq["email"];  ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Phone Number:</span>
                        <input class="form-control" type="text" readonly="" placeholder="Your Phone" inputmode="tel" id="inpt" value="<?php echo $rowadmq["phone"];  ?>">
                    </div>
                    <div class="col-md-5" id="colfom"><span class="label label-default">Moving From:</span>
                        <input class="form-control" type="text" readonly="" placeholder="Moving From" id="inpt" value="<?php echo $rowadmq["moving_from"];  ?>">
                    </div>
                    <div class="col-md-3" id="colfom"><span class="label label-default">Preferred Moving Date</span>
                        <input class="form-control" type="text" readonly="" placeholder="Your Name" id="inpt" value="<?php echo $rowadmq["moving_date"];  ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Moving To:</span>
                        <input class="form-control" type="text" readonly="" placeholder="Moving To" id="inpt" value="<?php echo $rowadmq["moving_to"];  ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">House size:</span>
                        <input class="form-control" type="text" placeholder="Your Name" id="inpt" readonly value="<?php echo $rowadmq["house_size"];  ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Current Floor:</span>
                        <input class="form-control" type="text" placeholder="Current floor" id="inpt" readonly value="<?php echo $rowadmq["current_floor"];  ?>">
                    </div>
                    <div class="col-md-4" id="colfom"><span class="label label-default">Destination Floor</span>
                        <input class="form-control" type="text" placeholder="Destination floor" id="inpt" readonly value="<?php echo $rowadmq["destination_floor"];  ?>">
                    </div>
                    <div class="col-md-6" id="colfom"><span class="label label-default">Extra Services</span>
                        <input class="form-control" type="text" placeholder="Your Name" id="inpt" readonly value="<?php echo $rowadmq["extra_service"];  ?>">
                    </div>
                    <div class="col-md-6" id="colfom"><span class="label label-default">More Details:</span>
                        <textarea class="form-control" rows="3" required="" placeholder="More Details" maxlength="300" id="txtarea" readonly><?php echo $rowadmq["move_type"];  ?> move >>> " <?php echo $rowadmq["details"];  ?> "
                        </textarea>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row" id="admsinrow1">
            <div class="col-md-6 col-md-offset-3" id="coladmq1" data-aos="fade-in">
                <form class="form-inline" method="post" id="formq" action="admin_single_quote.php">
                    <h5 class="text-info" id="headcontent"><strong>Reply </strong><i class="fa fa-comments"></i></h5>
                    <input type="text" value="<?php echo $rowadmq["quote_id"]; ?>" name="qid" readonly hidden>
                    <input type="text" value="<?php echo $rowadmq["moving_to"]; ?>" name="to" readonly hidden>
                    <input type="text" value="<?php echo $rowadmq["moving_from"]; ?>" name="from" readonly hidden>
                    <p>Use the form below to <strong class="text-danger">reply</strong> to the requested quote from: <strong class="text-primary"><?php echo $rowadmq["email"]; ?></strong></p>
                    <div class="col-md-6" id="colfom"><span class="label label-default">Moving Date Available:</span>
                        <input class="form-control" type="date" id="inptdt" name="rdate" required>
                    </div>
                    <div class="col-md-6" id="colfom"><span class="label label-default">Total Amount Chargable: </span>
                        <input class="form-control" type="number" placeholder="Enter Amount Chargable" id="inpt" name="ramount" required>
                    </div>
                    <div class="col-md-12" id="colfom"><span class="label label-default">More Details:</span>
                        <textarea class="form-control" rows="5" required="" placeholder="More Details" maxlength="300" id="txtarea" name="rdetails"></textarea>
                    </div>
                    <div class="col-md-12" id="colfom">
                        <button class="btn btn-info btn-sm" type="submit" name="replyq"> <strong>Reply quote </strong><i class="fa fa-cc-mastercard"></i></button>
                    </div>
                </form>
            </div>
            <?php
if(isset($_POST["replyq"])){
    $rdate=$_POST["rdate"];
    $ramount=$_POST["ramount"];
    $rdetails=ucfirst($_POST["rdetails"]);
    $qid=$_POST["qid"];
    $to=$_POST["to"];
    $from=$_POST["from"];
    $quote="The total amount for your requested quote is Kshs." . $ramount ." From: ".$from ." location To: ".$to. " location. Relocation will be available on " . $rdate . ". More: " . $rdetails;
    $sqlr="UPDATE `quotations` SET `feedback`='YES',`quote_reply`='$quote',`qreply_date`= CURRENT_TIMESTAMP() WHERE `quote_id` = '$qid'";
    $queryr=mysqli_query($connect,$sqlr) or die (mysqli_error($connect));
    echo "<script type='text/javascript'>alert('Quotation Send Success');
            window.location='admin_quote.php';</script>";
};
?>
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