<?php
session_start();
include("login.php");
$query="select * from available_quiz;";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_row($result);
$_SESSION['aadhar_no']=$row[2];
?>
<html>
<title>THINKER PLACE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\index-ki-css.css">


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<style>
#one {
 border: 2px solid GREY;list-style-type: none; padding: 0.5px;overflow: hidden;background-color: #778899;border-radius: 5px;font-size:17px;   }
#two {background-color: #c0c0c0;font-size:15px;border-radius: 5px; padding: 5px; list-style-type: none;overflow:hidden; }
li {float: left;}

li a, .dropbtn { display: inline-block;color: WHITE;text-align: center; padding: 14px 16px;   text-decoration: bold;}
li a:hover, .dd:hover .dropbtn {background-color: #778899;margin-right:2px;}
li.dd {display: inline-block;}
.hearder-line{display: flex;width: 100%;align-items: center;font-size: 50px;}
.hearder-line::before,
.hearder-line::after{content: "";border:solid gray;border-width: .05em 0;height: .1em;margin: .2em;flex: 1;font-size: 50px;}
</style>
</head>

<div class=" r-padding" >
  <header ><h1 class="hearder-line" style="color:rgb(50, 17, 236);"><b>Quizopedia</b></h1></header>
</div>


	
<!-- Page Container -->
<div class="r-container r-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="r-row">
    <!-- Left Column -->
    <div class="r-col m3">
      <!-- Profile -->
      <div class="r-card r-round r-white">
        <div class="r-container">
         <h4 class="r-center">My Profile</h4>
         <p class="r-center"><img src="profile.jpg" ><style="height:106px;width:106px" alt="photo"></p>
         <hr>
<ul id="two">
<?php 
 echo "<li>".$_SESSION['Name']."</li>"; 
  echo "<li>".$_SESSION['roll_no']."</li>";  
   ?>
</ul>
        </div>
      </div>
      <br>
      

      <br>
 
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
         <div class="r-col m7">
         <div class="r-row-padding">
        <div class="r-col m12">
          <div class="r-card r-round r-white">
            <div class="r-container r-padding">
 <a href"#"><h2 class="r-opacity" style=" text-align:center;"><br>Available Quiz </h2>
   
             <?php
			 echo "<a href='quiz_next.php?subject_code=".$row[1]."&n=1'>".$row[0]."</a>";
			 ?>
             </div></div></div></div>
         

    <!-- column  2-->

<!--footer-->
<div class="r-footer">
 <p><a href="#"_blank"> Rajjikya Engineering College </a>  Powered by <a href="#"_blank">Tech club</a><p>
</div>



</body>
</html> 
