<?php
if (isset($_POST['save'])) 
{
    $email = $_POST["email"];
    $dogn = $_POST["dogn"];
    $breed = $_POST["breed"];
    $diet = $_POST["diet"];
    $inj = $_POST["inj"];
    $injdate = $_POST["injdate"];
    $prob = $_POST["prob"];
   
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
            $sql = "create table if not exists appointment(email varchar(30) primary key,dogName varchar(30),breed varchar(20),diet varchar(30),injection varchar(30),date date,problem varchar(100))";
            $con->query($sql);
      
            $sql1 = "insert into appointment values('$email','$dogn','$breed','$diet','$inj','$injdate','$prob')";
            $con->query($sql1);
            header("Location:checkup.php");
            exit();
        }
        $con->close();  
}

if (isset($_POST['update'])) 
{
    $email = $_POST["email"];
    $dogn = $_POST["dogn"];
    $breed = $_POST["breed"];
    $diet = $_POST["diet"];
    $inj = $_POST["inj"];
    $injdate = $_POST["injdate"];
    $prob = $_POST["prob"];

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
            $sql1 = "update appointment set dogName='$dogn' , breed='$breed',diet='$diet',injection='$inj',date='$injdate',problem='$prob' where email='$email'";
            $con->query($sql1);
            header("Location:checkup.php");
        }
        $con->close();  
    }
?>
