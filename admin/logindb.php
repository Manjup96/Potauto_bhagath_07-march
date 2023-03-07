<?php
session_start(); 
include("config.php");

$result=false;

$user_name=$_POST['username'];
$password=$_POST['password'];

if($conn->connect_error)
{
    
	echo "Failed to connect";
	
}

else{

if(empty($user_name)||empty($password))
{
    //echo $user_name;
	?>
	<script>
	alert("Please Enter UserName and Password");
	window.location="login.html";
	</script>
	
	<?php	
}
else
{
	$result=mysqli_query($conn,"select * from admin_login where email='$user_name' AND password='$password' ");
	if(mysqli_fetch_array($result))


	
		{
		    
                          $_SESSION['username'] = $user_name;
                          $_SESSION['password'] = $password;
			 
		  
			?>
			<script>
		
			window.location="index.php";
			
			</script>
			<?php
			
		}
		
		else
		
		{
			?>
			<script>
			window.location.href="login.html";
			alert("Unable to login .Check user name and password are correct");
			</script>
		<?php
			
		}
		
}
}
?>