<html>
<head>
<script type="text/javascript">
function validation()
{
var a = document.form.name.value;
if(a=="")
{
alert("Please Enter Your Name");
document.form.name.value;
return false;
}

if ((a.length < 2) || (a.length < 10))
{
alert("Your Character must be 2 to 10 Character");
document.form.name.value;
return false;
}
}

</script>
</head>
<body>
<form name="form" method="post" onsubmit="return validation()">
<tr>
<td> Name:</td><br>
<td><input type="text" name="name""  pattern="[A-Za-z]+"></td><br>
</tr>
<tr>
<td></td><br>
<td><input type="submit" name="sub" value="Submit"></td>
</tr>
</form>
</body>
</html>