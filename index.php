<html>
<head>
	<title> login </title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
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
<?php
if(@$_GET['teacher'])
{
?>
<body>
<?php
if(@$_GET['n']==1)
	echo "Registered successfully... Please login here....";
if(@$_GET['n']==0)
	echo "Please signup first....";
if(@$_GET['n']==2)
	echo "You have already registered ... Please login here....";
if(@$_GET['n']==5)
    echo "you are not a adimn .. So you cant signup here";
?>
	<div class="login-block">
	<img src="multi_admin.jpg" class="multi_admin">
	<h1>LOGIN HERE</h1>
	<form method="POST" action="stu_add.php">
	<p>AAdhar_no</p>
	<input type="int" name="rName" placeholder="Enter Roll number" size="40" >
	<p>Password</p>
	<input type="password" name="pass" placeholder="Enter password" size="40" >
	<input type="submit" name="submit_t" value="Log-in">
	</form>

	<button id="Btn">Signup</button>
	<a href="index.php">Login as a Student</a>
	</div>

<!-- The Modal -->
<div id="Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   
    <form action="stu_add.php" method='post' style="max-width:500px;margin:auto" >
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
        <input type="submit" class="btn"  name='subt' value='Register'>
      </form>
    
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('Modal');
var btn = document.getElementById("Btn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    
    </script>
</body>
<?php
}
else{
?>
<body>
<?php
if(@$_GET['n']==1)
	echo "Registered successfully... Please login here....";
if(@$_GET['n']==0)
	echo "Please signup first....";
if(@$_GET['n']==2)
	echo "You have already registered ... Please login here....";
if(@$_GET['n']==8)
	echo "Wrong user Name or Password";
?>
	<div class="login-block">
	<img src="multi_admin.jpg" class="multi_admin">
	<h1>LOGIN HERE</h1>
	<form method="POST" action="stu_add.php">
	<p>Roll number</p>
	<input type="int" name="rName" placeholder="Enter Roll number" size="40" >
	<p>Password</p>
	<input type="password" name="pass" placeholder="Enter password" size="40" >
	<input type="submit" name="submit" value="Log-in">
	</form>

	<button id="Btn">Signup</button>
	<a href="index.php?teacher=1">Login as a Teacher</a>
	</div>

<!-- The Modal -->
<div id="Modal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   
    <form action="stu_add.php" method='post' style="max-width:500px;margin:auto" >
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
<script>
// Get the modal
var modal = document.getElementById('Modal');
var btn = document.getElementById("Btn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    
    </script>
	
</body>
<?php
}
?>
</html>
