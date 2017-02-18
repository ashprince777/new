<html>
<head>
<title>add new data</title>
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
if((textBox.value.length>1)||
(!((textBox.value=="A"||(textBox.value=="B"||
(textBox.value=="C"||(textBox.value=="D"||
(textBox.value=="E"||(textBox.value=="N"))))
{
alert("invalid grade");
textBox.focus();
textBox.value="";
return false;
}
return true;
}
</script>
</head>

<body onload="document.frmgrade.txtslno.focus()">
<form name="frmgrade" method="POST" action="inserthandler.php">
<h2 align="center">enter the data of each members</h2>
<table align="center" border="1">
<tr>
<td>slno number</td>
<td><input type="text" name="txtslno" size="15" onblur="this.value.UpperCase()"/></td>
</tr>
<tr>
<td>name</td>
<td><input type="text" name="txtname" size="15" onchange="return validate_grade(this);" /></td>
</tr>
<tr>
<td>address</td>
<td><input type="text" name="txtaddress" size="15" onchange="return validate_grade(this);" /></td>
</tr>
<tr>
<td>designation</td>
<td><input type="text" name="txtdesignation" size="15" onchange="return validate_grade(this);" /></td>
</tr>
<tr>
<td>phone</td>
<td><input type="text" name="txtphone" size="15" onchange="return validate_grade(this);" /></td>
</tr>

<th colspan="2"><input type="submit" value="   Add   "
validate_form(document.form);"/>
<input type="button" value="Cancel"
name="cmdCancel" size="15"
onclick="window.location.href='main.php';"/></th>
</tr>
</table>
</form>
</body>
</html>