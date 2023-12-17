<?php
  if(isset($_POST['sign']))
  {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $arr = $_POST['arr'];
    if(isset($arr))
    {
        foreach($arr as $i)
        {
            $cat = $i;
        }
    } 
    //===================
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
        $sql = "create table if not exists user(email varchar(100) primary key,pass int not null,category varchar(10))";
        $con->query($sql);
  
        $sql1 = "insert into user values('$email','$pass','$cat')";
        $con->query($sql1);
        header("Location:index.php");
    }
    $con->close();
  }
?>