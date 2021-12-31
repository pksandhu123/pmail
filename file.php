<?PHP
    $id=$_POST['id'];
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


    $sql = "SELECT image FROM image where id ='$id'";
    $result = mysql_query($sql);
    while($row=mysql_fetch_array($result))
    {
    ?>
		
          <?php
		  echo""
		  
}
  ?>
