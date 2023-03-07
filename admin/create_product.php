
<!DOCTYPE html>
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
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
				
        <meta name="description" content="">
        <meta name="keywords" content="">
     
        <link rel="icon" href="images/favicon.png">
        <title>Dashboard</title>
        <link href="css/bootstrap.css" rel="stylesheet">
                <link href="css/style.css" rel="stylesheet">
        <link href="lib/dialogue/bootstrap-dialog.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Hind:400,500,600,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
	 .row {
            margin-left: unset;
            margin-right: unset;
        }
	</style>
	
	</head>
    <body>
       <?php include("menu.php");?>
        <div class="container-fluid">
            <div class="row">
               <?php include("sidemenu.php");?>
                <div class="col-sm-9 col-md-10 page-content">
                    <div id="flash-message-wrapper">


</div>
                   <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Add Products</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                            
                            <form method="POST" action="productsdb.php" enctype="multipart/form-data">
                            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-5" style="margin-left:-10px;">
                 <!-- <div style="background: #dededeb5;padding: 1px 16px"><h4>Core Attributes</h4></div><br/> -->
                        <div class="col-lg-12">
                             <div class="col-lg-4">
                            <label>Brand Name</label>
                            <select class="form-control" name="brand_name">
                                <option value="Geomex">GEOMEX</option>
                                <option value="Potauto">POTAUTO</option>
                                <option value="Oxilite">OXILITE</option>
                                <option value="Biolite">BIOLITE</option>
                            </select>
                        </div>
                        
                         <div class="col-lg-4">
                            <label>Category</label>
                            <select class="form-control" name="product_category"  id="product_category">
                                <option value="">Select Category</option>
                                <?php
            $sql="SELECT DISTINCT product_category FROM product_cat_subcat_details";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
        <option value="<?php echo $row["product_category"];?>"><?php echo $row["product_category"];?></option>
        <?php
    }}
    ?>
                            </select>
                        </div>

                         <div class="col-lg-4">
                            <label>Sub Category</label>
                            <select class="form-control" name="product_subcategory" id="product_subcategory">
                                <option>Select Sub category</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label>Product Name</label>
                           <input type="text" class="form-control" name="Product_name"  required><br/><br/>
                        </div>

                        <div class="col-lg-4">
                            <label>Price</label>
                           <input type="text" class="form-control" name="Product_price" ><br/><br/>
                        </div>

                         <div class="col-lg-4">
                                <label>Product Description</label>
                               <textarea name="prod_desc" id="prod_desc" class="form-control"></textarea>
                            </div>

                        <div class="col-lg-4">
                                <label>Upload Product Image</label>
                                <input type="file" name="Product_image" id="Product_image"/>
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12" style="margin-top:28px;margin-bottom:28px">
                        <div class="col-lg-2" style="padding:0px !important">
                        
                        </div>
                        <div class="col-lg-2">
                           <input  type="submit" name="submit" value="submit" class="btn btn-primary">

                        </div>
                        <div class="col-lg-2">
                           <input type="button" onclick="window.location.replace('index.php')" value="Cancel" class="btn btn-danger"/>

                        </div>
                        
                        </div>
                        
        <br/><br/>
                                                
                    </div>
                        </div>  
                        </form>
                        
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php include("footer.php");?>
      
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgWsb5IHqZN2237amDE4wLHwLWTX0d-dE&amp;libraries=places" type="text/javascript"></script>
    <script src="lib/jquery-ui/jquery-ui.js" type="text/javascript" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://js.pusher.com/3.1/pusher.min.js"></script>

        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

    <script type="text/javascript">
        $(document).ready(function(){  
   
    $("#product_category").change(function() {   
    
        var product_category = $(this).find(":selected").val();
        //alert(cat_type);
        //var x = (cat_type.split(/\|/)) 
          //    var cat_id= x[0];
            //  var cat_type= x[1];
             //alert(cat_id);
              //alert(cat_type);
        var dataString = 'product_category='+ product_category ;   
        //alert(cat_type);  
        $.ajax({
            url: 'get_product_subcat.php',
            Type: "GET",
            //data:{"cat_id" : cat_id, "cat_type":cat_type}
            data: dataString,  
            //cache: false,
            success: function(data) {
               
                    $("#product_subcategory").html(data);
                //}     
            } 
        });
    }) 
});
    </script>
    
</body>
</html>