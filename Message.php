<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="script" href="script.js">
<style>

/*body {
  margin: 0 auto;
  max-width: 400px;
  padding: 0 20px;
}*/

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}
.time-center {
  float: center;
  color: #aaa;
}
.time-left {
  float: left;
  color: #999;
}


</style>
</head>
<div class="navbar">  
  <a href="vcmsg.php">Back</a>
  <!--<a href="#contact">Contact</a>-->
</div>
<body>
<?php
session_start();
$un=$_SESSION["Username"];
$uninfo=$_REQUEST['userMsg'];
?>
<h2>Chat Messages</h2>
<form  action="action_page.php" method="post">
<?php
include ('dbconfig/dbconfig.php');
$conn=OpenCon();
	$un=$_SESSION["Username"];
	$str="";
	$query="select * from msginfo where username ='$un' || username ='$uninfo' order by time";
	$selquery=mysqli_query($conn,$query);
	while($arr=mysqli_fetch_assoc($selquery))
    {
		if($arr['username']==$un)
		{
			$str.="<div class='container'>";
		$str .="<img src='Images/login.jpg' alt='".$arr['username']."' class='right' style='width:100%;'>";
		$str .="<p>".$arr['msg']."</p>";
		$str .="<span class='time-right'>".$arr['time']."</span>";
		$str .="</div>";
		}
		else
		{
		$str .="<div class='container'>";
		$str .="<img src='Images/login.jpg' alt='".$arr['username']."' style='width:100%;'>";
		$str .="<p>".$arr['msg']."</p>";
		$str .="<span class='time-right'>".$arr['time']."</span>";
		$str .="</div>";
		
		}
		
	}
	echo $str;
?>
<div class="container darker">
 <input type="hidden" name="action" value='messageinfo'>
  <input type="hidden" name="useinfo" value=<?php echo $uninfo?>>
 <textarea cols='45' rows='3' name='msgboxinfo' autofocus/> </textarea>
 <input type="submit" value="send"/>
 
</div>
</form>
</body>
</html>
