<html>
<head>
<title>result of add new</title>
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

$query=" insert into jdt_commite_members(slno,name,address,designation,phone) values('$r','$p1','$p2','$p3','$p4')";
$result1=mysql_query($query);
if(mysql_affected_rows()==1)
echo "<h3 align=\"center\">your information has been recorded</h3>";
else
{ error_log(mysql_error());
echo "<h3 align=\"center\">something went wrong! data not added.</h3>";
}
?>
<table align="center">
<tr>
<th colspan="6"><input type="button" name="back" value="back to main" onclick="window.location.href='main.php';"/></th>
</tr>
</table>
</body>
</html>