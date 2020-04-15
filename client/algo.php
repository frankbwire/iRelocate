<?php
//Request quotation module
if(isset($_POST["quote"])){
    //
    $qid=$_POST["qid"];
    $name=ucfirst($_POST["name"]);
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $mvnfrom=strtoupper($_POST["mvnfrom"]);
    $mvnto=strtoupper($_POST["mvnto"]);
    $hse=$_POST["hse"];
    $mvndt=$_POST["mvndt"];
    $curfl=$_POST["curfl"];
    $desfl=$_POST["desfl"];
    $extra=$_POST["extra"];
    $type=$_POST["type"];
    $feedback="NO";
    $detail=ucfirst($_POST["detail"]);
    //
    $sql="INSERT INTO `quotations` (`quote_id`, `name`, `email`, `phone`, `moving_from`, `moving_to`, `house_size`, `moving_date`, `current_floor`, `destination_floor`, `extra_service`,`move_type`, `details`, `request_date`, `feedback`) VALUES ('$qid', '$name', '$email', '$phone', '$mvnfrom', '$mvnto', '$hse', '$mvndt', '$curfl', '$desfl', '$extra','$type', '$detail', current_timestamp(),'$feedback')"; 
    $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
    if($query == true){
           echo "<script type='text/javascript'>alert('Quotation Request Success');
           window.location.reload;</script>";
    };
 
};
?>
<!--== ALL SYSTEM ALGORITHMS ARE HERE ==-->
<!--== author (c)frankline_bwire ==-->
<!--== (c)notchcom.solutions.kenya ==-->
<?php
//Send message module
if(isset($_POST["send"])){
   //
    $mid=$_POST["mid"];
    $cname=ucfirst($_POST["cname"]);
    $cmail=$_POST["cmail"];
    $subject=strtoupper($_POST["cject"]);
    $message=ucfirst($_POST["cmessage"]);
    $feedback="NO";
    //
    $sql1="INSERT INTO `messages` (`message_id`,`name`, `email`, `subject`, `message`, `date_received`,`feedback`) VALUES ('$mid','$cname', '$cmail', '$subject', '$message', current_timestamp(),'$feedback') ";
    $query1=mysqli_query($connect,$sql1) or die (mysqli_error($connect));
        if($query1 == true){
           echo "<script type='text/javascript'>alert('Message Send Success');
            window.location.reload;</script>";
    
}
};
?>

