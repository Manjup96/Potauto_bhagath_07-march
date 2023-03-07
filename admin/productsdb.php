

<?php
session_start(); 
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
  include("fpdf/fpdf.php");
  
   
//  $brand_name=mysqli_real_escape_string($conn,$_POST['brand_name']);
  $product_name=mysqli_real_escape_string($conn,$_POST['Product_name']);
  $brand_name = mysqli_real_escape_string($conn,$_POST['brand_name']);
  $category = mysqli_real_escape_string($conn,$_POST['product_category']);
  $sub_category = mysqli_real_escape_string($conn,$_POST['product_subcategory']);
  
  $price = mysqli_real_escape_string($conn,$_POST['Product_price']);
  
  $product_desc= mysqli_real_escape_string($conn,$_POST['prod_desc']);

  // $result1=mysqli_query($conn,"select Product_id from products where Product_id=(select max(Product_id) from products)");
  //       if($row1=mysqli_fetch_array($result1))
  //       {
  //       if($row1['Product_id'] == "")
  //       {
  //          $Product_id="product_".(01);
  //       }
  //       else
  //       {
  //         $id1=$row1['Product_id']; 
  //          $s=preg_replace('/[^0-9]+/', '', $id1);
  //            $Product_id="product_".($s+1);  
  //       }
       
  //       }
       

$v1=rand(1111,9999);
$v2=rand(1111,9999);
$v3=$v1.$v2;
$v3=md5($v3);

  $imagename=$_FILES["Product_image"]["name"];

$dist="./img/".$v3.$imagename;

$dist1="img/".$v3.$imagename;

move_uploaded_file($_FILES["Product_image"]["tmp_name"],$dist);

$imageFileType = pathinfo($dist1,PATHINFO_EXTENSION);

if($_FILES["Product_image"]["error"])
{

 
} 

   
 date_default_timezone_set('Asia/Kolkata');
$date1 =  date("d-m-Y");
$time1 = date("h:i:sa");

// if(($customer_name != "") )
// {

  $result1=mysqli_query($conn,"select id from products where id=(select max(id) from products)");
  if($row1=mysqli_fetch_array($result1))
  {
    $id=$row1['id']+1;

    $Product_id="product_".$id;
  }

  mysqli_query($conn, "INSERT INTO  products(id,Product_id,brand_name,Product_category,Product_sub_category,Product_name,Product_price,product_desc,Product_image) VALUES ('$id','$Product_id','$brand_name','$category','$sub_category','$product_name','$price','$product_desc','$dist1')");


  ?>
  <script type="text/javascript">
  alert("Successfully Added Product");
  window.location.href="view-products.php";
</script>
  
    <?php

}
?>