<?php
// Start the session
session_start();
?>
<html>
<title>VCNET</title>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="script" href="script.js">
</head>
<body>
<div class="navbar">
  <a href="#home" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
  <a href="regerationfrm.php">Create Account</a>
  <!--<a href="#contact">Contact</a>-->
</div>
<div id="id01" class="modal">  
  <form class="modal-content animate" action="action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Images/login.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
         <input type="hidden" name="action" value='authentication'>
      <button type="submit" >Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     <!-- <span class="psw">Forgot <a href="#">Password?</a></span>-->
    </div>
  </form>
</div>
</body>
</html>
