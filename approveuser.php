<?php
     $con=mysql_connect("localhost","root","");
	mysql_select_db("herbalmedicines");
	
	
	$userid=$_GET['approve'];
	echo $userid;
	$sql="update registration set status=0 where User_Id='".$userid."'";

	$result=mysql_query($sql,$con);
	
	if($result)
		echo "successfully un-blocked";
	
?>

<script type="text/javascript">
	window.location="manageuser.php";
	</script>
	
	
