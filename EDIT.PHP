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
.three
{
	padding:14px,20px;
	margin:14px,0;
	width:180%;
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
						<li><a class="homeblack"href="Orders.php">ORDERS</a></li>
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
	
	mysql_select_db("herbalmedicines");
	$pid=$_GET['update'];
	//echo $pid ." ";
	$query="select * from addp where p_id=".$pid;
	$result= mysql_query($query,$con) or die (mysql_error());

echo "<form method='POST' action='update1.php' enctype='multipart/form-data'> <center>
		<table  height='500px' width='1000px'>";
			
				
					while($row=mysql_fetch_array($result))
					{

						echo"<tr><td><input type='hidden' name='P_id' value='".$row['P_id']."'</td></tr>";
					    echo "<tr><td>Product Name :<td><input type='text' name='P_name' value='".$row['P_name']."'</td></tr>";
						echo "<tr><td>Product Quantity :<td><input type='text' name ='Quantity' value='".$row['Quantity']."'</td></tr>";
						echo "<tr><td>Product Price : </td><td><input type='text' name='Price' value='".$row['Price']."'</td></tr>";
						echo "<tr><td>About :</td><td> <input type='text' name='About' value='".$row['About']."'</td></tr>";
						echo "<tr><td>Product Image :</td><td><img src='".$row['Image']."' height='100' weight='100'></img><br><br><input id='Filebutton' name = 'image' type='file'></td></tr>";
						echo "<tr><td><input type='submit' name ='update'value='update' class='three'</td></tr>";
					}
			
			echo "</table>
	</form>";
	
	mysql_close($con);
	?>
	
</body>
</html>

