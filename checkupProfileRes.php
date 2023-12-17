<?php
if (isset($_POST['save'])) 
{
    $name =  $_POST["name"];
    $email = $_POST["email"];
    $dogn = $_POST["dogn"];
    $breed = $_POST["breed"];
    $food = $_POST["food"];

    // Validate data
    if (empty($name) || empty($email) || empty($dogn) || empty($breed) ) {
        echo "All fields are required. Please fill in all the information.";
    } 
    else 
    {
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
            $sql = "create table if not exists checkupProfile(email varchar(100) primary key,name varchar(30),dogName varchar(20),breed varchar(20),food varchar(30))";
            $con->query($sql);
      
            $sql1 = "insert into checkupProfile values('$email','$name','$dogn','$breed','$food')";
            $con->query($sql1);
            header("Location:checkup.php");
        }
        $con->close();  
    }
}

if (isset($_POST['update'])) 
{
    $name =  $_POST["name"];
    $email = $_POST["email"];
    $dogn = $_POST["dogn"];
    $breed = $_POST["breed"];
    $food = $_POST["food"];

    // Validate data
    if (empty($name) || empty($email) || empty($dogn) || empty($breed) ) {
        echo "All fields are required. Please fill in all the information.";
    } 
    else 
    {
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
            $sql1 = "update checkupProfile set name='$name' , dogName='$dogn' , breed='$breed', food='$food' where email='$email'";
            $con->query($sql1);
            header("Location:checkup.php");
        }
        $con->close();  
    }
}
?>
