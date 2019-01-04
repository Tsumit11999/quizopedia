<?php
session_start();
include('login.php');
if(isset($_POST['clickq'])){
	$_SESSION['count']=$_POST['qid'];
	header('Location:page.php?subject_code='.@$_GET['subject_code'].'');
}
if(isset($_POST['load'])){
	$_SESSION['count']=0;
	header('Location:page.php?subject_code='.@$_GET['subject_code'].'');
}
if(isset($_POST['Add'])){
	$query="select * from question where subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."'";
       $result=mysqli_query($conn,$query);
	   $num_row=mysqli_num_rows($result);
	   $num_row+=1;
	   $query5="insert into question (id,ques,correct_answer,subject_code,aadhar_no) values ('".$num_row."','".$_POST['question']."','".$_POST['correct_answer']."','".@$_GET['subject_code']."','".$_SESSION['aadhar_no']."')";
	   mysqli_query($conn,$query5);
	   $query6="insert into answer (id,ans1,ans2,ans3,ans4,subject_code,aadhar_no) values ('".$num_row."','".$_POST['ans1']."','".$_POST['ans2']."','".$_POST['ans3']."','".$_POST['ans4']."','".@$_GET['subject_code']."','".$_SESSION['aadhar_no']."');";
	   mysqli_query($conn,$query6);
	   header('Location:page.php?subject_code='.@$_GET['subject_code'].'');
   }
 if(isset($_POST['update'])){
	   $query5="update question set ques='".$_POST['question']."',correct_answer='".$_POST['correct_answer']."' where id='".$_SESSION['count']."' and subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
	   mysqli_query($conn,$query5);
	   $query6="update answer set ans1='".$_POST['ans1']."',ans2='".$_POST['ans2']."',ans3='".$_POST['ans3']."',ans4='".$_POST['ans4']."' where id='".$_SESSION['count']."' and subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
	   mysqli_query($conn,$query6);
	   header('Location:page.php?subject_code='.@$_GET['subject_code'].'');
  }
  if(isset($_POST['upload'])){
	  $query2="insert into quiz_name(Name,subject_code,ques_mark,neg_mark,aadhar_no) values ('".$_POST['Name']."','".$_POST['subject_code']."','".$_POST['ques_mark']."','".$_POST['neg_mark']."','".$_SESSION['aadhar_no']."')";
	  mysqli_query($conn,$query2);
	  header('Location:front.php');
  }
  if(@$_GET['logout']){
	session_destroy();
	header("Location:index.php");
}

?>