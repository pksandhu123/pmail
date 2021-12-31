<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$z=0;
$myserver="localhost";
$myuser="root";
$mypass="";
$mydb="preet";
$dbhandle=mysql_connect($myserver,$myuser,$mypass)
or
die("could not connect sql server on $myserver");
$selected=mysql_select_db("preet")
or
die("could not open $mydb");


$icode=$_GET['cid'];
$query="Select * from image";
$result=mysql_query($query);
$g=0;
 	
	  	

while($row=mysql_fetch_array($result))
{
	
 
	    $image=$row['image']; 
		$id=$row['id']; 



echo "<form action=updateitem.php method=post>";
  
 echo "<tr>";
 
               
echo "<td><input type=text value='$image' name='iimagen'> </td>";
echo "<td><input type=text value='$id' name='iagen'> </td>";

 echo " <input type=submit value=Modify name=b1>";
 



 
}


	
mysql_close($dbhandle);
?>
</body>
</html>