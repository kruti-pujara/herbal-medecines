<?php
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("herbalmedicines");
	
	if(isset($_REQUEST['update']))
{
	if(!empty($_FILES["image"]["name"]))
	{
		//echo "helo Image";
		$pid=$_REQUEST['P_id'];
		$pname=$_REQUEST['P_name'];
		$quantity=$_REQUEST['Quantity'];
		$price=$_REQUEST['Price'];
		$about=$_REQUEST['About'];
		

						function GetImageExtension($imagetype)
						 {
						   if(empty($imagetype)) return false;
						   switch($imagetype)
						   {
							   case 'image/bmp': return '.bmp';
							   case 'image/gif': return '.gif';
							   case 'image/jpeg': return '.jpg';
							   case 'image/png': return '.png';
							   default: return false;
						   }
						 }
						 
	
						if (!empty($_FILES["image"]["name"]))
						{
						$file_name=$_FILES["image"]["name"];
						$temp_name=$_FILES["image"]["tmp_name"];
						$imgtype=$_FILES["image"]["type"];
						$ext= GetImageExtension($imgtype);
						//$imagename=date("d-m-Y")."-".time().$ext;
						$target_path = "uploads/".$file_name;
						}

						
						if(move_uploaded_file($temp_name, $target_path)) 
						{

						}

	
					//	echo $pid." ".$pname." ".$target_path." HELLO";
						
						$sql= "update addp set P_name='".$pname."',Quantity=".$quantity.",Price=".$price.",About='".$about."',Image='".$target_path."' where P_id=".$pid;
						
						$result=mysql_query($sql,$con);
						
						if($result)
						{
						/*	?>
							<script type="text/javascript">
						window.location="addp.html";
						</script>
							<?php*/
							//echo "Update Image";
						}
						else
						{
							mysql_error();
						}
	}
	else
	{
		//echo "helo";
		$pid=$_REQUEST['P_id'];
		$pname=$_REQUEST['P_name'];
		$quantity=$_REQUEST['Quantity'];
		$price=$_REQUEST['Price'];
		$about=$_REQUEST['About'];
		

						
						$sql= "update addp set P_name='".$pname."',Quantity=".$quantity.",Price=".$price.",About='".$about."' where P_id=".$pid;
						
						$result=mysql_query($sql,$con);
						
						if($result)
						{
						/*	?>
							<script type="text/javascript">
						window.location="addp.html";
						</script>
							<?php*/
							//echo "Update";
						}
						else
						{
							mysql_error();
						}
	}
}
	mysql_close($con);
?>
<script type="text/javascript">
	window.location="display.php";
	</script>
	
