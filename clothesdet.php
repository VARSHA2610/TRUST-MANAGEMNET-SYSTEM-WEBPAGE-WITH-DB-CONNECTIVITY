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
 
$name=$_POST['username'] ;

$quan=$_POST['qua'];
$phone=$_POST['phone'];
$addr=$_POST['add'];
$email=$_POST['email'];
$queryY="INSERT INTO clothesdet(name,quan,phone,addr,email)  VALUE('".$name."','".$quan."','".$phone."','".$addr."','".$email."')";
$con=new mysqli($server,$user,$pass,$dB);
$query1=mysqli_query($con,$queryY);
header('location:foodui.html');
}
?>