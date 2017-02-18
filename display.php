<html>
<head>
<title>existing data</title>
</head>
<body>

<h3 align="center">existing commite members.</h3>
<table width="50%"rules="all" align="center" border="1">
<tr><th>slno</th><th>name</th><th>address</th><th>designation</th><th>phone</th>
</tr>
<?php
mysql_connect('localhost','root');
mysql_select_db('jdtislam_joomla');
$query="select * from jdt_commite_members";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>{$row['slno']}</td><td>{$row['name']}</td>";
echo "<td>{$row['address']}</td><td>{$row['designation']}</td>";
echo "<td>{$row['phone']}</td>";
}
?>
<tr>
<th colspan="6"><input type="button" name="back" value="back to main" onclick="window.location.href='main.php';"/></th>
</tr>
</table>
</body>
</html> 

