<html>
<title>VCNET</title>
<head>
<link rel="stylesheet" href="styles.css">
<link rel="script" href="script.js">
</head>
<body>
<div class="navbar">
  <a href="action_page.php?action=logout">LogOut</a> 
</div>
<!--<table>
<th>Name</th><th>Status</th><th>Chating</th><tr><td>vignesh</td><td>Online</td><td><input type="submit" value="chat"></td></tr>
<tr><td>Mani</td><td>Offline</td><td><input type="submit" value="chat"></td></tr>
</table>-->
<?php
session_start();
	include ('dbconfig/dbconfig.php');
	// $str= "<form action='reg_action_page.php' method='post'>
	$str ="<div><table>";
	$str.=  "<th>Name</th><th>Status</th><th>Chating</th>";
	$conn=OpenCon();
	$un=$_SESSION["Username"];
	$query="select * from reg_tbl where username !='$un'";
	$selquery=mysqli_query($conn,$query);
	while($arr=mysqli_fetch_assoc($selquery))
    {
		
	$un=$arr['username'];
	$str.=  "<tr><td>";
	$str.=  $arr['username'];
	if($arr['temp']=="0")
	$str.=  "</td><td>Online</td>";
else 
	$str.=  "</td><td>Offline</td>";
	$str.= "<td><input type='hidden' id='action' name='action' value='$un'><button onclick='myFunction($un)'>chat</button ></td></tr>";
	
	}
$str.=  "</table></div>";
//$str.="</form>";
mysqli_close($conn);
echo $str; 

?>
<script>
function myFunction(usnamevalue) 
{	
	location.href='action_page.php?action=getMsg&usname='+usnamevalue;  
}
</script>
</body>
</html>