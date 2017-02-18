<html>
<head>
<title>update data</title>
<script type="text/javaScript" language="javaScript">
function validate_form(form)
{if((frmgrade.txtslno.value=="")||
     (frmgrade.txtname.value=="")||
   (frmgrade.txtaddress.value=="")||(frmgrade.txtdesignation.value=="")||
   (frmgrade.txtphone.value=="")||
{alert("incomplete data");
return false;
}
return true;
}

function validate_grade(textBox)
{textBox.value=textBox.value.toUpperCase();
if((textBox.value.length>50)||
(!((textBox.value=="A"||(textBox.value=="B"||
(textBox.value=="C"||(textBox.value=="D"||
(textBox.value=="E"||(textBox.value=="N"))))
{
alert("invalid data");
textBox.focus();
textBox.value=" ";
return false;
}
return true;
}
</script>
</head>

<body onload="document.frmgrade.txtslno.focus()">
<form name="frmgrade" method="POST" action="updateupdatehandler.php">

<?php
mysql_connect('localhost','root');
mysql_select_db('jdtislam_joomla');
$r=$_POST['txtslno'];
$query="SELECT * FROM jdt_commite_members WHERE slno='$r' ";
$result=mysql_query($query);
if(mysql_affected_rows() == 1)
{
$row=mysql_fetch_array($result);
$rno=$row['slno'];
$p1=$row['name'];
$p2=$row['address'];
$p3=$row['designation'];
$p4=$row['phone'];

?>
<h2 align="center">enter the changes in data if any</h2>
<table align="center" border="1">
<tr>
<td>slno number</td>
<td><input type="text" name="txtslno" size="15" onblur="this.value.UpperCase()"/></td>
</tr>
<tr>
<td>name</td>
<td><input type="text" name="txtname" size="28" onchange="return validate_grade(this);" /></td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="txtaddress" size="69" onchange="return validate_grade(this);" /></td>
</tr>
<tr>
<td>designation</td>
<td><input type="text" name="txtdesignation" size="25" onchange="return validate_grade(this);" /></td>
</tr>
<tr>
<td>phone</td>
<td><input type="text" name="txtphone" size="23" onchange="return validate_grade(this);" /></td>
</tr>

<th colspan="2"><input type="submit" value="update" name="cmdsubmit" size="15" onclick="return validate_form(document.form);"/>
<input type="button" value="Cancel"
name="cmdCancel" size="15"
onclick="window.location.href='main.php';"/></th>
</tr>
</table>
<?php
}
else
{
echo "<h3 align=\"center\">$r" ?>
does not exist in the database"<h3>
<table align="center">
<tr><td><input type="button" value="back to main" name="cmdcancel" size="15" onclick="window.location.href='main.php';"/></td></tr>
</table>
<?php
}
?>
</form>
</body>
</html>
 

