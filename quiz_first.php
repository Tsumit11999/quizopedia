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
<body>
<!-- Top -->
<div style="width:100%;z-index:1;top:0; color:#009900;"id="headji">
 
  <div class=" w3-padding" >
        <header ><h1 class="hearder-line" style="color:#009900;"><b>Quizopedia</b></h1></header>
  </div>
   <?php
 session_start();
  include('login.php');
		$conn=mysqli_connect($hostname,$uname,$password,$permanant);
            $query="select * from quiz;";
			
            $resul=mysqli_query($conn,$query);
			 
             $rows=mysqli_fetch_row($resul);
			 $_SESSION['Name']=$rows[0];
			 $_SESSION['count']=0;
		
	
  mysqli_close($conn);
  ?>

</div>

<!-- Sidebar -->
<div  style="display:block;height:100%;background-color:#f0ffff;position:fixed!important;overflow:auto;display:block;padding:8px 16px;text-align:left;white-space:normal;position:relative;animation:animateright 0.4s;z-index:3;
width:16%;right:0;">

  <div style="margin-bottom:150px;">
 
  <ol>
 <li><form action='quiz_first.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question1'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question2'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question3'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question4'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question5'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question6'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question7'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question8'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question9'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question10'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question11'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question12'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question13'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question14'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question15'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question16'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question17'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question18'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question19'></form></li>
 <li><form action='quiz_next.php' method= 'post'><input type='submit' class="z w3-bar-item w3-button"value=' Question ' name='question20'></form></li>
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
  ?></b></h2>

</div>
 
<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible 


  
  <p class="w3-large x" style="pading:20px;">    -->
    <div class="w3-padding w3-light-grey y w3-panel w3-padding-large w3-card-4 w3-light-grey x" style="margin:25px;>
        <p style="text-align:tatti;"><b>
		<?php
		include('login.php');
		$_SESSION['count']=1;
		$conn=mysqli_connect($hostname,$uname,$password,$_SESSION['Name']);
  
        $query="select * from question where id='".$_SESSION['count']."';";
        $result=mysqli_query($conn,$query);
  
        $rows=mysqli_fetch_row($result);
        echo $rows[0];
        echo '-';
        echo $rows[1]; 
        mysqli_close($conn);
       
		?></b></p>
        <form  name="quizform" action='quiz_next.php' method='post'>
        <input type="hidden" name="starttime" value="10/5/2018 1:51:15 PM">
        <input type="hidden" name="answers" value="0000000000000000000000000000000000000000" size="25">
        <input type="hidden" name="qnumber" value="1" size="25">
<div class='er'>       
 <label><div class='radio' style="width:400px;height:60px;padding:10px;margin-left:40px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px; padding-right:30px;"><input type='radio' name='quiz' id='4' value='4' />
 		<?php
 include('login.php');
		$conn=mysqli_connect($hostname,$uname,$password,$_SESSION['Name']);
  
        $query="select * from answer where id='".$_SESSION['count']."';";
        $result=mysqli_query($conn,$query);
  
        $rows=mysqli_fetch_row($result);
 
        echo $rows[1]; 
        mysqli_close($conn);
 
 ?></div></label>
        <label><div class='radio'style="padding:10px; width:400px;height:60px;margin-left:40px;margin-top:10px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px;"><input type='radio' name='quiz' id='3' value='3' />
				<?php
 include('login.php');
		$conn=mysqli_connect($hostname,$uname,$password,$_SESSION['Name']);
  
        $query="select * from answer where id='".$_SESSION['count']."';";
        $result=mysqli_query($conn,$query);
  
        $rows=mysqli_fetch_row($result);
 
        echo $rows[2]; 
        mysqli_close($conn);
 
 ?></div></label>
        
	<label>	<div class='radio'style="padding:10px;width:400px;height:60px;margin-left:40px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px;"><input type='radio' name='quiz' id='2' value='2' />
	<?php
 include('login.php');
		$conn=mysqli_connect($hostname,$uname,$password,$_SESSION['Name']);
  
        $query="select * from answer where id='".$_SESSION['count']."';";
        $result=mysqli_query($conn,$query);
  
        $rows=mysqli_fetch_row($result);
 
        echo $rows[3]; 
        mysqli_close($conn);
 
 ?></div></label>
        <label><div class='radio'style="padding:10px;width:400px;height:60px;margin-left:40px;margin-top:10px;border:4px solid white;background-color:white; border-radius:10px;font-size:20px;"><input type='radio' name='quiz' id='1' value='1' />
				<?php
 include('login.php');
		$conn=mysqli_connect($hostname,$uname,$password,$_SESSION['Name']);
  
        $query="select * from answer where id='".$_SESSION['count']."';";
        $result=mysqli_query($conn,$query);
  
        $rows=mysqli_fetch_row($result);
 
        echo $rows[4]; 
        mysqli_close($conn);
 
 ?></div></label>
</div> 
       <br>
	     <input type='submit' class="z"value=' Submit ' name='submit'>
        <input type='submit' class="z"value=' Next ' name='subnext'>
        
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