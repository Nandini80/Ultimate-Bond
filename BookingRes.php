<?php
if (isset($_POST['Upload'])) 
{
    $email = $_POST["email"];
    $dogn = $_POST["dogn"];
    $breed = $_POST["breed"];
    $from = $_POST["dateFrom"];
    $to = $_POST["dateTo"];
    $add = $_POST["add"];
    $food = $_POST["food"];
   
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
            $sql = "create table if not exists booking(email varchar(30) primary key,dogName varchar(30),breed varchar(20),DateFrom date,DateTo date,address varchar(100),Food varchar(30))";
            $con->query($sql);
      
            $sql1 = "insert into booking values('$email','$dogn','$breed','$from','$to','$add','$food')";
            $con->query($sql1);
            header("Location:care.php");
            exit();
        }
        $con->close();  
}

if (isset($_POST['Change'])) 
{
    $email = $_POST["email"];
    $dogn = $_POST["dogn"];
    $breed = $_POST["breed"];
    $from = $_POST["dateFrom"];
    $to = $_POST["dateTo"];
    $add = $_POST["add"];
    $food = $_POST["food"];

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
            $sql1 = "update booking set dogName='$dogn' , breed='$breed',DateFrom='$from',DateTo='$to',address='$add',Food='$food' where email='$email'";
            $con->query($sql1);
            header("Location:care.php");
        }
        $con->close();  
    }
?>
