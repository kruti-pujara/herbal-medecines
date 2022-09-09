<?php
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("Herbalmedicines");
	
	$name=$_REQUEST['name'];
	$email=$_REQUEST['Email'];
	$pass=$_REQUEST['password'];
	
	

	
	$res=mysql_query("select Email from registration",$con);
	
	while($row=mysql_fetch_array($res))
	{
		if(isset($_POST['submit']))
		{
			if($email==$row['Email'])
			{
				$flag=1;
				break;
			}
			else
			{
				$flag=0;
			}
		}
	}
	if($flag==1)
	{
		header("location:registration1_form.php?auth=1");
	}
	else
	{
		$sql="insert into registration(Name,Email,Password) values('".$name."','".$email."','".$pass."')";
		$result=mysql_query($sql,$con);
		//echo mysql_error();
			if($result)
			{
				header("location:userhome.html");
			}
			else
			{
				header("location:registration1_form.php");
			}
			
	}
	mysql_close($con);
?>