 <div class="col-sm-3 col-md-2">
    <div class="sidebar">
        <div class="user-details">
            <div class="pull-left">
			<?php
							$sql="select * from admin_login";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			 if($row = mysqli_fetch_assoc($result)) 
			 {
		?>
                <img src="<?php  echo $row["image"];?>" alt="" class="thumb-md img-circle">
				<?php
			 }
		}
				?>
            </div>
            <div class="user-info">
                <a class="text-muted m-0 user-pos" href="#">Administrator </a>

            </div>
        </div>

        <div class="panel-group side-menu" id="accordion">
                    <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4 class="panel-title" ><a  href="index.php">
						<i class="fa fa-dashboard"> </i> Dashboard</a></h4>
                    </div>               
                     </div>
                                
					<!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="create_barcode.php">
						<i class="fa fa-pencil-square-o" aria-hidden="true"> </i> Add Product</a></h4>
                    </div>               
                     </div> -->
							
                     <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="create_product.php">
                            <!-- <i class="fa-regular fa-folder-plus"></i> -->
						<i class="fa fa-cubes" aria-hidden="true"> </i> Add Product</a></h4>
                    </div>               
                     </div>
                     
					 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="view-products.php">
                            <!-- <i class="fa-regular fa-list-radio"></i> -->
						<i class="fa fa-list-ul"> </i> View Products</a></h4>
                    </div>               
                     </div>   

					 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="view-contacts.php">
						<i class="fa fa-user"> </i> View Contact Leads</a></h4>
                    </div>               
                     </div>    

                     <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="view-enquiry.php">
						<i class="fa fa-question-circle "> </i> View Enquiry</a></h4>
                    </div>               
                     </div>

                     
                     <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="View-download-brochure.php">
                            <!-- <i class="fa-solid fa-file-arrow-down"></i> -->
						<i class="fa fa-file-text-o"> </i> View Download Brochure</a></h4>
                    </div>               
                     </div>

					 
					 <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="view-barcodes.php">
						<i class="fa fa-barcode"> </i> &nbsp;View Product</a></h4>
                    </div>               
                     </div>  -->

                     <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="add_barcodes.php">
						<i class="fa fa-user"> </i> Add Barcodes</a></h4>
                    </div>               
                     </div> -->
                     
                     <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a  href="add_gallery.php">
						<i class="fa fa-image">  </i>  Add Image Gallery</a></h4>
                    </div>               
                     </div> -->
					 
		 </div>
    </div>
</div>