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
echo"<html>
<head><title>Compose-$user</title></head>
<body bgcolor=#B8B8B8>
<br>
<table align=center cellspacing=0 cellpadding=0 border=1>
<tr bgcolor=black>
<td>
<div><font color=white><b>New Message</b></font><form style='display:inline;' action='home_save.php'method=POST> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <input name=close type=image title='Save and Close' src='close_compose.jpg'></form>
</td></div>
</tr><tr>
<td>
<form action='home_send.php' style='display:inline' method=POST enctype='multipart/form-data'>
<textarea cols='133' name=to style='resize: none;'size=131 placeholder='To' style='height: 30;' autocomplete=off autocorrect=off autocapitalize=off spellcheck=false></textarea><br>
<textarea cols='133' name=cc style='resize: none;'size=131 placeholder='Cc' style='height: 30;' autocomplete=off autocorrect=off autocapitalize=off spellcheck=false></textarea><br>
<textarea cols='133' name=bcc style='resize: none;'size=131 placeholder='Bcc' style='height: 30;' autocomplete=off autocorrect=off autocapitalize=off spellcheck=false></textarea>
</td>
</tr><tr>
<td>
<textarea cols='133' name=subject style='resize: none;'size=131 placeholder='Subject' style='height: 30;' autocomplete=off></textarea>
</td>
</tr><tr>
<td>
<textarea autocomplete=off style='resize: none;'type=text name=body rows='26' cols='133' style='height: 370;text-align:;top' autocomplete=off></textarea></td>
</tr><tr size=110 bgcolor=#C8C8C8><td>
<div>
&nbsp <input style='height:32;background:#3579DC;color:white;padding-top: 0px;' name=send type=submit value='&nbsp&nbsp Send &nbsp&nbsp'> &nbsp&nbsp&nbsp 
<style type='text/css'>
.image-upload {
  visibility:hidden;
  width:0;
  height:0
}
</style>
  <label for='file-input'>
    <img title='Attachment' border='0' style='padding-top: 5px;' src='attachment.jpg' style='pointer-events: bold'>
  </label>  <input id='file-input' class='image-upload' type='file' name='attachment'>
  	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='home.php'><img title='Discard Draft' border='0' style='padding-top: 0px;' src='delete.jpg' style='pointer-events: bold'></a>
</div>
</td></form>
</tr>
</table>
</body>
</html>";
}

?>