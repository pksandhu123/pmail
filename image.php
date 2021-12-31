<?php
$id=$_POST['id'];
$image=$_POST['image'];
		$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("preet");
		$query="insert into image values('$id','$image')";
		$result=mysql_query($query);
		echo"image uploaded sucessfully";
?>
