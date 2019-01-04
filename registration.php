<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}
.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}


.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>
<?php
if(@$_GET['n']==3)
 echo "Pllease submit all the informaton";	
?>

<button id="sBtn">Student Registration</button>

<!-- The Modal -->
<div id="sModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   
    <form action="connectivity-sign-up.php" method='post' style="max-width:500px;margin:auto" >
        <h2>Student Registeration Form</h2>
        <div class="input-container">
          <i><img src="usericon.jpg" width="30px" height="30px"></i>
          <input class="input-field" type="text" placeholder="Username" name="name">
        </div>
      
        <div class="input-container">
            <i><img src="emailicon.jpg" width="30px" height="30px"></i>
          <input class="input-field" type="text" placeholder="Email" name="email">
        </div>
		<div class="input-container">
            <i><img src="emailicon.jpg" width="30px" height="30px"></i>
          <input class="input-field" type="text" placeholder="Roll_no" name="rName">
        </div>
        
        <div class="input-container">
            <i><img src="passicon.png" width="30px" height="30px"></i>
          <input class="input-field" type="password" placeholder="Password" name="pass">
        </div>
        <div>
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> i hereby accept the terms and conditions
          </label></div>
        <input type="submit" class="btn"  name='subs' value='Register'>
      </form>
    
  </div>

</div>


<button id="tBtn">Teacher Registration</button>
<?php 
if(@$_GET['n']==5)
echo "you are not a adimn .. So you cant signup here";
?>

<!-- The Modal -->
<div id="tModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   
    <form action="connectivity-sign-up.php" method='post' style="max-width:500px;margin:auto" >
        <h2>Teacher Registeration Form</h2>
        <div class="input-container">
          <i><img src="usericon.jpg" width="30px" height="30px"></i>
          <input class="input-field" type="text" placeholder="Username" name="name">
        </div>
      
        <div class="input-container">
            <i><img src="emailicon.jpg" width="30px" height="30px"></i>
          <input class="input-field" type="text" placeholder="Email" name="email">
        </div>
        <div class="input-container">
            <i><img src="passicon.png" width="30px" height="30px"></i>
          <input class="input-field" type="password" placeholder="AAdhar_no" name="aadhar_no">
        </div>
        <div class="input-container">
            <i><img src="passicon.png" width="30px" height="30px"></i>
          <input class="input-field" type="password" placeholder="Password" name="pass">
        </div>
        
        <div class="input-container">
            <i><img src="subicon.png" width="30px" height="30px"></i>
          <input class="input-field" type="password" placeholder="Admin code" name="code">
        </div>
        <div>
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> i hereby accept the terms and conditions
          </label></div>
        <input type="submit" name='subt'class="btn" va;ue='Register'>
      </form>
    
  </div>

</div>

<script>
// Get the modal
var amodal = document.getElementById('tModal');

    var bmodal = document.getElementById('sModal');
    
    // Get the button that opens the modal
    var bbtn = document.getElementById("sBtn");
    
    var bspan = document.getElementsByClassName("close")[0];
    // Get the button that opens the modal
var abtn = document.getElementById("tBtn");

var aspan = document.getElementsByClassName("close")[0];

abtn.onclick = function() {
    amodal.style.display = "block";
}

// Get the modal

    bbtn.onclick = function() {
        bmodal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    bspan.onclick = function() {
        bmodal.style.display = "none";
    }
    
    window.onclick = function(event) {
        if (event.target == bmodal) {
            bmodal.style.display = "none";
        }
    }
	abtn.onclick = function() {
        amodal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
aspan.onclick = function() {
    amodal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == amodal) {
        amodal.style.display = "none";
    }
}
    
    </script>
    

</body>
</html>
