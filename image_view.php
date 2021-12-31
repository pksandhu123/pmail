<?php
$id=$_POST['id'];
		$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("preet");
		$query="SELECT image from image WHERE id='$id'";
		$result=mysql_query($query);
		$row=mysql_fetch_array($result);
		echo"$id <br>";
		$img=$row['image'];
		echo"$img";
?>
