<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$link=mysql_connect("localhost","root","");
mysql_select_db("trust",$link);
$sql="SELECT * FROM clothesdet ";
$aResult=mysql_query($sql);
 
?>
<html>
<head>
<style>
body{
	  background-image: url("clothes.jpeg");
	  height: 700px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

h1{
font-family: georgia,garamond,serif;
font-size:30px;
color: white;

}
table, td, th {  
  border: 1px solid #ddd;
  text-align: centre;
  font-family: georgia,garamond,serif;
  
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
  background-color:black;
}
tr:hover {background-color:#f5f5f5;}
</style>
</head>
<h1><center>Buy Clothes.</center></h1>
<body >
<form name="frmForm" id="frmForm" >
<table border="1" width="30%" height="30%"> 
<tr>
<th><font color='Green'>NAME</font></th>
<th><font color='Green'>EMAIL</font></th>
<th><font color='Green'>PHONENO</font></th>
<th><font color='Green'>ADDRESS</font></th>
<th><font color='Green'>QUANTITY</font></th>

</tr> 

<?php

while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
{ 
$name         = $rows['name'];
$email          = $rows['email'];
$phone        = $rows['phone'];
$address   = $rows['addr'];
$quantity  = $rows['quan'];

?>
<tr>
 
<td><b><font color='white'><?php echo $name;?></font></b></td>
<td><b><font color='white'><?php echo $email;?></font></b></td>
<td><b><font color='white'><?php echo $phone;?></font></b></td>
<td><b><font color='white'><?php echo $address;?></font></b></td>
<td><b><font color='white'><?php echo $quantity;?></font></b></td>

</td>
</tr>
 
<?php } ?>
</table>
</form>
</body>
</html>