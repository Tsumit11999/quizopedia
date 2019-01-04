<?php
session_start();
include('login.php');
$_SESSION['roll_no']=223444;
$_SESSION['key']='student';
$query="select * from available_quiz;";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
$_SESSION['aadhar_no']=$row[2];
$_SESSION['Name']=$row[0];
echo "<a href='quiz_next.php?subject_code=".$row[1]."&n=1'>".$row[0]."</a>";

?>