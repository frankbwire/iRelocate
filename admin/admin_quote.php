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
    <link rel="stylesheet" href="assets/css/new.css">
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
    <div class="container post" id="contbody">
        <div class="row" id="row1">
            <div class="col-md-12">
                <h3 class="text-info" id="headcontent" data-aos="flip-up">Quotation Requests <i class="fa fa-comments"></i></h3>
                <p data-aos="flip-down">Here is a list of all Client quotation requests. As an <strong class="text-warning">Administrator</strong>, you can view and reply to quotation requests.</p>
                <div id="contform" data-aos="fade-in">
                    <div class="table-responsive" id="tabloc">
                        <?php
                        $sqladmin="SELECT `quote_id`, `name`, `email`, `phone`, `moving_from`, `moving_to`, `house_size`, `moving_date`, `current_floor`, `destination_floor`, `extra_service`, `move_type`, `details`, `request_date`, `feedback` FROM `quotations` WHERE `feedback`='NO' order by `request_date` DESC";
                        $queryadmin=mysqli_query($connect,$sqladmin) or die (mysqli_error($connect));
                        
                        ?>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th class="success">Client: </th>
                                    <th class="success">Moving from/to: (location)</th>
                                    <th class="success" id="cellast"> Message Details:</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <?php
                            while($admrow=mysqli_fetch_assoc($queryadmin)){
                            ?>
                            <tbody>
                                <tr>
                                    <td><strong class="text-primary"><?php echo $admrow["name"]; ?></strong><br>
                                        <?php echo $admrow["email"]; ?></td>
                                    <td>from: <strong class="text-danger"><?php echo $admrow["moving_from"]; ?></strong> location <strong>to:</strong> <strong class="text-danger"><?php echo $admrow["moving_to"]; ?></strong><br>
                                     <?php echo $admrow["current_floor"]; ?>floor - <?php echo $admrow["destination_floor"]; ?>
                                    </td>
                                    <td>extra_service: <strong><?php echo $admrow["extra_service"]; ?></strong><br>
                                    <strong class="text-primary">move date:</strong> <?php echo $admrow["moving_date"]; ?></td>
                                    <td id="btncell"><a class="btn btn-info btn-block btn-sm" role="button" href="admin_single_quote.php?id=<?php echo $admrow["quote_id"];  ?>"><strong>more </strong><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i><strong> </strong></a></td>
                                </tr>
                            </tbody>
                            <?php
                            };
                                ?>
                        </table>
                    </div>
                    <h4 class="text-center text-muted"><strong>inbox empty </strong><i class="fa fa-inbox"></i></h4></div>
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