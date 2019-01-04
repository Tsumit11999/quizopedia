<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
   <title>
      
   </title>
		
		<link rel="stylesheet" type="text/css" href="tcstyle.css">
		<link rel="stylesheet" type="text/css" href="hai.css">

		</head>

<body>
	
    
	    <div class="navbar">
  
   <a class="active" href="front.php"><i class="fa fa-fw fa-home"></i> Home</a>  
   <a href="#"><i class="fa fa-fw fa-search"></i> Users</a>
  <button id="Btn"><i class="fa fa-fw fa-user"></i> Create Quiz</button>
  <?php 
   if(@$_GET['subject_code'])
   {
  ?>
   <a href="result.php"><i class="fa fa-fw fa-envelope"></i> Result</a>
   <a href="rank.php"><i class="fa fa-fw fa-search"></i> Rank </a>
   <?php
   }
   ?>
  <a href="add.php?logout=1"><i class="fa fa-fw fa-search log"></i>Logout</a>
  
</div>
<div id="Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   
    <form action="add.php" method="post" style="max-width:500px;margin:auto">
	<h2>Quiz Details</h2>
        <div class="input-container">
          <i><img src="usericon.jpg" width="30px" height="30px"></i>
    <input type="text" name="Name" placeholder="Enter the subject Name" ></br>
	</div>
	 <div class="input-container">
            <i><img src="emailicon.jpg" width="30px" height="30px"></i>
	<input type="text" name="subject_code" placeholder="Enter the Subject Code" ></br>
	</div>
	 <div class="input-container">
            <i><img src="emailicon.jpg" width="30px" height="30px"></i>
	<input type="number" name="ques_mark" placeholder="Enter the marks Every Queston have"></br>
	</div>
	 <div class="input-container">
            <i><img src="emailicon.jpg" width="30px" height="30px"></i>
    <input type="number" name="neg mark" placeholder="Enter the negative marks without sign"></br>
	</div>
    <input type="submit" name="upload">	
      </form></div></div>

<script>
    // Get the modal
      
        var modal = document.getElementById('Modal');
        
        // Get the button that opens the modal
        var btn = document.getElementById("Btn");
        
        var span = document.getElementsByClassName("close")[0];
        // Get the button that opens the modal
       
        btn.onclick = function() {
            modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
        
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        // When the user clicks on <span> (x), close the modal
            
        </script>

		
	</body>
</html>