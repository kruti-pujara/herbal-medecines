
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
.homeblack4{
	
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
						<li><a class="homeblack"href="show.php">FEEDBACK</a></li>
						<li><a class="homeblack"href="Orders.php">ORDER</a></li>
						<li><a class="homeblack4"href="manageuser.php">MANAGE USER</a></li>
						<li><a class="homeblack"href="Userhome.html">LOGOUT</a></li>
						

					</ul>
			</nav>
		</header>
		<div class="divider">
		</div>
		
<?php
     $con=mysql_connect("localhost","root","");
	mysql_select_db("herbalmedicines");
	
	$userid=$_GET['Userid'];
	$username=$_GET['username'];
	
	
	$sql="select * from registration ";
	$result=mysql_query($sql,$con);
?>
<center>
<h1>  USER DETAILS </h1><br><br>
<table height="200px" width="900px" align="center">
	<tr>
	  <th> User_id </th>
	  <th> User_name </th>
	  <th> Block </th>
	  <th> Delete</th>
	</tr>
<?php	
	while($rows= mysql_fetch_array($result))
	{
	if($rows['status']==1)
	{
?>
	
	<tr>
	  <td align="center">  <?php echo $rows['User_Id']; ?> </td>
	  <td align="center"> <?php echo $rows['Name'];?> </td>
		<?php echo "<td align='center'> <a href='block.php?block=".$rows['User_Id']."'>Blockuser</a></td>";?>
	    <?php echo "<td align='center'> <a href='deleteuser.php?removeuser=".$rows['User_Id']."'>Removuser</a></td>"; ?>
		<?php echo "<td align='center'> <a href='approveuser.php?approve=".$rows['User_Id']."'>Approve</a></td>"; ?>

	</tr>
  <?php } else {?>
  
	<tr>
	  <td align="center">  <?php echo $rows['User_Id']; ?> </td>
	  <td align="center"> <?php echo $rows['Name'];?> </td>
		<?php echo "<td align='center'> <a href='block.php?block=".$rows['User_Id']."'>Blockuser</a></td>";?>
	    <?php echo "<td align='center'> <a href='deleteuser.php?removeuser=".$rows['User_Id']."'>Removuser</a></td>"; ?>
		

	</tr>
	<?php } }?>
  
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
