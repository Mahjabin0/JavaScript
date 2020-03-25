<html>
<head>
<script type="text/javascript">
function validation()
{
var a = document.form.name.value;
if(a=="")
{
alert("Please Enter Your Email");
document.form.name.value;
return false;
}
}

</script>
</head>
<body>
<form name="form" method="post" onsubmit="return validation()">
<tr>
<td> Email:</td><br>
<td><input type="text" name="name"" ></td><br>
</tr>
<tr>
<td></td><br>
<td><input type="submit" name="sub" value="Submit"></td>
</tr>
</form>
</body>
</html>