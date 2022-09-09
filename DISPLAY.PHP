<html>
<head>
	<style>
	
.one{
	background-color:green;
	color:black;
	font-size:20px;
	height:100%;
	width:100%;
	
}
.two{
	background-color:red;
	color:black;
	font-size:20px;
	height:100%;
	width:100%;
}

.tdfrmt{
	size:10%;
}

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
<center>
<h1> DISPLAYING TABLE DATA</H1>
<?php
     $con=mysql_connect("localhost","root","");
	mysql_select_db("herbalmedicines");
	
	//$pid=$_POST['pid'];
	//$pname=$_POST['pname'];

	
	$sql="select*from addp";
	$result=mysql_query($sql,$con);
?>

<table height="200px" width="900px" align="center" border="1">
	<tr>
	  <th> P_id </th>
	  <th> P_name </th>
	  <th>Quantity</th>
	  <th>Price</th>
	  <th>About</th>
	  <th> Edit </th>
	  <th> Delete</th>
	</tr>
<?php	
	while($rows= mysql_fetch_array($result))
	{
	
?>
	
	<tr>
	  <td align="center">  <?php echo $rows['P_id']; ?> </td>
	  <td align="center"> <?php echo $rows['P_name'];?> </td>
	  <td align="center"> <?php echo $rows['Quantity'];?> </td>
	  <td align="center"> <?php echo $rows['Price'];?> </td>
	  <td align="center"> <?php echo $rows['About'];?> </td>
	  
	  <?php echo "<td align='center'> <a href='edit.php?update=".$rows['P_id']."'>Update</a></td>";?>
	  <?php echo "<td align='center'> <a href='delete.php?remove=".$rows['P_id']."'>Remove</a></td>";?>
	</tr>
  <?php } ?>
</center>

</table>

<?php
function pre_r($array)
{
echo '<pre>';
print_r($array);
echo'</pre>';
}
?>
</body>
</html>