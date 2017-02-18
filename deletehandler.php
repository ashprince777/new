<html>
<head>
<title> result of delete existing data</title>
</head>
<body>
<?php
mysql_connect('localhost','root');
mysql_select_db('jdtislam_joomla');
$r=$_POST['txtslno'];
$query="DELETE FROM  jdt_commite_members WHERE slno='$r' ";
$result1=mysql_query($query);
if(mysql_affected_rows() == 1)
echo "<h3 align =\"center\">the specified record has been deleted.</h3>";
else
{ error_log(mysql_error());
echo "<h3 align=\"center\">something went wrong! data not deleted.</h3>";

}
?>
<table align="center">
<tr>
<th colspan="6">
<input type="submit" name="back" value="back to main" onclick="window.location.href='main.php';" />
</th>
</tr>
</table>
</body>
</html>