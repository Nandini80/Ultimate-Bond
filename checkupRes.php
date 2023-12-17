<?php
if(isset($_POST['prof']))
{
  header("Location: checkupProfile.php"); 
}

if(isset($_POST['appoint']))
{
    header("Location: appointment.php");
}

if(isset($_POST['change']))
{
  if(isset($_POST['change']))
  {
    $email = $_POST['email'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $confpass = $_POST['confpass'];
  
    if(strcasecmp($newpass, $confpass) !== 0)
    {
        // echo "Confirm password and new password should be same";
        header("Location: error.php");
        exit();
    }
  
    //=============================================
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "dogs";
    $port = 3307;
    $socket = "C:/xampp/mysql/mysql.sock";
  
    $con = mysqli_connect($server,$user,$password,$database,$port,$socket);
    if($con->connect_error)
    {
        die("connection failed");
    }
    else 
    {
        $sql = "update user set pass ='$newpass' where email='$email' and pass='$oldpass'";
        $con->query($sql);
        header("Location:checkup.php");
    }
    $con->close();
  }
}
?>
