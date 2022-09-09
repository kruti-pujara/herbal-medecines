<?php
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("herbalmedicines");
	
	$pid=$_GET['remove'];
	echo "id is".$pid." ";

	$sql="delete from addp where P_id=".$pid."";
	
	$result=mysql_query($sql,$con);
	
?>
	<script type="text/javascript">
	window.location="display.php";
	</script>
	

	