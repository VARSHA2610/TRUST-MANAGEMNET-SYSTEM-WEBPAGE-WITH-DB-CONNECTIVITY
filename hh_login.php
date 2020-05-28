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
  $email=$_POST['email'];
  $psw=$_POST['psw'];
  $queryz="select email,psw from signup where email='".$email."' AND psw='".$psw."' limit 1 ";
  $queryza=mysqli_query($con,$queryz);
  if(mysqli_num_rows($queryza)==1)
  {
header('location:hh_hp.html');
}
else {
 echo "<script type='text/javascript'>alert(' Invalid username or password !!!');
    window.location.replace('hh_login.html');</script>";
}
?>
