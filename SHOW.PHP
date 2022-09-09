<html>
<head>
<style>
body
{
		background-color:#999900;
}
	
body
	{
		margin:0px;
		//background-image:url("img1.jpg");
		//background-color:lightgreen;
		
	}
header{
	background-color:#999900;
	color:white;
	padding:8px 0px 6px 10px;
	height: 8%;
	//width: 100%;
	margin: 0 auto;
}
header h1{
	font-family:'Jua',sans-serif;
	display:inline;
	
	font-weight:50%;
	font-size:200%;
	margin:0px;
	float:left;
}
nav ul {
	display:inline;
	padding:0px;
	float:left;
}
nav ul li{
	display:inline;
	list-style-type:none;
	float:left;
	margin-left:40px;
	font-size: 100%;
}
nav ul li a{
	color:white;
	text-decoration:none;
}

.homeblack2{
	
	background-color:olive;
	padding:5px;
}
.divider{
	background-color:olive;
	height:5px;
}
.homeblack:hover{
	background-color:olive;
	padding:5px;
}
.homered:hover{
	background-color:olive;
	padding:5px;
}
</style>	
</head>
	<body>
	<header>
			<nav>
				<h1>HERBAL</h1>
				<h1>MEDICINES</h1>
					<ul id="nav">
						<li><a class="homered"href="adminhome.html">HOME</a></li>
						<li><a class="homeblack"href="addp.html">PRODUCT</a></li>
						<li><a class="homeblack2"href="show.php">FEEDBACK</a></li>
						<li><a class="homeblack"href="Orders.php">ORDER</a></li>
						<li><a class="homeblack"href="manageuser.php">MANAGE USER</a></li>
						<li><a class="homeblack"href="Userhome.html">LOGOUT</a></li>
						

					</ul>
			</nav>
		</header>
		<div class="divider">
		</div>

	<?php
	$con=mysql_connect("localhost","root","");
	
	$db=mysql_select_db("herbalmedicines");
	
	$sql="select * from feedback";
	
	$result=mysql_query($sql,$con);
	echo"<html><body><center><table border=1 height=200 width=800><tr><th>Name</th> <th>Email</th> <th>Content</th></tr>";
	while($row=mysql_fetch_array($result))
	{
		echo "<tr><td>".$row['Name']."</td> <td>".$row['Email']."</td><td>".$row['Content']."</td></tr>"."<br>";
	}
	
	echo"</table></body></html>";
	//echo"No of rows in table:".mysql_num_rows($result);
	
	mysql_close($con);
?>

