<!--==This is a Login and SignUp Server==-->
<!--== author (c)frankline_bwire ==-->
<!--== @knightlypro ==-->
<!--== (c)Notchcom Solutions Kenya ==-->
<?php
//Signup algo
if(isset($_POST["signup"])){
    //
    $username=ucfirst($_POST["uname"]);
    $usermail=$_POST["umail"];
    $userpass=$_POST["upass"];
    $userpass2=$_POST["upass2"];
    $utype="client";
    //
    if($userpass != $userpass2){
        echo "<script type='text/javascript'>alert('The two passwords do not match. Please try again.');
           window.location.reload;</script>";
    }
    //
    else {
        
        $logsql="INSERT INTO `users`(`username`,`email`, `type`, `password`, `reg_date`) VALUES ('$username','$usermail','$utype','$userpass',CURRENT_TIMESTAMP())";
        $querylog=mysqli_query($connect,$logsql) or die (mysqli_error($connect));
        //
        if($querylog == true){
            echo "<script type='text/javascript'>alert('SignUp Successful. Proceed to Login');
           window.location='login.php';</script>";
        }
        //
        else {
                echo "<script type='text/javascript'>alert('User already exists');
           window.location.reload;</script>";
        };
    };
};
?>
<?php
//Login algo
if(isset($_POST["login"])){
    //
    $emailu=$_POST["emailu"];
    $password=$_POST["passu"];
    $type1="administrator";
    $type2="client";
    //
    $sqlu="SELECT * FROM `users` WHERE `email`='$emailu' and `password`='$password' limit 1";
    $queryu=mysqli_query($connect,$sqlu) or die (mysqli_error($connect));
    $urow=mysqli_fetch_assoc($queryu);
    $mail=$urow["email"];
    $typ=$urow["type"];
    $pass=$urow["password"];
    //admin login
    if($typ == $type1){
        $_SESSION["log"]=$emailu;
        //header("location:admin/admin_home.php");
        echo "<script type='text/javascript'>alert('Admin LogIn Successuful'); window.location='../admin/admin_home.php';</script>";
        
    }
    else if($typ == $type2){
        $_SESSION["log"]=$emailu;
        //header("location:client/index.php");
        echo "<script type='text/javascript'>alert('Client Login Successufull'); window.location='../client/index.php';</script>";
        
    }
    else {
        echo "<script type='text/javascript'>alert('Password Error. Check details.'); window.location.reload;</script>";
        
    }
};
?>