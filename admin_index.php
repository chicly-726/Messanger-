<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="CraftingGamerTom">

<title>Admin - Edit User Details</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!-- Bootstrap core CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- JQuery library -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>
<link rel="stylesheet" href="vcnetTemp/styles.css">
<link rel="script" href="vcnetTemp/script.js">
<style>
	body { background-color: #fafafa; }
</style>
</head>

<body>
<div class="navbar"> 
  <a href="/vcnetTemp/default.php">Logout</a>
  <!--<a href="#contact">Contact</a>-->
</div>
<!--<div id="jquery-script-menu">
<!--<div class="jquery-script-center">

<!--<div class="jquery-script-ads">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
<!--</script>-->
<!--<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>-->

    <main role="main" class="container" style="margin-top:150px;">
    	<div style="margin-top:20px;">
    		<h5>Admin Maintain User Details</h5>
    		<button id="table2-new-row-button" class="btn btn-dark">New Row</button>
		  	<table class="table table-striped table-bordered" id="table2">
			  	<thead class="thead-dark">
				    <tr>
				      <th scope="col">S_No</th>
				      <th scope="col">First</th>
				      <th scope="col">Last</th>
					  <th scope="col">UserName</th>
				      <th scope="col">Email</th>
					  <th scope="col">Password</th>
					  
				    </tr>
			  	</thead>
			  	<tbody>
	<?php
	include ('dbconfig/dbconfig.php');
	$conn=OpenCon();
	$query="select * from reg_tbl";
	$selquery=mysqli_query($conn,$query);
	while($arr=mysqli_fetch_assoc($selquery))
    {
		$id=$arr['id'];
		$fname =$arr['f_name'];
		$lname =$arr['l_name'];
		$un    =$arr['username'];
		$email =$arr['email'];
		$pwd   =  $arr['pwd'];
		$str   ="<tr>";
	$str .="<th scope='row'>$id</th>";
			$str .="<td>$fname</td>";
			$str .="<td>$lname</td>";
			$str .="<td>$un </td>";
			$str .="<td>$email</td>";
			$str .="<td>$pwd</td>";
			$str .="</tr>";
			echo $str; 
	}
	mysqli_close($conn);
	?>
				    
			  	</tbody>
			</table>
		</div>

    </main><!-- /.container -->

	<script src="bstable.js"></script>

	<script>
		// Basic example
		var example1 = new BSTable("table1");
		example1.init();

		// Example with a add new row button & only some columns editable & removed actions column label
		var example2 = new BSTable("table2", {
			editableColumns:"0,1,2,3,4",
			$addButton: $('#table2-new-row-button'),
			onEdit:function() {
				console.log("EDITED");
			},
			advanced: {
				columnLabel: ''
			}
		});
		example2.init();

		// Example with dynamic table that requires BSTable refresh
		// TODO Create method to randomly seed a random amount of rows in the table
		<!-- var example3 = new BSTable("table3"); -->
		<!-- example3.init(); -->

		<!-- function dynamicTableValuesExample()  -->
		<!-- { -->
			<!-- // Generate new values for the table and show how BSTable updates -->
			<!-- let names = ['Matt', 'John', 'Billy', 'Erica', 'Sammy', 'Tom', 'Tate', 'Emily', 'Mike', 'Bob']; -->
			<!-- let numberOfRows = Math.floor(Math.random() * 10); -->

			<!-- document.getElementById("table3-body").innerHTML = '';	// Clear current table -->
			<!-- for(let i = 0; i < numberOfRows; i++) { -->
				<!-- let randomNameIndex = Math.floor(Math.random() * 10); -->

				<!-- let row = document.createElement("tr"); -->
				<!-- row.innerHTML = `<th scope="row">` + i + `</th><td>Value</td><td>` + names[randomNameIndex] + `</td><td>@twitter</td>`; -->
				<!-- document.getElementById("table3-body").append(row); -->
			<!-- } -->

			<!-- example3.refresh(); -->
		<!-- } -->

	</script>
<script type="text/javascript">

  // var _gaq = _gaq || [];
  // _gaq.push(['_setAccount', 'UA-36251023-1']);
  // _gaq.push(['_setDomainName', 'jqueryscript.net']);
  // _gaq.push(['_trackPageview']);

  // (function() {
    // var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    // ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    // var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  // })();

</script>
<script>
// try {
  // fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    // return true;
  // }).catch(function(e) {
    // var carbonScript = document.createElement("script");
    // carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    // carbonScript.id = "_carbonads_js";
    // document.getElementById("carbon-block").appendChild(carbonScript);
  // });
// } catch (error) {
  // console.log(error);
// }
</script>

</body>

</html>
