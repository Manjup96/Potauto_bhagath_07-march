

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


// if(isset($_GET['id']) && $_GET['id'] != '')
// {
//   $id=get_safe_value($conn,$_GET['id']);
//   $res=mysqli_query($conn,"select * from products where id='$id'");
//   $check=mysqli_num_rows($res);
//   if($check>0)
//   {
//     $row=mysqli_fetch_assoc($res);
//     $category_name=$row['category_name'];
//     $sub_cat_name=$row['sub_cat_name'];
//     $name= $row['name'];
//     $description=$row['description'];
//     $image=$row['image'];
//     }
// }
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
                            <h3>Edit Product</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                              <div class="table-responsive">
                            <?php
                            $pid = $_GET['id'];
                            $sql="select * from products where id = '$pid' ";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
             if($row = mysqli_fetch_assoc($result)) 
             {
                $Product_category  =  $row["Product_category"];
                $Product_sub_category   = $row["Product_sub_category"];
        ?>
                            <form method="POST" action="edit_productdb.php?id=<?php echo $row["id"];?>" 
                                            enctype="multipart/form-data">
                            
                     <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-5" style="margin-left:-10px;">
                 <!-- <div style="background: #dededeb5;padding: 1px 16px"><h4>Core Attributes</h4></div><br/> -->
                        <div class="col-lg-12">
                         <div class="col-lg-4">
                        <input type="text" name="product_id" id="product_id" value="<?php echo $row["Product_id"];?>" hidden> 
                         <input type="text" name="id" id="id" value="<?php echo $row["id"];?>" hidden> 
                            <label>Brand Name</label>
                            <select class="form-control" name="brand_name">
                                <option value="<?php echo $row["brand_name"];?>"><?php echo $row["brand_name"];?></option>
                                <option value="Geomex">GEOMEX</option>
                                <option value="Potauto">POTAUTO</option>
                                <option value="Oxilite">OXILITE</option>
                                <option value="Biolite">BIOLITE</option>
                            </select>
                        </div>
                          <div class="col-lg-4">
                            <label>Category</label>
                            <select class="form-control" name="product_category"  id="product_category">
                                <option value="<?php echo $row["Product_category"];?>"><?php echo $row["Product_category"];?></option>
                                <?php
            $sql1="SELECT DISTINCT product_category FROM product_cat_subcat_details";
        $result1=$conn->query($sql1);
        
        if($result1->num_rows>0)
        {
             while($row1 = mysqli_fetch_assoc($result1)) 
             {
                
        ?>
        <option value="<?php echo $row1["product_category"];?>"><?php echo $row1["product_category"];?></option>
        <?php
    }}
    ?>
                            </select>
                        </div>

                         <div class="col-lg-4">
                            <label>Sub Category</label>
                            <select class="form-control" name="product_subcategory" id="product_subcategory">
                               
                                        <?php

                            $sql2="select * from  product_cat_subcat_details where product_category ='$Product_category'";
                            $result2=$conn->query($sql2);
                            if($result2->num_rows>0)
                            {
                                 while($row2 = mysqli_fetch_assoc($result2)) 
                                 {
                                    if( $row2['product_subcategory'] === $Product_sub_category )
                                    {   
                                        //echo $sub_cat_name;
                           ?>
                                <option value="<?php echo $row2["product_subcategory"];?>" selected><?php echo $row2["product_subcategory"];?></option>
                                    <?php
                                    }
                                    else{
                                        ?>
                                        
                                    <option value="<?php echo $row2["product_subcategory"];?>"><?php echo $row2["product_subcategory"];?></option>;
                                        <?php
                                    }   
                                }
                            }
                                    ?>

                            </select>
                        </div>

                        <div class="col-lg-4">
                            <label>Product Name</label>
                           <input type="text" class="form-control" name="Product_name" value="<?php echo $row["Product_name"];?>" required><br/><br/>
                        </div>

                        <div class="col-lg-4">
                            <label>Price</label>
                           <input type="text" class="form-control" name="Product_price" value="<?php echo $row["Product_price"];?>"><br/><br/>
                        </div>

                         <div class="col-lg-4">
                                <label>Product Description</label>
                               <textarea name="prod_desc" id="prod_desc" value="<?php echo $row["product_desc"];?>"class="form-control"></textarea>
                            </div>

                        <div class="col-lg-4">
                            <label>Upload Product Image</label>
                            <input type="file" name="Product_image" id="Product_image" value="<?php echo $row["Product_image"];?>" accept="Images/*"/>
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
                        <?php
                    }
                }
                        ?>
            
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