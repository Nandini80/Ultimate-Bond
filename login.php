<?php
 if(isset($_POST['login']))
 {
   $email = $_POST['email1'];
   $pass = $_POST['pass1'];
//    localStorage.setItem("email",$email);
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
       $sql = "select *from user where email = '$email' and pass='$pass'";
       $res= mysqli_query($con,$sql);
       $row = mysqli_fetch_array($res);
       if($row['category']==='care')
       {
           header("Location:care.php");
       }
       else 
       {
           header("Location:checkup.php");
       }
       exit;
   }
   $con->close();
 }
?>