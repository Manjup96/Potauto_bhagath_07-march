

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

		
		if($conn->connect_error)
		{
			die("connection failed:" . $conn->connect_error);
		}
				
		else

		{

		//$result=mysqli_query($conn,"select * from  add_products");

		$id=$_GET["id"];
		
	
	//	$result2=mysqli_query($conn,"select * from products where product_id ='$id' ");
  

  
  $sql2 = "delete from enquiryform  where id = $id ";
  	 if ($conn->query($sql2) === TRUE)
	 {
		// $sql = "delete from  products where product_id= $id ";
		 
		
			 ?>
			  <script>
			window.location="view-enquiry.php";
				alert("deleted the selected record");
		</script>
			  
			  <?php
		 
  	 }
  	
			 else
			 { ?>
			  <script>
			window.location="view-enquiry.php";
				alert("Failed to delete record try again!!! ");
		</script>
			  
			  <?php
			 }
		
		
		}
		
		
		
?>






