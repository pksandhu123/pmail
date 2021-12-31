<?php
if(isset($_POST['close']))
{
	SESSION_START();
	$user=$_SESSION['email'];
$a=$_POST['to'];
$b=$_POST['cc'];
$c=$_POST['bcc'];
$d=$_POST['subject'];
$e=$_POST['body'];
$f=$_POST['attachment'];
if(empty($a) or empty($b) or empty($c))
{
	include('compose.php');
}
else{
	$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("google");
		$query="INSERT INTO draft VALUES('$a','$b','$c','$d','$e','$f')";
$result=mysql_query($query);
include('home.php');
}

}
else
	include('home.php');


?>
