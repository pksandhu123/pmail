<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("google");
		$query="SELECT username,password,first_name,last_name,picture FROM users_record where username='$username'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
if(empty($username) )
{
		echo"
<html>
<head>
<title>Pmail</title>
<link rel=stylesheet type=text/css href=css/login.css>
</head>
<body bgcolor='#F3F2F2'><br><br><br>
<table align=center bgcolor=white border=1>
<tr background=white>
<td>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=5 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=6>Sign in</font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=batang>to continue to Pmail</font><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 face=batang color=red>Email</font><br><form action='index.php' method=POST>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=text name='username' class=user size= 53 autocomplete=off autocorrect=off autocapitalize=off spellcheck=false>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color=red face=andalus>Enter an email</font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='forgot.php'><font size=3 face=batang color=#3579DC>Forgot email?</font></a><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=andalus>Not your computer? Use Guest mode to sign in privately.</font><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='signup.php'><font size=3 face=batang color=#3579DC>Create account</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class=submit type=submit name=submit value='&nbsp&nbsp NEXT &nbsp&nbsp'></font><br><br><br>

</td>
</tr>
<tr class=footer>
<td>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>

</td>
</tr>

</table>

</body>
</html>";
	}
	else	
if (($username == $row['username']))
  {
	  $first_name=$row['first_name'];
	  $last_name=$row['last_name'];
	  $password=$row['password'];
	  $picture=$row['picture'];
	  echo"
			<html>
<head>
<title>Pmail</title>
<link rel=stylesheet type=text/css href=css/login.css>
</head>
<body bgcolor='#F3F2F2'><br><br><br>
<table align=center bgcolor=white border=1>
<tr class=tr>
<td>
<div style='background-style: inset;'>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=5 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=6>Hi&nbsp $first_name&nbsp$last_name  </font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=batang> $username</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href=index.php>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img title='Change Account' src=arrow.jpg></a><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 face=batang color=#3579DC>Enter Your Password</font><br><form action=index.php method=POST>
<input type=hidden name=first value=$first_name><input type=hidden name=last value=$last_name><input type=hidden value=$username name=username><input type=hidden name=password value=$password><input type=hidden name=username value=$username>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=password name='password' class=user size= 53 autocomplete=off autocorrect=off autocapitalize=off spellcheck=false>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='forgot_pass.php'><font size=3 face=batang color=#3579DC>Forgot password?</font></a><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class=submit type=submit name=submit_pass value='&nbsp&nbsp NEXT &nbsp&nbsp'></font><br><br><br><br><br><br>

</td>
</tr>
<tr class=footer>
<td>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>

</td>
</div>
</tr>

</table>

</body>
</html>"; 
}	
	else
	{
		echo"
		<html>
<head>
<title>Pmail</title>
<link rel=stylesheet type=text/css href=css/login.css>
</head>
<body bgcolor='#F3F2F2'><br><br><br>
<table align=center bgcolor=white border=1>
<tr background=white>
<td>
<div style='background-style: inset;'>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=5 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=6>Sign in</font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=batang>to continue to Pmail</font><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 face=batang color=red>Email</font><br><form action='index.php' method=POST>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=text name='username' class=user size= 53 autocomplete=off autocorrect=off autocapitalize=off spellcheck=false>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color=red face=andalus>Couldn't find your Poogle Account</font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='forgot.php'><font size=3 face=batang color=#3579DC>Forgot email?</font></a><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=andalus>Not your computer? Use Guest mode to sign in privately.</font><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='signup.php'><font size=3 face=batang color=#3579DC>Create account</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class=submit type=submit name=submit value='&nbsp&nbsp NEXT &nbsp&nbsp'></font><br><br><br>

</td>
</tr>
<tr class=footer>
<td>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>

</td>
</div>
</tr>

</table>

</body>
</html>";
		
	}
}
else
	if(isset($_POST['submit_pass']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$myserver="localhost";
		$myuser="root";
		$mypass="";
		$mydb="google";
		$dbhandle=mysql_connect($myserver,$myuser,$mypass);
		$selected=mysql_select_db("google");
		$query="SELECT username,password,first_name,last_name,picture FROM users_record where username='$username'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$first_name=$row['first_name'];
	  $last_name=$row['last_name'];
if(empty($password))
{
	echo"
			<html>
<head>
<title>Pmail</title>
<link rel=stylesheet type=text/css href=css/login.css>
</head>
<body bgcolor='#F3F2F2'><br><br><br>
<table align=center bgcolor=white border=1>
<tr class=tr>
<td>
<div style='background-style: inset;'>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=5 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=6>Hi&nbsp $first_name&nbsp$last_name  </font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=batang> $username</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href=index.php>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img title='Change Account' src=arrow.jpg></a><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 face=batang color=red>Enter Your Password</font><br><form action=index.php method=POST>
<input type=hidden name=first value=$first_name><input type=hidden name=last value=$last_name><input type=hidden value=$username name=username><input type=hidden name=password value=$password><input type=hidden name=username value=$username>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=password name='password' class=user size= 53 autocomplete=off autocorrect=off autocapitalize=off spellcheck=false><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color=red face=batang size=2>Enter a password</font> <br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='forgot_pass.php'><font size=3 face=batang color=#3579DC>Forgot password?</font></a><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class=submit type=submit name=submit_pass value='&nbsp&nbsp NEXT &nbsp&nbsp'></font><br><br><br><br><br>

</td>
</tr>
<tr class=footer>
<td>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>

</td>
</div>
</tr>

</table>

</body>
</html>"; 
	
}
else
	if($password == $row['password'])
	{
		SESSION_START();
		$user=$_SESSION["email"]="$username";
		echo"<!DOCTYPE html>
<html>
<body>
<head>
<input type=hidden value=$username name=user>
<meta charset='UTF-8'>
        <meta http-equiv='refresh' content='2.4; url=home.php'>
</head>
<style>
#myProgress {
  position: relative;
  width: 40%;
  height: 15px;
  background-color: white;
  border-width: 10px;
}

#myBar {
  position: absolute;
  width: 5%;
  height: 100%;
  background-color: #3579DC;
  border-width: 10px;
}
</style>
<br><br><br><br><br><br><br><br><br><br><br><br>
<body onload='move()'>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=4><b>Loading $username ...</b></font><br><br><center>
<div id='myProgress'>
  <div id='myBar'>
  </div>
</div> 

<script>
function move() {
  var elem = document.getElementById('myBar');   
  var width = 0.5;
  var id = setInterval(frame, 25);
  function frame() {
    if (width >= 70) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      document.getElementById('label').innerHTML = width * 1  + '%';
    }
  }
}
</script>
</center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>
</body>
</html>

