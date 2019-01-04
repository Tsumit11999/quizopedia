<?php
session_start();
include('login.php');
if(isset($_SESSION['roll_no'])){
$query="select * from question where id='".@$_GET['n']."' and subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
$result=mysqli_query($conn,$query);
$rowq=mysqli_fetch_row($result);
$query2="select * from answer where id='".@$_GET['n']."' and subject_code='".@$_GET['subject_code']."' and  aadhar_no='".$_SESSION['aadhar_no']."';";
$result2=mysqli_query($conn,$query2);
$rowa=mysqli_fetch_row($result2);
$query9="select * from question where subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."';";
$result9=mysqli_query($conn,$query9);
$num=mysqli_num_rows($result9);
?>
<!DOCTYPE html>
<html>
<title>ONLINE QUIZ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="quizkicss.css">

<style>
.er{column-count: 2}
.headji{background-color: #009900}
.leftrightji{background-color: #b0b0b0}
.w3-theme {color:#fff !important;background-color:#4CAF50 !important}
.w3-btn {background-color:#4CAF50;margin-bottom:4px}
.w3-code{border-left:4px solid #4CAF50}
.myMenu {margin-bottom:150px}
.hearder-line{display: flex;width: 100%;align-items: center;font-size: 50px;}
.hearder-line::before,
.hearder-line::after{content: "";border:solid gray;border-width: .05em 0;height: .1em;margin: .2em;flex: 1;font-size: 50px;}
</style>
<script type="text/javascript">
 function timeout()
 {
	 var minute=Math.floor(timeleft/60);
	 var second=timeleft%60;
	 if(minute<10)
		 minute=0+""+minute;
	 if(second<10)
		 second=0+""+second;
	 if(timeleft<=0)
	 {
		 clearTimeout(tm);
		 document.getElementById("khalipa").submit();
	 }
	 else
	 {
		 document.getElementById("time").innerHTML=minute+":"+second;
	 }
	 timeleft--;
	 var tm=setTimeout(function(){timeout()},1000);
 }
</script>
<body onload="if(history.length>0)history.go(+1);timeout()">
<!-- Top -->
<div style="width:100%;z-index:1;top:0; color:#009900;"id="headji">
 
  <div class=" w3-padding" >
        <header ><h1 class="hearder-line" style="color:#009900;"><b>Quizopedia</b></h1></header>
  </div>

</div>

<!-- Sidebar -->
<div class="question_bar">

  <div style="margin-bottom:150px;">
 
  <ol>
  <?php 
  for($i=1;$i<=$num;$i++){
	   ?>
  <li>
  <form action='stu_add.php?subject_code=<?php echo @$_GET['subject_code'];?>' method= 'post'>
  <input type='hidden' value='<?php echo $i;?>' name='clickq'>
  <input type='submit' class='z w3-bar-item w3-button' value='Question' name='question'>
  </form>
  </li>
  <?php
  }
  ?>
  </ol>
  </div>
  <div style="margin-bottom:150px">

  
  </div>
</div>
<div class="w3-main  " style="background-color:#ffffff; border:2px; margin-left:40px; height:375px; margin-right:17%">
<div class=" w3-container " style="background-color:#f0f8ff; height:100px margin-left:0px; padding:0.01em 16px;">
<h2 style="font-size:40px; font:calibri;"><b>
<?php
  echo $_SESSION['Name'];
?></b>
<script type="text/javascript">
 var timeleft=2*60;
</script>

<div id="time" style="float:right;background-color:#dcdcdc;border:2px #f0ffff; border-radius:8px;padding-left:8px; padding-right:8px; color: magenta;"></div></h2>

</div>
 
<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible 


  
  <p class="w3-large x" style="pading:20px;">    -->
    <div class="w3-padding w3-light-grey y w3-panel w3-padding-large w3-card-4 w3-light-grey x" style="margin:25px;">
        <p></b> <?php echo $rowq[1];?></b> </p>
        <form id="khalipa" action='stu_add.php?subject_code=<?php echo @$_GET['subject_code'];?>&n=<?php echo @$_GET['n'];?>' method='post'>
        <input type="hidden" name="starttime" value="10/5/2018 1:51:15 PM">
        
<div class='er'>       
 <label><div class='radio' style="width:400px;height:60px;padding:10px;margin-left:40px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px; padding-right:30px;"><input type='radio' name='ans' id='1' value='1' /><?php echo $rowa[1];?></div></label>
        <label><div class='radio'style="padding:10px; width:400px;height:60px;margin-left:40px;margin-top:10px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px;"><input type='radio' name='ans' id='2' value='2' /><?php echo $rowa[2];?></div></label>
        
	<label>	<div class='radio'style="padding:10px;width:400px;height:60px;margin-left:40px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px;"><input type='radio' name='ans' id='3' value='3' /><?php echo $rowa[3];?></div></label>
        <label><div class='radio'style="padding:10px;width:400px;height:60px;margin-left:40px;margin-top:10px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px;"><input type='radio' name='ans' id='4' value='4' /><?php echo $rowa[4];?></div></label>
</div> 
       <br>
	     <input type='submit' class="z"  value=' Submit ' name='submited'>
        <input type='submit' class="z"   value=' Skip ' name='subnext'>
        
        </form>
    </div>
    
  </div>
</div>
</div>
</div>

<footer class="w3-panel w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity" style="bottom:0px;margin-right:14%;  " >
  <p>
  <a href="http://reck.ac.in/" target="_blank">RAJIKYA ENGINEERING COLLEGE</a> 
  <br><h3 style="margin-top:1px">technical club</h3>
  </p>
</footer>

<!-- END MAIN -->
</div>



</body>
</html>
<?php
}else
	header("Location:home.html");
?>