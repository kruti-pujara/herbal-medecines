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
		margin:0px;
		height:95%;
		width:99%;
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

.homeblack3{
	
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
						<li><a class="homered"href="Adminhome.html">HOME</a></li>
						
						
						
						<li><a class="homeblack"href="Addp.html">PRODUCT</a></li>
						<li><a class="homeblack"href="show.php">FEEDBACK</a></li>
						<li><a class="homeblack3"href="Orders.php">ORDERS</a></li>
						<li><a class="homeblack"href="manageuser.php">MANAGE USER</a></li>
						<li><a class="homeblack"href="Userhome.html">LOGOUT</a></li>
						
						
					</div>
					</div>
					</ul>
			</nav>
		</header>
		<div class="divider">
		</div>
		
		<?php
	$con=mysql_connect("localhost","root","");
	
	$db=mysql_select_db("herbalmedicines");
	
	$sql= "select * from order1";
	
	$r=mysql_query($sql,$con);
	echo "<center><h1>ORDERS</h1>";
	echo "<center><table height=200 width=500 border=1><tr><th>P_id</th> <th>U_name</th> <th>Quantity</th> <th>Price</th> <th>Address</th> <th>ContactNo</th> <th>City</th> <th>Pincode</th></tr>";
	
	while($row=mysql_fetch_array($r))
	{
		
		echo "<tr><td>".$row['P_id']."</td><td>".$row['U_name']."</td><td>".$row['Quantity']."</td>
		<td>".$row['Price']."</td><td>".$row['Address']."</td><td>".$row['ContactNo']."</td><td>".$row['City']."</td><td>".$row['Pincode']."</td></tr><br>";
	}
	
	echo"</td></td></tr></table>";
	//echo"No of rows in table:".mysql_num_rows($result);
	
	mysql_close($con);
?>
		
</div>
</body>
</html>
