<?php
session_start();
if(isset($_SESSION['aadhar_no'])){
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="quizkicss.css">
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
			<div class="col-sm-12">
<div style="display:block;height:100%;background-color:#f0ffff;position:fixed!important;overflow:auto;display:block;padding:8px 16px;text-align:left;white-space:normal;position:relative;z-index:3;
width:16%;left:0;">
  <div style="margin-bottom:150px;">
 
  <ol>
  <?php
  include('login.php');
  
         $queryx="select * from question where subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."'";
          $resultx=mysqli_query($conn,$queryx);
			if(mysqli_num_rows($resultx)>0){
			 for($i=1;$i<=mysqli_num_rows($resultx);$i++){
 ?>

<?php
 echo "<form action='add.php?subject_code=".@$_GET['subject_code']."' method='post'>";
 ?>
 <input type="hidden" value="<?php echo $i; ?>" name="qid" >
 <?php echo $i; ?>.<input type='submit' class="z w3-bar-item w3-button" value=' Question ' name='clickq'>
 </form>
 
 <?php
  }
  }
 ?>
 <?php
 echo "<form action='add.php?subject_code=".@$_GET['subject_code']."' method= 'post'>";
 echo "<input type='submit' class='z w3-bar-item w3-button' value=' Add ' name='load'></form>";
 ?>
  </div>
  <div style="margin-bottom:150px">

  
  </div>
</div>
			<div class="col-sm-10" id="quiz" style="margin-left:17%;">
				<br/>
				<br/>
				<br/>
				<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8 well" id="que">
				<center>
				<?php
				include('login.php');
				$query1="select * from question where id='".$_SESSION['count']."' and subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."'";
                    $result1=mysqli_query($conn,$query1);
                     $rowsq=mysqli_fetch_row($result1);
					 $query2="select * from answer where id='".$_SESSION['count']."' and subject_code='".@$_GET['subject_code']."' and aadhar_no='".$_SESSION['aadhar_no']."'";
                    $result2=mysqli_query($conn,$query2);
                     $rowsa=mysqli_fetch_row($result2);
				if(!$_SESSION['count']==0){
				if(isset($_POST['edit'])){
				
							echo "<form action='add.php?subject_code=".@$_GET['subject_code']."' method='post'>";
								?>	<div><input type="text" class="form-control" style="height:110px;" value="<?php echo $rowsq[1]; ?>" name="question"> </div>
						<table class="table">
							<tr>
								<td class="danger"><input type="text" class="form-control" name="ans1" value="<?php echo $rowsa[1]; ?>"></td>
								<td class="danger"><input type="text" class="form-control" name="ans2" value="<?php echo $rowsa[2]; ?>"></td>
							</tr>
							<tr>
								<td class="danger"><input type="text" class="form-control" name="ans3" value="<?php echo $rowsa[3]; ?>"></td>
								<td class="danger"><input type="text" class="form-control" name="ans4" value="<?php echo $rowsa[4]; ?>"></td>
							</tr>
						</table>
							<input type="number" class="form-control" name="correct_answer" value="<?php  echo $rowsq[2]; ?>">
				</center><br/>
				<div class="pull-right">
				<input type="submit" class="btn btn-warning" name="update" value="Update"></form>
				<?php
				}
				else{
				
			
				echo "<form action='index.php?subject_code=".@$_GET['subject_code']."' method='post'>";
								?>	<div><input type="text" class="form-control" style="height:110px;" placeholder="<?php echo $rowsq[1]; ?>" name="question"> </div>
						<table class="table">
							<tr>
								<td class="danger"><input type="text" class="form-control" name="ans1" placeholder="<?php echo $rowsa[1]; ?>"></td>
								<td class="danger"><input type="text" class="form-control" name="ans2" placeholder="<?php echo $rowsa[2]; ?>"></td>
							</tr>
							<tr>
								<td class="danger"><input type="text" class="form-control" name="ans3" placeholder="<?php echo $rowsa[3]; ?>"></td>
								<td class="danger"><input type="text" class="form-control" name="ans4" placeholder="<?php echo $rowsa[4]; ?>"></td>
							</tr>
						</table>
							<input type="number" class="form-control" name="correct_answer" placeholder="<?php  echo $rowsq[2]; ?>">
				</center><br/>
				<div class="pull-right">
				<input type="submit" class="btn btn-warning" name="edit" value="Edit"></form>
				<?php
				}
				}
				else{
				?>
				<?php
				echo "<form action='add.php?subject_code=".@$_GET['subject_code']."' method='post'>";
				?>
				<div><input type="text" class="form-control" style="height:110px;" placeholder="Enter the Question" name="question"> </div>
						<table class="table">
							<tr>
						
								<td class="danger "><input type="text" class="form-control" name="ans1"placeholder="Option A"></td>
								<td class="danger"><input type="text" class="form-control" name="ans2"placeholder="Option B"></td>
							</tr>
							<tr>
								<td class="danger"><input type="text" class="form-control" name="ans3"placeholder="Option C"></td>
								<td class="danger"><input type="text" class="form-control" name="ans4"placeholder="Option D"></td>
							</tr>
						</table>
							<input type="number" class="form-control" name="correct_answer" placeholder="Enter correct answer">
				</center><br/>
				<div class="pull-right">
				<input type="submit" class="btn btn-warning" name="Add" value="Add"></form>
				</div>
				<div class="col-sm-2"></div>
				<?php
				}
				?>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="row">
				<div class="col-sm-6 footer" style="text-align:center;">
				Copyright &copy; 2018 - 2019 To <a href="http://reck.ac.in">Rajkiya Engineering College,Kannauj</a>. All Rights Reserved.
				</div>
				<div class="col-sm-6 footer" style="text-align:center;">
					Designed By: Technical Club
				</div>
			</div>
		</div>

  </body>
</html>

<?php
}
else
	header("Location:index.php");
?>