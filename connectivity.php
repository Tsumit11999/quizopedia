<?php
session_start();
include("login.php"); 

$ID = $_POST['rName'];
$Password = $_POST['pass'];

if(isset($_POST['submit']))
{
  
if(!empty($_POST['rName']))   
{
	$query = mysqli_query($conn,"SELECT *  FROM signup WHERE rName = '".$_POST['rName']."' AND pass = '".$_POST['pass']."'");
	$row = mysqli_fetch_array($query);
	$num = mysqli_num_rows($query);
	if($num>0)
	{
		$_SESSION['Name'] = $row['fullname'];
		$_SESSION['roll_no'] = $row['rName'];
		header("location:hello_student.php");
	}
	else
	{
		header("location:index.php?n=0");
	}
}
}

	


?>

