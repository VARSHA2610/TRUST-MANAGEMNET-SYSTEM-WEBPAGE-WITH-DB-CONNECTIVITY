<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$link=mysql_connect("localhost","root","");
mysql_select_db("trust",$link);
$sql="SELECT * FROM fundet ";
$aResult=mysql_query($sql);
 
?>
<html>
<head>
<style>
body{
	  background-image: url("money.jpg");
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
<body background="c.jpg">
<h1><center>Buy Fund.</center></h1>
<form name="frmForm" id="frmForm" >
<table border="1" width="30%" height="30%"> 
<tr>
<th><font color='Green'>NAME</font></th>
<th><font color='Green'>EMAIL</font></th>
<th><font color='Green'>PHONENO</font></th>
<th><font color='Green'>ADDRESS</font></th>
<th><font color='Green'>AMOUNT</font></th>

</tr> 

<?php

while($rows = mysql_fetch_array($aResult,MYSQL_ASSOC))
{ 
$name         = $rows['name'];
$email          = $rows['email'];
$phone        = $rows['phone'];
$address   = $rows['addr'];
$amount  = $rows['amount'];

?>
<tr>
 
<td><b><font color='white'><?php echo $name;?></font></b></td>
<td><b><font color='white'><?php echo $email;?></font></b></td>
<td><b><font color='white'><?php echo $phone;?></font></b></td>
<td><b><font color='white'><?php echo $address;?></font></b></td>
<td><b><font color='white'><?php echo $amount;?></font></b></td>

</td>
</tr>
 
<?php } ?>
</table>
</form>
</body>
</html>