<?php
	//session_start();
	
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("herbalmedicines");
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$content=$_POST['content'];

		if(isset($_POST['submit']))
		{	
			$sql="insert into feedback(Name,Email,Content)values('".$name."','".$email."','".$content."')";
	
			$result=mysql_query($sql,$con);
		}
?>

			<script type="text/javascript">
				window.location="feedback.html";
			</script>
	
	