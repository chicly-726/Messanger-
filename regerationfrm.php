<html>
<title>VCNET</title>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="script" href="script.js">

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>

</head>
<body>
<div class="navbar">
  <a href="index.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Back</a>
  <a href="regerationfrm.php">Create Account</a>
  <!--<a href="#contact">Contact</a>-->
</div>

<!--<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>-->

<div class="container">
  <form action="action_page.php" enctype="multipart/form-data" method="post">
  <div class="row">
      <div class="col-25">
        <label for="title"><h3>Registration</h3></label>
      </div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name..">
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="lname">E-Mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your mail address..">
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="lname">User Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="uname" name="uname" placeholder="Your user name..">
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="rfmpassword" name="rfmpassword" placeholder="Your password..">
	
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="lname">Re-Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="erlname" name="repassword" placeholder="Your password..">
      </div>
    </div>
	 <div class="row">      
      <div class="col-75">
        <input type="hidden" name="action" value='newuserReg'>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>


