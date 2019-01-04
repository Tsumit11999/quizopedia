<!DOCTYPE HTML>
<html>
<head>
 <link href="style.css" rel="stylesheet" type="text/css" />
<title>Sign-Up</title>
</head>
<body id="body-color">
<div id="Sign-Up">
<?php
if(@$_GET['n']==3)
	echo "Please fill all fields";
?>
<fieldset style="width:30%"><legend>Registration Form</legend>
<table border="0">
<tr>
<form method="POST" action="stu_add.php">
<td>Name</td><td> <input type="text" name="name" required></td>
</tr>
<tr>
<td>Email</td><td> <input type="text" name="email" required></td>
</tr>
<tr>
<td>Rollno</td><td> <input type="text" name="rName" required></td>
</tr>
<tr>
<td>Password</td><td> <input type="password" name="pass" required></td>
</tr>
<tr>
<td>Confirm Password </td><td><input type="password" name="cpass" required></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Sign-Up"></td>
</tr>
</form>
</table>
</fieldset>
</div>
</body>
</html>


