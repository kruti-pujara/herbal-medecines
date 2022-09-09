<?php
	//session_start();
	
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("Herbalmedicines");
	
	$result=mysql_query("select * from registration",$con);
	
	while($row=mysql_fetch_array($result))
	{
		if(isset($_REQUEST['submit']))
		{	//admin side login
			if($_REQUEST['email_1']=="hbmed@gmail.com" and $_REQUEST['password_1']=="12345")
			{
				header("location:Adminhome.html");
				break;
			}
			//user login
			elseif($_REQUEST['email_1']==$row['Email'] and $_REQUEST['password_1']==$row['Password'])
			{
				header("location:userhome.html");
				//echo"login successsfully!";
				break;
			}
			else
			{
				//echo"Try again..";
				header("location:Login_form.html");
			}
			
		}
	}
?>