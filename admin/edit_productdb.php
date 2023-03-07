
<?php
session_start(); 
// use vendor\setasign\src\Fpdi;
require('vendor/autoload.php');
if(!isset($_SESSION['username'])){
   header("Location:login.html");
}
else
{
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
include("config.php");

if(isset($_POST['submit']))
    {
  include("config.php");
// include("fpdf/fpdf.php");
  // require_once('fpdi/src/autoload.php');
  // include("fpdi/src/fpdi.php");
  
  $id=mysqli_real_escape_string($conn,$_POST['id']); 
  $product_id=mysqli_real_escape_string($conn,$_POST['product_id']);
  $product_name=mysqli_real_escape_string($conn,$_POST['Product_name']);
  $brand_name = mysqli_real_escape_string($conn,$_POST['brand_name']);
  $category = mysqli_real_escape_string($conn,$_POST['product_category']);
  $sub_category = mysqli_real_escape_string($conn,$_POST['product_subcategory']);
  
  $price = mysqli_real_escape_string($conn,$_POST['Product_price']);
  
  $product_desc= mysqli_real_escape_string($conn,$_POST['prod_desc']);
   
   $imagename=$_FILES["Product_image"]["name"];

$dist="./img/".$imagename;

$dist1="img/".$imagename;

move_uploaded_file($_FILES["Product_image"]["tmp_name"],$dist);

$imageFileType = pathinfo($dist1,PATHINFO_EXTENSION);


 date_default_timezone_set('Asia/Kolkata');
$date1 =  date("d-m-Y");
$time1 = date("h:i:sa");

//$id="";
/*
if($_FILES["product_image"]["name"])
{

 $sql1 = "update products set brand_name='$brand_name',product_name='$product_name',company_name='$company_name',
 prod_desc='$prod_desc',gtin='$gtin',sku_num='$sku_num',country_of_origin='$country_of_origin',product_status='$prod_status',
 category='$category',sub_category='$sub_category',count='$count',net_weight='$net_weight',gross_weight='$gross_weight',
 currency='$currency',mrp_act_date='$mrp_act_date',target_market='$target_market',location='$location',mrp='$price',
 code='$code',hs_desc='$hs_desc',igst='$igst',sgst='$sgst',cgst='$cgst',date1='$date1',image='$dist1' where product_id= '$product_id' ";
} 

else
{
$sql1 = "update products set brand_name='$brand_name',product_name='$product_name',company_name='$company_name',prod_desc='$prod_desc',gtin='$gtin',
sku_num='$sku_num',country_of_origin='$country_of_origin',product_status='$prod_status',category='$category',
sub_category='$sub_category',count='$count',net_weight='$net_weight',gross_weight='$gross_weight',currency='$currency',
mrp_act_date='$mrp_act_date',target_market='$target_market',location='$location',mrp='$price',code='$code',hs_desc='$hs_desc',
igst='$igst',sgst='$sgst',cgst='$cgst',date1='$date1' where product_id= '$product_id' ";
} */

if($_FILES["Product_image"]["error"])
{
$sql = "update products set Product_id='$product_id',brand_name='$brand_name',Product_category='$category',Product_sub_category='$sub_category',Product_name='$product_name',Product_price='$price'  where id = '$id' ";
}
else
{
$sql = "update products set Product_id='$product_id',brand_name='$brand_name',Product_category='$category',Product_sub_category='$sub_category',Product_name='$product_name',Product_price='$price',Product_image='$dist1'  where id = '$id' ";
}
    





if ($conn->query($sql) === TRUE) 
      {
        ?>
        <script>
      window.location="view-products.php";
        alert("Successfully Updated ");
    </script>
        <?php
      } 

      else 
      {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
  // mysqli_query($conn,"INSERT INTO barcodes(id,c_b_id,product_id,barcode,barcode_pdf,date1) VALUES ('$id3','$id','$product_id','$bar_code_image','$filename','$date1')");
// }
// else
// {
    ?> <!-- <script>
      //window.location="view-products.php";
        alert("please enter all the data");
    </script> -->
    <?php
    

//}
}
    
?>