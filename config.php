<?php 
session_start();
 $con = mysqli_connect("localhost","root","","dogs",3307,"C:/xampp/mysql/mysql.sock") or die("Couldn't connect");
if(!$con){
    die("Connection failed".mysqli_connect_error);
}
?>