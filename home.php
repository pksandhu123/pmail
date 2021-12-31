<?php
SESSION_START();
if(empty($_SESSION['email']))
{
	include"index.php";
}
else
{
	$user=$_SESSION['email'];
	$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("google");
		$query="SELECT username,password,first_name,last_name,picture FROM users_record where username='$user'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$first_name=$row['first_name'];
	  $last_name=$row['last_name'];
	  $password=$row['password'];
	  $picture=$row['picture'];

echo"
<html>
<head>
<title>Inbox-$user</title>
</head>
<body>
<div id=logo>
<table class='tab' bgcolor=#f0f0f0 border=0>
<tr>
<td>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=6 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input style='height: 30;' type=text size=85 name=search><input style='padding-top: 4;' type=image style='top:30px;' src=search.jpg height=30> 
</table><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=5 color=red>Pmail</font><br><br>
 <form action='compose.php' method=POST>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=hidden value=$user name=email><input style='color:white;background-color:red;height:35;' type=submit name=compose value='&nbsp&nbsp COMPOSE &nbsp&nbsp'></form>
 <input style='position: relative;top: -100px;left: 300px;' type='image' src='refresh.jpg' onClick='window.location.reload()'><br>
 
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='home.php' style=text-decoration:none;line-height:25px;><font color=red size=3.5>Inbox</font></a><br>  

 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='' style=text-decoration:none;line-height:25px;><font color=black size=3.5>Starred</font></a><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='' style=text-decoration:none;line-height:25px;><font color=black size=3.5>Sent Mail</font></a><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='' style=text-decoration:none;line-height:25px;><font color=black size=3.5>Drafts</font></a><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='' style=text-decoration:none;line-height:25px;><font color=black size=3.5>All Mail</font></a><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='' style=text-decoration:none;line-height:25px;><font color=black size=3.5>Junk Box</font></a><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <font style='text-transform:uppercase;' size=2 face=batang>$first_name $last_name</font>
</td></tr>
</table>
</div><br><br>
";
$z=0;
$a=0;
$sql="SELECT id,sender,subject,body FROM inbox WHERE receiver='$user' ORDER BY 'id'DESC";
$que=mysql_query($sql);
while($ro=mysql_fetch_array($que))
{
	$id=$ro['id'];
	$sender=$ro['sender'];
	$sub=$ro['subject'];
	$body=$ro['body'];
echo"
<table align=right style='position:relative;top:-300;border: outset; background: #f0f0f0' align=center border=0><td bgcolor=#f0f0f0>
<form action=delete.php method=POST><input type=text value=$sender readonly=readonly><input type=text value=$sub readonly=readonly><input type=text value=$body readonly=readonly><input type=hidden value=$id name=id><strong><input type=image src='delete.jpg'></strong></form></table> ";
}
echo"</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</html></body>";
}

?>