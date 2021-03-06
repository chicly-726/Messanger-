<html>
<title>VCNET</title>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="script" href="script.js">

<style>
* {
  box-sizing: border-box;
}

input[type=textarea], select, textarea {
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
 
  width: 75%;
  margin-top: 6px;
}

.col-75 {
 
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
  <a href="default.php">Home</a>
  <!--<a href="#contact">Contact</a>-->
</div>
<div class="container">
  <form action="reg_action_page.php" enctype="multipart/form-data" method="post">
  <div class="row">
      <div class="col-25">
        <label for="title"><h3>Registration</h3></label>
      </div>
	</div>
    <div class="row">     
      <div class="col-25">
        <input type="textarea" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
	<div class="row">     
      <div class="col-75">
        <input type="textarea" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
  
	 <div class="row">      
      <div class="col-75">
        <input type="hidden" name="action" value='reg'>
      </div>
    </div>   
  </form>
</div>
</body>
</html>