";
	}
else
{
	echo"
			<html>
<head>
<title>Pmail</title>
<link rel=stylesheet type=text/css href=css/login.css>
</head>
<body bgcolor='#F3F2F2'><br><br><br>
<table align=center bgcolor=white border=1>
<tr class=tr>
<td>
<div style='background-style: inset;'>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=5 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=6>Hi&nbsp $first_name&nbsp$last_name  </font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=batang> $username</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href=index.php>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img title='Change Account' src=arrow.jpg></a><br><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 face=batang color=red>Enter Your Password</font><br><form action=index.php method=POST>
<input type=hidden name=first value=$first_name><input type=hidden name=last value=$last_name><input type=hidden value=$username name=username><input type=hidden name=password value=$password><input type=hidden name=username value=$username>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=password name='password' class=user size= 53 autocomplete=off autocorrect=off autocapitalize=off spellcheck=false><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color=red face=batang size=2>Wrong password . Try again or click Forgot password</font> <br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='forgot_pass.php'><font size=3 face=batang color=#3579DC>Forgot password?</font></a><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class=submit type=submit name=submit_pass value='&nbsp&nbsp NEXT &nbsp&nbsp'></font><br><br><br><br><br>

</td>
</tr>
<tr class=footer>
<td>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>

</td>
</div>
</tr>

</table>

</body>
</html>";
}
	
	}
	
else
{
			echo"
			<html>
<head>
<title>Pmail</title>
<link rel=stylesheet type=text/css href=css/login.css>
</head>
<body bgcolor='#F3F2F2'><br><br><br>
<table align=center bgcolor=white border=1>
<tr class=tr>
<td>
<div style='background-style: inset;'>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font><font size=5 color=blue>P</font><font color=red size=5>o</font><font color=yellow size=5>o</font><font size=5 color=blue>g</font><font size=5 color=green>l</font><font size=5 color=red>e</font></font><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=6>Sign in</font><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=batang>to continue to Pmail</font><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=2 face=batang color=#3579DC>Email</font><br><form action='index.php' method=POST>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type=text name='username' class=user size= 53 autocomplete=off autocorrect=off autocapitalize=off spellcheck=false>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='forgot.php'><font size=3 face=batang color=#3579DC>Forgot email?</font></a><br><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size=3 face=andalus>Not your computer? Use Guest mode to sign in privately.</font><br><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href='signup.php'><font size=3 face=batang color=#3579DC>Create account</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input class=submit type=submit name=submit value='&nbsp&nbsp NEXT &nbsp&nbsp'></font><br><br><br>

</td>
</tr>
<tr class=footer>
<td>
&nbsp&nbsp&nbsp <font size=3>English(United&nbsp States) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &copy Poogle by P.K.Sandhu </font>

</td>
</div>
</tr>

</table>

</body>
</html>";
}

?>