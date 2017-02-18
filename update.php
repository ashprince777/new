<html>
<head>
<title>update an existing grade</title>
<script type="text/JavaScript" language="JavaScript">
function validate(form)
{ if(frmdelete.txtslno.value==' ')
{ alert("slno no cannot be blank");
return false;
}
return true;
}
</script>
</head>
<body onload="document.frmdelete.txtslno.focus();">
<form name="frmdelete" method="post" action="updatehandler.php">
<table align="center">
<tr align="center">
<td>enter the slno no of the member whose data to be updated</td>
</tr>
<tr align="center">
<td><input type="text" name="txtslno" value=" " size="15" onblur="this.value=this.value.toUpperCase();" /></td>
</tr>
<tr align="center">
<th><input type="button" value="Cancel" name="cancel" onclick="window.location.href='main.php';" />
</th>
</tr>
</table>
</form>
</body>
</html>
