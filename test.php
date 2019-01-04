<?php
if(isset($_POST['submit'])){
	if($_POST['ans']==2)
	echo $_POST[ans];
}

?>
<html>
<head>
<title>
</title>
</head>
<body>
<form action='' method='post'>
optin1<input type="radio" name='ans' value='1'></br>
optin2<input type="radio" name='ans' value='2'></br>
option3<input type="radio" name='ans' value='3'></br>
option4<input type="radio" name='ans' value='4'></br>
<input type="submit" name='submit'>
</form>
</body>
</html>
