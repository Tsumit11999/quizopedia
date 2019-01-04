<?php
session_start();
include('login.php');
if(isset($_POST['question'])){
	header("Location:quiz_next.php?subject_code=".@$_GET['subject_code']."&n=".$_POST['clickq']."");
}
if(isset($_POST['subnext'])){
	$query3="select * from question where subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
    $result3=mysqli_query($conn,$query3);
    $num=mysqli_num_rows($result3);
	$n=@$_GET['n'];
	if($n==$num)
		header("Location:result.php?subject_code=".@$_GET['subject_code']."");
	else{
		$n=$n+1;
	header("Location:quiz_next.php?subject_code=".@$_GET['subject_code']."&n=".$n."");
	}
}
if(isset($_POST['submited'])){
	$query="select * from question where id='".@$_GET['n']."' and subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
    $result=mysqli_query($conn,$query);
    $rowq=mysqli_fetch_row($result);
	$query2="select * from result where subject_code='".@$_GET['subject_code']."' and roll_no='".$_SESSION['roll_no']."';";
    $result2=mysqli_query($conn,$query2);
	$query3="select * from quiz_name where subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
    $result3=mysqli_query($conn,$query3);
	$rowm=mysqli_fetch_row($result3);
    $num2=mysqli_num_rows($result2);
	$rowr=mysqli_fetch_row($result2);
	
	if(@$_GET['n']!=1){
		$sahi=$rowr[2];
	    $galat=$rowr[3];
		$marks=$rowr[4];
		if($_POST['ans']==$rowq[2]){
		$sahi=$sahi+1;
		$marks=$marks+$rowm[2];
		$query4="update result set sahi='".$sahi."', marks='".$marks."' where subject_code='".@$_GET['subject_code']."' and roll_no='".$_SESSION['roll_no']."';";
        $result4=mysqli_query($conn,$query4);
		}
		else{
		$galat=$galat+1;
		$marks=$marks-$rowm[3];
		$query4="update result set galat='".$galat."', marks='".$marks."' where subject_code='".@$_GET['subject_code']."' and roll_no='".$_SESSION['roll_no']."';";
        $result4=mysqli_query($conn,$query4);
		}
	}
	else{
		if($num2){
		$query5="delete from result where roll_no='".$_SESSION['roll_no']."' and subject_code='".@$_GET['subject_code']."';";
		$result5=mysqli_query($conn,$query5);
		}
		if($_POST['ans']==$rowq[2]){
		$query4="insert into result(roll_no,subject_code,sahi,galat,marks) values ('".$_SESSION['roll_no']."','".@$_GET['subject_code']."','1','0','".$rowm[2]."');";
        $result4=mysqli_query($conn,$query4);
		}
		else{
			$acha=$rowm[3];
			$acha=-$acha;
		$query4="insert into result(roll_no,subject_code,sahi,galat,marks) values ('".$_SESSION['roll_no']."','".@$_GET['subject_code']."','0','1','".$acha."');";
        $result4=mysqli_query($conn,$query4);	
		}
	}
	
	$query3="select * from question where subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
    $result3=mysqli_query($conn,$query3);
    $num=mysqli_num_rows($result3);
	$n=@$_GET['n'];
	if($n==$num)
		header("Location:result.php?subject_code=".@$_GET['subject_code']."");
	else{
		$n=$n+1;
	header("Location:quiz_next.php?subject_code=".@$_GET['subject_code']."&n=".$n."");
	}
}
if(isset($_POST['logout'])){
	session_destroy();
	header("Location:index.php");
}
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
		$query = mysqli_query($conn,"SELECT * FROM teacher_info WHERE aadhar_no = '".$_POST['aadhar_no']."'");
    $rows=mysqli_num_rows($query);
	if($rows)
	{
		header("Location:index.php?n=2&teacher=1");
	}
	else
	{
		if(isset($_POST['name'])&&isset($_POST['aadhar_no'])&&isset($_POST['email'])&&isset($_POST['pass']))
		{
	$fullname = $_POST['name'];
	$aadhar_no = $_POST['aadhar_no'];
	$email = $_POST['email'];
	$password =  $_POST['pass'];
	$query2 = "INSERT INTO teacher_info(Name,aadhar_no,email,Password) VALUES ('$fullname','$aadhar_no','$email','$password')";
	$result= mysqli_query($conn,$query2);
	if($result)
	  header("Location:index.php?n=1&teacher=1");
		}
		else
			header("Location:index.php?n=3&teacher=1");
	}
}
    else
		header("Location:index.php?n=5&teacher=1");
  }
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
		header("location:index.php?n=8");
	}
}
}
if(isset($_POST['submit_t']))
{
  
if(!empty($_POST['rName']))   
{
	$query = mysqli_query($conn,"SELECT *  FROM teacher_info WHERE aadhar_no='".$_POST['rName']."' AND Password = '".$_POST['pass']."'");
	$row = mysqli_fetch_row($query);
	$num = mysqli_num_rows($query);
	if($num>0)
	{
		$_SESSION['aadhar_no'] = $row[0];
		header("location:front.php");
	}
	else
	{
		header("location:index.php?n=0&teacher=1");
	}
}
}
			
?>