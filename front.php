<?php
 session_start();
 $_SESSION['aadhar_no']=123;
 if(isset($_SESSION['aadhar_no'])){
 $_SESSION['count']=0;
 			include('login.php');
	     		
		    $query="select * from quiz_name where aadhar_no='".$_SESSION['aadhar_no']."';";
			$result=mysqli_query($conn,$query);
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>RECK</title>
	<style>
	a{
		color:#8B8B8B;
	}
	.header-line{display: flex;width: 100%;align-items: center;font-size: 50px;}
	.header-line::before,
	.header-line::after{content: "";border:solid gray;border-width: .05em 0;height: .1em;margin: .2em;flex: 1;font-size: 50px;}
	.footer
{
    font: 400 16px/22px '7';
    background-color:#333;
	color:#fff;
	padding:10px 0px;
}
.footer a
{
	text-decoration:none;
	color:#63bc46;
}
.footer a:hover
{
	text-decoration:none;
	color:#fff;
}
#que{
	box-shadow:10px 10px gray;
}
.box{
	margin:10px;
	height:250px;
	width:250px;
	background-color:skyblue;
	border-radius:50%;
	box-shadow:0px 10px 10px gray;
}
	</style>
  </head>
      <body>
	 
		 <div class="container-fluid">
			<div class="row"  style="background-color:#b0b0b0;">	
				<div class="col-sm-12 header-line">
				<center>
					<h1 class="hearder-line" style="color:#009900;font-size: 50px;"><b>Quizopedia</b></h1>
					
				</center>
				</div>
				
			</div>
			<?php include('nav.php');?>
			
			<div class="row" >
				<div class="container">
				<div class="row" >
					<?php
					if(mysqli_num_rows($result)>0){
			        for($i=0;$i<mysqli_num_rows($result);$i++){
				    $rows=mysqli_fetch_row($result);
					$queryx="select * from question where subject_code='".$rows[1]."' and aadhar_no='".$_SESSION['aadhar_no']."'";
                    $resultx=mysqli_query($conn,$queryx);
					$num=mysqli_num_rows($resultx);
					?>
					<?php
					
					echo "<a href='page.php?subject_code=".$rows[1]."'><div class='col-sm-3 box'>";
					
					echo "<h2>".$rows[0]."</h2>";
					
                    echo "<p>It has ".$num." Questions.</br>";

                    echo "    Every Question is of ".$rows[2]." Marks.</br>";

                    echo "       And -".$rows[3]." Marks on Wrong Answer.</br> </p>";					
					
					echo "</div></a>";
					?>
				
					<?php
			 }
			}
			else
				echo "You have NO Qiuzes";
			?>
					
					
				</div>
				</div>
			</div>
				
				<!-- The Modal -->

			
		</div>
	  
      </body>

</html>
<?php
}else
	header("Location:index.php");
?>