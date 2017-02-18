<html>
<head>
<title>delete an existing data</title>
<script type="text/JavaScript" language="JavaScript">
function validate(form)
{ if(frmdelete.txtslno.value==' ')
  
{ alert("slno Number Cannot be Blank");
  return false;is
}
return true;
}
</script>
</head>
<body onload="document.frmdelete.txtslno.focus();">
<form name="frm delete" method="post" action="deletehandler.php">
<table align="center">
<tr align="center">
<td>enter the slno no of the member whose data to be deleted</td>
</tr>
<tr align="center">
<td><input type="text" name="txtslno" value="" size="15" onblur="this.value=this.value.toUpperCase();"/>
</td>
</tr>
<tr align="center">
<th>
<input type="submit" value="delete" name="butdelete" onclick="return validate(document.frmdelete);"/>
<input type="button" value="cancel" name="cancel" onclick="window.location.href='main.php';" />
</th>
</tr>
</table>
</form>
</body>
</html>