<?php
$id=$_POST['id'];
		$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("google");
		$query="DELETE from inbox WHERE id='$id'";
		$result=mysql_query($query);
		include"home.php";
		
		
		
		
		
		
		
		
		
		
		
?>
