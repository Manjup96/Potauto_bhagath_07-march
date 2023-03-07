<?php
//echo '<script>alert("helooo grom paroduct cat")</script>';
include_once("config.php");
if($_GET['product_category']) {
	$pcat=$_GET['product_category'];
	//$pid = $_GET['cat_id'];
	//echo '<script>alert($pcat);</script>';
	?>
							<option value=" ">Select Product Sub Category</option>
	<?php
							$sql="select * from  product_cat_subcat_details where product_category = '$pcat' ";
							$result=$conn->query($sql);
							if($result->num_rows>0)
							{
								 while($row = mysqli_fetch_assoc($result)) 
								 {
		
						   ?>
									
						<option value="<?php echo $row["product_subcategory"];?>"><?php echo $row["product_subcategory"];?></option>
									<?php
								}
							}
						}
//}
?>