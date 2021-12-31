<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table class="form-horizontal" border=2>
        <tr> 
          <td ><strong><font color="#000000">Item Code</font></strong></td>
          <td><strong><font color="#000000">Item Name</font></strong></td>
          <td><strong><font color="#000000">Item Size</font></strong></td>
          <td><strong><font color="#000000">Rate In Rs.</font></strong></td>
          <td><strong><font color="#000000">Weight</font></strong></td>
          <td><strong><font color="#000000">Color</font></strong></td>
                    <td><strong><font color="#000000">Brand</font></strong></td>
          <td><strong><font color="#000000">Warenty</font></strong></td>

          <td><strong><font color="#000000">Min. Quantity</font></strong></td>
                    <td><strong><font color="#000000">Wholesale packing</font></strong></td>
          <td><strong><font color="#000000">Retail packing</font></strong></td>
                    <td><strong><font color="#000000">Item Image</font></strong></td>
                              <td><strong><font color="#000000">Age Group</font></strong></td>
                                        <td><strong><font color="#000000">Category</font></strong></td>





         

        </tr>
<?php
$z=0;
$myserver="localhost";
$myuser="root";
$mypass="";
$mydb="david_sports";
$dbhandle=mysql_connect($myserver,$myuser,$mypass)
or
die("could not connect sql server on $myserver");
$selected=mysql_select_db("david_sports")
or
die("could not open $mydb");


$icode=$_GET['cid'];
$query="Select * from item_master";
$result=mysql_query($query);
$g=0;
 	
	  	

while($row=mysql_fetch_array($result))
{
	
$iname=$row["i_name"];
$isize=$row["i_size"];
 $irate=$row['i_rate']; 
  $iweight=$row['i_weight']; 
   $icolor=$row['i_color'];
    $ibrand=$row['i_brand']; 
	 $iwarenty=$row['i_warenty']; 
	 $iquality=$row['i_min_quality']; 
	 $iwholesale=$row['i_packing_wholesale']; 
	  $iretail=$row['i_packing_retail']; 
	   $iimage=$row['i_image']; 
	    $iage=$row['i_age_group']; 
		$icategory=$row['i_category']; 
if(($icode==$row["i_code"]))
{ 



echo "<form action=updateitem.php method=post>";
  
 echo "<tr>";
 
               
 echo "<td> <input type=text value='$icode' name='icoden' > </td>";

 

echo "<td><input type=text value='$iname' name='inamen'></td>";



echo "<td><input type=text value='$isize' name='isizen'> </td>";

echo "<td><input type=text value='$irate' name='iraten'> </td>";

echo "<td><input type=text value='$iweight' name='iweightn'> </td>";

echo "<td><input type=text value='$icolor' name='icolorn'> </td>";

echo "<td><input type=text value='$ibrand' name='ibrandn'> </td>";

echo "<td><input type=text value='$iwarenty' name='iwarentyn'> </td>";

echo "<td><input type=text value='$iquality' name='iqualityn'> </td>";
echo "<td><input type=text value='$iwholesale' name='iwholesalen'> </td>";
echo "<td><input type=text value='$iretail' name='iretailn'> </td>";
echo "<td><input type=text value='$iimage' name='iimagen'> </td>";
echo "<td><input type=text value='$iage' name='iagen'> </td>";
echo "<td><input type=text value='$icategory' name='icategoryn'> </td>";









 echo " <input type=submit value=Modify name=b1>";
 



 
}
}

	
mysql_close($dbhandle);
?>
</body>
</html>