<html>
<head>
<title>data updation result</title>
</head>
<body>
<?php
mysql_connect('localhost','root');
mysql_select_db('jdtislam_joomla');
$r=$_POST['txtslno'];
$p1=$_POST['txtname'];
$p2=$_POST['txtaddress'];
$p3=$_POST['txtdesignation'];
$p4=$_POST['txtphone'];
$query="UPDATE result SET slno='$r',name='$p1',address='$p2',designation='$p3',phone='$p4'  WHERE slno='$r' ";
$result1=mysql_query($query);
if(mysql_affected_rows()==1)
echo "<h3 align=\"center\">updation successful</h3>";
else
{ error_log(mysql_error());
echo "<h3 align=\"center\">something went wrong! data not updated.</h3>";
}
?>
<table align="center">
<tr>
<th colspan="6"><input type="submit" name="back" value="back to main" onclick="window.location.href='main.php';"/></th>
</tr>
</table>
</body>
</html>
