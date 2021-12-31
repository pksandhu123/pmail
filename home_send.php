<?php
if(isset($_POST['send']))
{
	SESSION_START();
	$username=$_SESSION['email'];
$to=$_POST['to'];
$cc=$_POST['cc'];
$bcc=$_POST['bcc'];
if(empty($cc) && empty($bcc))
{
$subject=$_POST['subject'];
$body=$_POST['body'];
$myserver="localhost";
$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("google");
					if(empty($subject) && empty($body) && empty($_POST['attachment']))
			{
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','no subject','no text','')";
			}
			else
		if(empty($subject) && empty($body))
		{
			$attach=$_POST['attachment'];
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','no sub','no text','$attach')";
		}
		else
			if(empty($body) && empty($_POST['attachment']))
			{
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','$subject','no body','')";
			}
			else
			if(empty($subject) && empty($_POST['attachment']))
			{
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','no sub','$body',' ')";
			}
else
		if(empty($subject))
		{
			$attach=$_POST['attachment'];
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','no sub','$body','$attach')";
		}
	else
		if(empty($body))
		{
			$attach=$_POST['attachment'];
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','$subject','no text','$attach')";
		}
		else
		if(empty($_POST['attachment']))
		{
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','$subject','$body','')";
		}
		
			else
	{	
		$attach=$_POST['attachment'];
		$query="insert into inbox(receiver,sender,subject,body,attachment) values ('$to','$username','$subject','$body','$attach')";
	}
	$result=mysql_query($query);

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
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 style='background: yellow;color: blue;size:3;'>&nbsp Message sent sucessfully <a href=>View Message &nbsp </a></font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=5 color=red>Pmail</font><br><br>

 <form action='compose.php' method=POST>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=hidden value=$user name=email><input style='color:white;background-color:red;height:35;' type=submit name=compose value='&nbsp&nbsp COMPOSE &nbsp&nbsp'></form>
 <form action=home.php method=POST><input style='position: relative;top: -100px;left: 300px;' type='image' src='refresh.jpg'> </form><br>
 
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
$sql="SELECT sender,subject,body FROM inbox WHERE receiver='$user' ORDER BY 'sender'DESC";
$que=mysql_query($sql);
while($ro=mysql_fetch_array($que))
{
echo"
<table align=right style='position:relative;top:-300;border: outset; background: #f0f0f0' align=center border=0><td bgcolor=#f0f0f0>
<input size=29 type=text readonly=readonly name=sender id=sender value='$ro[sender]'><input size=31 readonly=readonly type=text name=sender id=sender value='$ro[subject]'><input size=81.5 type=text readonly=readonly name=sender id=sender value='$ro[body]'></table>";
}
echo"</td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</html></body>";
}
	}


else
	include('home.php');
?>
