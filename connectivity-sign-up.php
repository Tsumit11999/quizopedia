<?php
include("login.php");

if(isset($_POST['subs']))
{
	$query = mysqli_query($conn,"SELECT * FROM signup WHERE rName = '".$_POST['rName']."'");
    $rows=mysqli_num_rows($query);
	if($rows)
	{
		header("Location:index.php?n=2");
	}
	else
	{
		if(isset($_POST['name'])&&isset($_POST['rName'])&&isset($_POST['email'])&&isset($_POST['pass']))
		{
	$fullname = $_POST['name'];
	$rName = $_POST['rName'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query2 = "INSERT INTO signup (fullname,rName,email,pass) VALUES ('$fullname','$rName','$email','$password')";
	$result= mysqli_query($conn,$query2);
	if($result)
	  header("Location:index.php?n=1");
		}
		else
			header("Location:registration.php?n=3");
	}
}
  if(isset($_POST['subt']))
  {
	if($_POST['code']==007)
	{
		$query = mysqli_query($conn,"SELECT * FROM signupt WHERE aadhar_no = '".$_POST['aadhar_no']."'");
    $rows=mysqli_num_rows($query);
	if($rows)
	{
		header("Location:index.php?n=2");
	}
	else
	{
		if(isset($_POST['name'])&&isset($_POST['aadhar_no'])&&isset($_POST['email'])&&isset($_POST['pass']))
		{
	$fullname = $_POST['name'];
	$aadhar_no = $_POST['aadhar_no'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query2 = "INSERT INTO signupt (fullname,aadhar_no,email,pass) VALUES ('$fullname','$aadhar_no','$email','$password')";
	$result= mysqli_query($conn,$query2);
	if($result)
	  header("Location:index.php?n=1");
		}
		else
			header("Location:registration.php?n=3");
	}
}
    else
		header("Location:registration.php?n=5");
  }



?>