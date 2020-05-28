<?php
$server="localhost";
$user="root";
$pass="";
$dB="trust";
$con=new mysqli($server,$user,$pass,$dB);
if(!$con)
{
  echo "connection failed";
  exit();
}
if(isset($_POST['submit']))
{
 $username=$_POST['username'];  
$email=$_POST['email'];
  $psw=$_POST['psw'];
  $phone=$_POST['phone'];
  $addr=$_POST['addr'];
$queryY="INSERT INTO signup(username,email,psw,phone,addr)  VALUE('".$username."','".$email."','".$psw."','".$phone."','".$addr."')";
$con=new mysqli($server,$user,$pass,$dB);
$query1=mysqli_query($con,$queryY);
header('location:hh_login.html');
}
?>