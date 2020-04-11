<?php
session_start();
$action=$_REQUEST['action'];
switch($action)
{
	case 'newuserReg':
	registertabl();
	break;
	case 'authentication':
	login_authentication();
	break;
	case 'chatbox':
	displayUser();
	break;
	case 'messageinfo':
	send_View_Message();
	break;		
	case "getMsg":
	Display_Old_Message();
	break;
	case "edit":
	admin_edit_userDetails();
	break;
	case "Insertregtbl":
	admin_New_user_Reg();
	break;
	case "logout":
	Logout();
	break;
}
function admin_edit_userDetails()
{
	//echo "test";
	$getinfo=explode("|",$_REQUEST['info']);
	include ('dbconfig/dbconfig.php');	
	$conn=OpenCon();
	$uname=$getinfo[2];
	echo $query="delete from reg_tbl where username='$uname'";
	$selquery=mysqli_query($conn,$query);
	mysqli_close($conn);
	//for($i=0;$i<sizeOf($getinfo);$i++)		
	header('Location:/vcnetTemp/admin/index.php');	
}
function admin_New_user_Reg()
{
	$getinfo=explode("|",$_REQUEST['info']);
	$fname=$getinfo[0];
	$lname=$getinfo[1];
	$email=$getinfo[3];
	$uname=$getinfo[2];
	$pwd=$getinfo[4];
	include ('dbconfig/dbconfig.php');
	$conn=OpenCon();
	$query1 = "insert into reg_tbl(f_name, l_name,email, username,pwd) values ('$fname','$lname','$email','$uname','$pwd')";
	mysqli_query($conn, $query1);
	mysqli_close($conn);
	header('Location:/vcnetTemp/admin/index.php');	
}
function Logout()
{
	
	include ('dbconfig/dbconfig.php');	
	$uname=$_SESSION["Username"];	
	$conn=OpenCon();
	$query="update reg_tbl set temp=1 where username='$uname'";
	$selquery=mysqli_query($conn,$query);
	mysqli_close($conn);
	header('Location:index.php');	

}
function registertabl()
{
include ('dbconfig/dbconfig.php');
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$uname=$_REQUEST['uname'];
$pwd=$_REQUEST['rfmpassword'];
$query1 = "insert into reg_tbl(f_name, l_name,email, username,pwd) values ('$fname','$lname','$email','$uname','$pwd')";
$conn=OpenCon();

if (mysqli_query($conn, $query1)) {
    echo "New record created successfully";
	header('Location:index.php');
} else {
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
	header('Location:regerationfrm.php');
}

mysqli_close($conn);
}
function login_authentication()
{
	include ('dbconfig/dbconfig.php');
	$pwd=$_REQUEST['psw'];
	$uname=$_REQUEST['uname'];
	$_SESSION["Username"] =$uname;
	if($uname=="admin"&& $pwd=="admin")
	{
		header('Location:/Messanger/admin/index');
	}
else
	{
	$conn=OpenCon();
	$query="select * from reg_tbl where username='$uname' and pwd='$pwd'";
	$selquery=mysqli_query($conn,$query);
	if (!(mysqli_num_rows($selquery) > 0))
		{
		echo "<script type='text/javascript'>\n";
		   	echo "alert('Your Username and Password Wrong!');\n";
			echo "location.href='default.php'";
		    echo "</script>"; 
		}
	else{
		$query="update reg_tbl set temp=0 where username='$uname' and pwd='$pwd'";
	$selquery=mysqli_query($conn,$query);
		header('Location:vcmsg');
		}
	mysqli_close($conn);
	}
    // while($arr=mysqli_fetch_assoc($selquery))
    // {
	// echo $arr['username']; 
	// }	
	//header('Location:login_authentication');
}
function displayUser()
{
	include ('dbconfig/dbconfig.php');
	$str= "<table>";
	$str.=  "<th>Name</th><th>Status</th><th>Chating</th>";
	$conn=OpenCon();
	$query="select * from reg_tbl where username='".'$_SESSION["Username"]'."'";
	$selquery=mysqli_query($conn,$query);
	while($arr=mysqli_fetch_assoc($selquery))
    {
	$str.=  "<tr><td>";
	$str.=  $arr['username'];
	$str.=  "</td><td>Online</td><td><input type='submit' value='chat'></td></tr>";
	}
$str.=  "</table>";
mysqli_close($conn);
echo $str; 
return $str;
}
function send_View_Message(){
	date_default_timezone_set("Asia/Calcutta"); 
	echo "Message info";
	echo $timeget=date("h:i");
	$uname=$_SESSION["Username"];	
	include ('dbconfig/dbconfig.php');
$msginfo=$_REQUEST['msgboxinfo'];
$usinof=$_REQUEST['useinfo'];
$query1 = "insert into msginfo(username,msg,time) values ('$uname','$msginfo','$timeget')";
$conn=OpenCon();
if (mysqli_query($conn, $query1)) {
    echo "New record created successfully";
	header('Location:Message.php?userMsg='.$usinof);
} else {
    echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
	//header('Location:Message.php');
}
mysqli_close($conn);
	
}
function Display_Old_Message()
{ 
	 echo "Get Message";
	  $str=$_REQUEST['usname'];
	 if($str!="undefined")
		header('Location:Message.php?userMsg='.$str);
	//$_SESSION["Username"];
	
}
?> 