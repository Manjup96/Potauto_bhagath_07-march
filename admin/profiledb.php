<?php
session_start(); 

if(!isset($_SESSION['username'])){
   header("Location:login.html");
}
else
{
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
include("config.php");
$result=false;



$v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);


$name=$_POST['name'];

   $email=$_POST['email'];
   $phone=$_POST['phone']; 
$imagename=$_FILES["image"]["name"];

$dist="./images/".$v3.$imagename;

$dist1="images/".$v3.$imagename;

move_uploaded_file($_FILES["image"]["tmp_name"],$dist);
//$id=$_GET["id"];


$imageFileType = pathinfo($dist1,PATHINFO_EXTENSION);


if($_FILES["image"]["error"])
{
 
 $sql = "update admin_login set name='$name',email='$email',phone='$phone' where id=1";
}
else
	
	
{
	
	$sql = "update admin_login set name='$name',email='$email',phone='$phone',image='$dist1' where id=1";
}
			if ($conn->query($sql) === TRUE) 
		  {
			  ?>
			  <script>
			window.location="profile.php";
				alert("Successfully Updated ");
		</script>
			  <?php
			} 
		  else 
		  {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }



?>