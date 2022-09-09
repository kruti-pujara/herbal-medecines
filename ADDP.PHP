
<?php
	$con=mysql_connect("localhost","root","");
	
	mysql_select_db("herbalmedicines");
	
	$pid=$_POST['p_id'];
	$pname=$_POST['pname'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	$about=$_POST['about'];
	$image=$_POST['image'];
	
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

	$sql="insert into addp(P_name,Quantity,Price,About,Image)values('".$pname."',".$quantity.",".$price.",'".$about."','".$target_path."')";
echo $target_path."<br>";
	$result=mysql_query($sql,$con);
	
?>

<script type="text/javascript">
	window.location="display.php";
	</script>