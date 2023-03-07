<!doctype html>
<html class="no-js" lang="en">
<?php
include("../config.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jiomex - product details</title>
   <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="../image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="../assets/css/AutoScroll.css">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
  <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

  <link rel="stylesheet" href="..\assets\css\AutoScroll.css">

</head>

<body>

   <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    
    <!--offcanvas menu area end-->
    
 

   <style type="text/css">
    
    .dropdown-content {

  display:none;position:absolute;background-color:#f6f6f6;width:-webkit-fill-available;overflow:auto;z-index:1000;height:220px;border:1px solid #ddd
}


.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown a:hover {background-color: #ddd;}


.show {display: block;}
</style>
  <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                       
                        <div class="search_container">
                            <form action="#">
                               <div class="hover_category">
                                                      
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text" name="search_bar1" id="search_bar1" onkeyup="filterFunctionmobile()"onclick="myFunctionmobile()"autocomplete="off">
                                      <div class="dropdown-content" id="myDropdown1">
                                    <?php include("../config.php");
                                    $sql="select * from products";
                                    $result=$conn->query($sql);if($result->num_rows>0){while($row=mysqli_fetch_assoc($result)){ ?><a href="../product/<?php echo $row["Product_name"]; ?>"><?php echo $row["Product_name"]; ?></a><?php }} ?></div>
                                    <!-- <button type="submit">Search</button>  -->
                                </div>
                            </form>
                        </div> 
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="../index.php">Home</a>
                                   
                                </li>
                                

                                
                                <li class="menu-item-has-children">
                                    <a href="../about.php">About Us</a>
                                </li>
                                <li class="menu-item-has-children"><a href="../ourbrands.php">Our Brands</a>
                                       <i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu" style="display: none;" >
                                                <li><a href="../brands/Geomex">Geomex</a></li>
                                                <li><a href="../brands/Potauto">Potauto</a></li>
                                                 <li><a href="../brands/Oxilite">Oxilite</a></li>
                                                <li><a href="../brands/Biolite">Biolite</a></li>
                                                
                                            </ul>
                                        </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Products</a>
                                     <i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu" style="display: none;" >
                                         <?php
            $sql="SELECT DISTINCT product_category FROM product_cat_subcat_details";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
       <li><a href="product.php?category=<?php echo $row["product_category"]; ?>"><?php echo $row["product_category"]; ?></a></li>
        <?php
    }}
    ?>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="../contact-us.php"> Contact Us</a> 
                                </li>
                                <li class="menu-item-has-children">
                                    
                                <a href="#" data-toggle="modal" data-target="#modal_box" >
                                            Download brochure </a>
                               
                                            </li> 
                                            <div class="call_support">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us: <a href="tel:08884463025">08884463025</a></span></p>

                        </div>
                        <div class="call_support" style="color:#f9cf1f; font-weight: bold;font-size:15px">
                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i>   <a href="mailto:info@potauto.in">info@potauto.in</a></span>
</div>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    
    <header>
        <div class="main_header" >

            <!--header middel start-->
            <div class=".d-sm-none .d-md-block">
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center" style="justify-content:end;">
                       <!--  <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                            <div class="logo">
                                <a href="index.php"><img src="images/output-onlinepngtools.png" alt=""></a>
                            </div>
                        </div> -->
                        <div class="col-md-2">
                        <div class="call_support text-right">
                                <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us:  <a href="tel:08884463013">08884463013</a></span></p>
                            </div>
                        </div>
                         <div class="col-md-2">
                        <div class="call_support text-right">
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i>   <a href="mailto:info@potauto.in">info@potauto.in</a></p>
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="call_support text-right offcanvas_footer" style="margin-top: 0px !important;padding-bottom:3px !important;">
                            <!-- <span><a href="#"><i class="fa fa-envelope-o"></i> info@potauto.in </a></span> -->
                            <ul style="margin-top:3px !important;">
                            <li><a class="facebook" href="https://www.facebook.com/JiomexAuto"><i class="icon-facebook"></i></a></li>
                                   li><a class="" href="https://wa.me/918884463013?text=Hello"><i class="fa fa-whatsapp"></i></a></li>
                                   <!--<li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>-->
                                   <!--<li><a class="google" href="#"><i class="icon-google"></i></a></li>-->
                                   <li><a class="instagram2" href="https://www.instagram.com/jiomexautoindiapvt/"><i class="icon-instagram2"></i></a></li>
                            </ul>
                        </div>
                            
                        </div>
                        <!-- <div class="col-lg-10 col-md-6 col-sm-6 col-6">
                            <div class="header_right_box">
                                <div class="search_container">
                                    <form action="#">
                                       <div class="hover_category">
                                            <select class="select_option" name="select" id="categori2"  onchange="javascript:handleSelect(this)">>
                                               <option value="">Select</option>
                            <option value="Auto Electronics">Auto Electronics</option>
                            <option value="Automotive Anti-theft Products">Automotive Anti-theft Products</option>
                            <option value="Automotive Batteries">Automotive Batteries</option>
                            <option value="Automotive Body Repair">Automotive Body Repair</option>
                            <option value="Automotive Brakes">Automotive Brakes</option>
                            <option value="Automotive Electrical">Automotive Electrical</option>
                            <option value="Automotive Exterior Accessories">Automotive Exterior Accessories</option>
                            <option value="Automotive Filters">Automotive Filters</option>
                            <option value="Automotive Fitting Parts">Automotive Fitting Parts</option>
                            <option value="Automotive Gear">Automotive Gear</option>
                            <option value="Automotive Interior Accessories">Automotive Interior Accessories</option>
                            <option value="Automotive Other Accessories">Automotive Other Accessories</option>
                            <option value="Automotive Spark Plugs/Injectors">Automotive Spark Plugs/Injectors</option>
                            <option value="Automotive Tyres/wheels">Automotive Tyres/wheels</option>
                            <option value="Automotive Tyres/wheels Accessories">Automotive Tyres/wheels Accessories</option>
                            <option value="Car care & Cleaning Products">Car care & Cleaning Products</option>
                            <option value="Interior Gauges">Interior Gauges</option>
                                   
                                 </select>                        
                                       </div>
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text">
                                            <button type="submit">Search</button> 
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
</div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom sticky-header" style="padding-top:10px;padding-bottom:10px;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-12">
                             <div class="logo">
                                <a href="../index.php"><img src="../images/potautologo.jpeg" alt="" width="83%"></a>
                            </div>
                        </div>
                       <!-- <div class=" col-lg-2">
                            <div class="categories_menu">
                                <div class="categories_title">
                                    <h2 class="categori_toggle">ALL CATEGORIES</h2>
                                </div>
                                <div class="categories_menu_toggle">
                                    <ul>
                                    <li><a href="">Select</a></li>
                            <li><a href="product.php?category=Auto Electronics">Auto Electronics</a></li>
                            <li><a href="product.php?category=Automotive Anti-theft Products">Automotive Anti-theft Products</a></li>
                            <li><a href="product.php?category=Automotive Batteries">Automotive Batteries</a></li>
                            <li><a href="product.php?category=Automotive Body Repair">Automotive Body Repair</a></li>
                            <li><a href="product.php?category=Automotive Brakes">Automotive Brakes</a></li>
                            <li><a href="product.php?category=Automotive Electrical">Automotive Electrical</a></li>
                            <li><a href="product.php?category=Automotive Exterior Accessories">Automotive Exterior Accessories</a></li>
                            <li><a href="product.php?category=Automotive Filters">Automotive Filters</a></li>
                            <li><a href="product.php?category=Automotive Fitting Parts">Automotive Fitting Parts</a></li>
                            <li><a href="product.php?category=Automotive Gear">Automotive Gear</a></li>
                            <li><a href="product.php?category=Automotive Interior Accessories">Automotive Interior Accessories</a></li>
                            <li><a href="product.php?category=Automotive Other Accessories">Automotive Other Accessories</a></li>
                            <li><a href="product.php?category=Automotive Spark Plugs/Injectors">Automotive Spark Plugs/Injectors</a></li>
                            <li><a href="product.php?category=Automotive Tyres/wheels">Automotive Tyres/wheels</a></li>
                            <li><a href="product.php?category=Automotive Tyres/wheels Accessories">Automotive Tyres/wheels Accessories</a></li>
                            <li><a href="product.php?category=Car care & Cleaning Products">Car care & Cleaning Products</a></li>
                            <li><a href="product.php?category=Interior Gauges">Interior Gauges</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-8">
                            <div class="main_menu menu_position text-left"> 
                                <nav>  
                                    <ul>
                                        <li><a class="active"  href="../index.php">home<!-- <i class="fa fa-angle-down"></i> --></a>

                                           <!--  <ul class="sub_menu">
                                                <li><a href="index.html">Home shop 1</a></li>
                                                <li><a href="index-2.html">Home shop 2</a></li>
                                                <li><a href="index-3.html">Home shop 3</a></li>
                                                <li><a href="index-4.html">Home shop 4</a></li>
                                            </ul> -->
                                        </li>
                                        <!-- <li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a> 
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="#">Shop Layouts</a>
                                                        <ul>
                                                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                            <li><a href="shop-list.html">List View</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">other Pages</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="my-account.html">my account</a></li>
                                                            <li><a href="404.html">Error 404</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Product Types</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-sidebar.html">product sidebar</a></li>
                                                            <li><a href="product-grouped.html">product grouped</a></li>
                                                            <li><a href="variable-product.html">product variable</a></li>
                                                            <li><a href="product-countdown.html">product countdown</a></li>

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                                <li><a href="compare.html">compare</a></li>
                                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="../about.php">About Us</a></li>
                                        <li><a href="../ourbrands.php">Our Brands</a>
                                        <ul class="sub_menu">
                                                <li><a href="../brands/Geomex">Geomex</a></li>
                                                <li><a href="../brands/Potauto">Potauto</a></li>
                                                 <li><a href="../brands/Oxilight">Oxilight</a></li>
                                                <li><a href="../brands/Biolite">Biolite</a></li>
                                                
                                            </ul>
                                        </li>
                                         <li><a href="#">Products</a>
                                         <ul class="sub_menu">
                                         <?php
            $sql="SELECT DISTINCT product_category FROM product_cat_subcat_details";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
       <li><a href="../product.php?category=<?php echo $row["product_category"]; ?>"><?php echo $row["product_category"]; ?></a></li>
        <?php
    }}
    ?>
                                    </ul>
                                        
                                        </li>
                                        
                                        <li><a href="../contact-us.php"> Contact Us</a></li>
                                        
                                        
                                            
                                        <li>
                                        
                                                                            
                                            <a href="#" data-toggle="modal" data-target="#modal_box">
                                            Download brochure </a>
                                        
                                        </li>
                                            


                                                
                                        

                                    </ul>  
                                </nav> 
                            </div>
                        </div>
                        <div class="col-lg-2">
                             <div class="header_right_box">
                                <div class="search_container">
                                    <form action="#">
                                     
                                        <div class="search_box"> 
                           <input placeholder="Search product..." type="text" name="search_bar" id="search_bar" onkeyup="filterFunction()"onclick="myFunction()"autocomplete="off">
                               
                                <div class="dropdown-content" id="myDropdown">
                                    <?php include("config.php");
                                    $sql="select * from products";
                                    $result=$conn->query($sql);if($result->num_rows>0){while($row=mysqli_fetch_assoc($result)){ ?><a href="../product/<?php echo $row["Product_name"]; ?>"><?php echo $row["Product_name"]; ?></a><?php }} ?></div>
                               <!--      <button type="submit" style="float: left;width: 15px;">
                                        </button> -->
                             
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>
    

<script type="text/javascript">
  function handleSelect(elm)
  {
     window.location = elm.value+".php";
  }
</script>





<!-- -->


 <!-- modal area start-->
    <!--<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">-->
    <!--    <div class="modal-dialog modal-dialog-centered" role="document">-->
    <!--        <div class="modal-content">-->
    <!--            <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
    <!--              <span aria-hidden="true">&times;</span>-->
    <!--            </button>-->
    <!--            <div class="modal_body">-->
    <!--                <div class="container">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-lg-5 col-md-5 col-sm-12">-->
    <!--                              <div class="modal_title mb-10">-->
    <!--                                    <h2>Download Brochure</h2> -->
    <!--                                </div>-->
    <!--                        </div> -->
                             
    <!--                    </div>     -->
    <!--                </div>-->
    <!--            </div>    -->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- modal area end-->
 <!--Download_Brochure  popup Form  start-->

    
 <div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  

    <!-- Modal HTML -->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form id="Download_Brochure_Form" name="Download_Brochure" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="Download_Brochure_Form_validation();downloadPdf('../Download-Brouchre/Potauto-Catalogue.pdf','Potauto-Auto-Spareparts-Catalogue')"  method="POST" novalidate="">
                 <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                    <div class="modal-header">
                    <h5 class="modal-title" style="color:#27569e;font: weight 700px; ;">Download Brochure Form product1/produtc .php</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="tel" name="phone" class="form-control"  placeholder="Enter your Mobile Number">
                                    </div>
                                </div>
                        </div>
                            
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                               
                            </div>
                        </div>
                    </div>
                        
                
                        <div class="modal-footer1" style="justify-content: center;">
                        <input type="submit"  name="submit" id="submit" value="Submit"  style="justify-content: center;color:#27569e;background:#f9cf1f">
                        <!--<button onclick="document.getElementById('link').click()">Download!</button> -->
                                
                        </input>   
                        <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <!--Download_Brochure  popup Form  popup End-->

  

<!-- Download_Brochure_Form_validation() start -->

<script type="text/javascript">

function myFunctionmobile()
{
    document.getElementById("myDropdown1").classList.toggle("show");
}

function filterFunctionmobile() {

  var input, filter, ul, li, a, i;
  input = document.getElementById("search_bar1");
  filter = input.value.toUpperCase();

  div = document.getElementById("myDropdown1");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<script type="text/javascript">

function myFunction()
{
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {

  var input, filter, ul, li, a, i;
  input = document.getElementById("search_bar");
  filter = input.value.toUpperCase();

  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>

<script type="text/javascript">
    function dis_submenu()
    {
      
        if (document.getElementById("mobile_sub_menu").style.display == "none")
        {
            document.getElementById("mobile_sub_menu").style.display = "block";
        }
        else if (document.getElementById("mobile_sub_menu").style.display == "block")
        {
            document.getElementById("mobile_sub_menu").style.display = "none";
        }

    }
     function dis_submenu1()
    {
      
        if (document.getElementById("mobile_sub_menu1").style.display == "none")
        {
            document.getElementById("mobile_sub_menu1").style.display = "block";
        }
        else if (document.getElementById("mobile_sub_menu1").style.display == "block")
        {
            document.getElementById("mobile_sub_menu1").style.display = "none";
        }

    }
</script>

<script type="text/javascript">
 function Download_Brochure_Form_validation()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    var email1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    
    var ph=document.Download_Brochure.phone.value;
    var em=document.Download_Brochure.email.value;  

    var name1=document.Download_Brochure.name.value;
    
    
   
    if(name1 === " " || ph === " " || em === " " )
    {
      alert("Please Enter All The Fields");
      return false;
    }
    if(name1.match(letters))
    {
     if(ph.match(phoneno))
     {
       if (em.match(email1))
        {
          return true;
        }
        else
        {
          alert("You have entered an invalid email address!")
          return false;
        }
      return true;
     }
     else
     {
      alert("Not a valid phone number, please enter correct 10 digit number");
      //document.book.phone.focus();
      return false;
     }
    return true;
    }
    else
    {
      alert("Not a correct name ,Enter only alphabets");
      //document.Download_Brochure.names.focus();
      return false;
    }
   
  }

</script>


<?php

 include("../config.php");
  if(isset($_POST["submit"]))                               
  {
   
    $name=trim($_POST['name']);
   
    $phone=trim($_POST['phone']);
    $email=trim($_POST['email']);
   
    $id="";
    
    if($name == " ") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered name.</small>';
    }
    elseif($email == " ") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered Email id.</small>';
    }
    elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
        echo '<small class="alert alert-danger" role="alert" id="" onclick="this.style.display = \'none\'">You Did not entered a valid Email id.</small>';
         }
    
    elseif($phone == ""){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered mobilr number.</small>';
    }
    elseif(is_numeric(trim($phone)) == false){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
    }
    elseif(strlen($phone)<10){
   echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Correct 10 digit Phone Number.</small>';
    }
   
   else
    {
        $date1 = Date('d-m-y');
                    $result=mysqli_query($conn,"select * from download_brochure_form where id=(select max(id) from download_brochure_form)");
                    if($row=mysqli_fetch_array($result))
                    {
                    $id=$row['id']+1;
                    }
                    $sql = "INSERT INTO download_brochure_form(id,name,phone,email,date1) VALUES ('$id','$name','$phone','$email','$date1')";
                   
                    if($conn->query($sql) === TRUE)
                    {
                        echo '<div id="downloadBrouchre"> 
                    
                    <a  href="../Download-Brouchre/Potauto-Catalogue.pdf" 
                    download="Potauto-Auto-Spareparts-Catalogue.pdf">
                                        </a>  </div>';
    //                     $file ='Download-Brouchre/Potauto-Catalogue.pdf';
    // ob_start();
    // $file = 'Download-Brouchre/Potauto-Catalogue.pdf';

    // if (file_exists($file)) 
    // {
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename='.basename($file));
    //     header('Content-Transfer-Encoding: binary');
    //     header('Expires: 0');
    //     header('Cache-Control: must-revalidate');
    //     header('Pragma: public');
    //     header('Content-Length: ' . filesize($file));
    //     ob_clean();
    //     flush();
    //     readfile($file);
    //     exit();
    // }
                  
                   ?>
                   <script>
                //   var pdfUrl = "Download-Brouchre/Potauto-Catalogue.pdf";
                //   window.open(pdfUrl, '_blank');
                    //  window.history.go(-1);
                   </script>
                   <?php
                    }
                    
                    else
                    {
                            echo '<div class="alert alert-danger" style="position:absolute !important;top:50%;"role="alert" id="mydiv" onclick="this.style.display = \'none\'">
                                    Sorry Failed to send Your Request ,Please try again.
                                    </div>';
                //print_r(error_get_last());
                        }

               
                
                
    }
  //}
$conn->close();
               
  }
  ?>


  <!-- Download_Brochure_Form_validation() End -->

  
 <!--  Download_Brochure_PDF_validation() End -->
 <script type="text/javascript"> 
function Download_Brochure_PDF_validation()
 {

    echo '<div id="downloadBrouchre"><a  href="../Download-Brouchre/Potauto-Catalogue.pdf"  download="Potauto-Auto-Spareparts-Catalogue.pdf"></a>  </div> ';
 }
</script>                    

<!-- Download_Brochure_Form_validation() start -->

<script type="text/javascript">
 function Download_Brochure_Form_validation()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    var email1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    
    var ph=document.Download_Brochure.phone.value;
    var em=document.Download_Brochure.email.value;  

    var name1=document.Download_Brochure.name.value;
    
    
   
    if(name1 === " " || ph === " " || em === " " )
    {
      alert("Please Enter All The Fields");
      return false;
    }
    if(name1.match(letters))
    {
     if(ph.match(phoneno))
     {
       if (em.match(email1))
        {
          return true;
        }
        else
        {
          alert("You have entered an invalid email address!")
          return false;
        }
      return true;
     }
     else
     {
      alert("Not a valid phone number, please enter correct 10 digit number");
      //document.book.phone.focus();
      return false;
     }
    return true;
    }
    else
    {
      alert("Not a correct name ,Enter only alphabets");
      //document.Download_Brochure.names.focus();
      return false;
    }
   
  }

</script>




<!-- Download PDF Javascript Code start -->

<script>
    
        function downloadPdf(URL, fileName){
            let link = document.createElement("a");
            
            link.setAttribute("download", fileName);
            link.href = URL;

            document.body.appendChild(link);
            link.click();
            link.remove();
        }
    </script>
<!-- Download PDF Javascript Code End -->
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="..\index.php">Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <div class="product_page_bg">
        <div class="container">
            <!--product details start-->
                         

            <!--Products list-->
        <section class="product_area related_products">
            <div class="row">
                <div class="row col-md-12">
                   <?php
                   if(isset($_GET["name"]))
                   {

                    $name = $_GET["name"];
                    $sql="select * from products where Product_name = '$name' ";

                    // echo '<h3>'.$cat_name.'</h3>';
                   }
                  
                   
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {

                   ?>
                    <div class="col-sm-3 pro_card" >
                       <article class="single_product"  style=" border-top-right-radius: 4px; border-top-left-radius: 4px;border-style: solid;  border-color: coral;">
                                    <figure>
                                        <div class="product_thumb">
                                           <!--  <a class="primary_img" href="#"><img src="admin/<?php echo $row["image"];?>"   alt=""></a> -->
                                            <img src="../admin/<?php echo $row["Product_image"];?>"   alt="">
                                            <div class="label_product">
                                                <!-- <span class="label_sale">-56%</span> -->
                                            </div>
                                            
                                        </div>
                                        <div class="product_content">
                                            <div class="product_content_inner" style="text-align: center;">
                                                 <!-- <p class="manufacture_product"><a href="#">Parts</a></p> -->
                                                <h4 class="product_name" style="text-transform: uppercase;"><a href="#"><?php echo $row["Product_name"];?></a></h4>
                                                 
                                                <div class="price_box"> 
                                                      
                                                   <span class="current_price"><?php echo $row["Product_price"];?></span>
                                                </div>
                                                <div>  
                                                    <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px #0e4677;">
                                                        Enquire Now
                                                    </button>
                                                </div>
                                            </div> 
                                               
                                        </div>
                                    </figure>
                                </article>
                    </div>  
                <?php
            }
        }
                ?>              
                  </div> 
            </div> 
        </section>
            <!--End Products List-->

            <!--product area start-->

           
            <!--product area end-->

            <!--product area start-->
           
            <!--product area end-->
        </div>
    </div>
    
    
    <!--newsletter area start-->
    
    <!--newsletter area end-->
    
    <!--footer area start-->
   
   <style>
  h3{
font-size:24px !important;

}
h6{
font-size:16px !important;
line-height :1.1;
}  

a:hover
{
    color: #facf27 !important;
}
    
</style>





 <footer class="footer_widgets">
     
     <div class="footer-wrap"  >
  <div class="container-lg" >
    <div class="row">
        <div class="col-md-3" style="color:white;text-align:left;padding:3%;">
            <div class="footer_logo">
            <img alt=""  src="../images/potauto_logo_bgremoved.png" style="margin: 5px 0;">
            </div>
            <h6>Jiomex Auto India Pvt Ltd</h6>
            <h6 style="font-weight:500;">Leading Distributors for Auto Mobile Accessories</h6>
        </div>
        <div class="col-md-3" style="color:white;text-align: left;padding: 3%;">
            <h3>Quick Links</h3>
            <ul class="footer-links">
            <li style="margin-bottom:5px"><a href="../about.php">About Us</a></li>
            <li style="margin-bottom:5px"><a data-toggle="modal" data-target="#myModal" data-toggle="modal">Enquiry for bulk orders</a></li> 
             <li style="margin-bottom:5px"><a href="#">Terms and Conditions</a></li> 
            <li style="margin-bottom:5px"><a href="#">Privacy Policy</a></li> 
        </ul>
            </div>
        <div class="col-md-3" style="color:white;text-align:left;padding: 3%;">
           <div class="footer_info">
               <h3>Get In Touch</h3>
                <ul class="footer-adress">
           
            <li class="footer_email" style="margin-bottom:5px" > <span>&#9993;</span>
                    <span><a href="mailto:info@potauto.in">  info@potauto.in </a></span> </li>
            <li class="footer_phone" style="margin-bottom:5px" ><span>  &#128222;</span>
                <span><a href="tel:8884463013"> +91-8884463013</a></span> </li>
           
              <li><span><i class="fa fa-map-marker"></i> No: 5/1, 1st floor, Madanayakanahalli, Lakshmipura road,tumkur road, Bangalore-562123, Karnaraka, India.</span></li>  
          </ul>
               </div>
           </div>
        <div class="col-md-3" style="color:white;text-align:left;padding:3%;">
            <h3>Connect With US</h3>
             <div class="offcanvas_footer">
              <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <!--<li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>-->
             <!--<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
                <li class="instagram2"><a href="#"><i class="icon-instagram2"></i></a></li>
               </ul> 
                                    </div>
            
        </div>
    </div>
</div>
</div>
     </footer>
     
     <!--FOOTER END-->
     
     
     <!--Copyright Start--> 
<div class="footer-bottom text-center"> <br>
  <div class="container" > 
  <p  style="color:#27569e;">&copy;  <a href="#" class="text-uppercase"> Copyright POTAUTO  Auto India Pvt. Ltd. All Rights Reserved   </a> <?php echo date("Y"); ?> 
 </p>  <br>
  </div>
</div>
<!--Copyright End--> 
    
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade"  tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
             <form id="EnquiryForm" name="Enquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return EnquiryForm_validation();"  method="POST" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title">Tell us what you need, and we'll help you get quotes</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
                    
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            
                            <div class="mb-3">
                            
                            <label class="form-label">I want quotes for</label>
                                <select name="quotation_for" class="form-control" >
                                    <option value="">--Select Category--</option>
                                    <option value="HORN">HORN</option>
                                    <option value="WIPERS">WIPERS</option>
                                    <option value="LED HEADLIGHT BULB">LED HEADLIGHT BULB</option>
                                    <option value="HID HEADLIGHT BULB">HID HEADLIGHT BULB</option>
                                    <option value="AUTOMATIVE BULBS">AUTOMATIVE BULBS</option>
                                    <option value="STOP & TAIL LIGHT BULB">STOP & TAIL LIGHT BULB</option>
                                    <option value="EARTH MOVERS  LIGHT">EARTH MOVERS  LIGHT</option>
                                    <option value="RELAYS & FRAMES WIRING CLIPS">RELAYS & FRAMES WIRING CLIPS</option>
                                    <option value="MOBILE PHONE CABLES">MOBILE PHONE CABLES</option>
                                    <option value="DC CONVERTOR">DC CONVERTOR</option>
                                    <option value="NEGATIVE BOOSTER">NEGATIVE BOOSTER</option>
                                    <option value="AUTOMATIVE ELECTRICAL PARTS ">AUTOMATIVE ELECTRICAL PARTS </option>
                                    <option value="COACH FAN">COACH FAN</option>
                                    <option value="WIRES & CABLES(PVC INSULATED WIRE)">WIRES & CABLES(PVC INSULATED WIRE)</option>
                                    <option value="BATTERY TERMINAL">BATTERY TERMINAL</option>
                                    <option value="WIRING CLIPS">WIRING CLIPS</option>

                                    <option value="MISCELLANEOUS">MISCELLANEOUS</option>

                                </select>
                            
                                <!-- <input type="text" name="quotation_for" class="form-control" placeholder="Enter Product / Service name"> -->
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" name="phone" class="form-control"  placeholder="Enter your Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                            </div>
                        </div>
                    <div class="row">
                        <label class="form-label">Quantity</label>
                         <div class="input-group">
                            <!-- declaration for first field -->
                         <input type="text" class="form-control "  name="quantity" placeholder="Quantity" />
                        <!-- reducong the gap between them to zero -->
                        <span class="input-group-btn" style="width:0px;"></span>
                        <!-- declaration for second field -->
                        <input type="text" class="form-control " value="Piece" readonly="" />
                    </div>
                        
                    </div><br/>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Briefly describe your requirement</label>
                                <textarea name="requirement" class="form-control" placeholder="Additional details about your requirement..."> </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer1">
                <input type="submit"  name="submit_enq" id="submit_enq" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div>
                </form>
        </div>
    </div>
</div>
  

<script type="text/javascript">
 function EnquiryForm_validation()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    var quotation_for1=document.Enquiry.quotation_for.value;
    var ph=document.Enquiry.phone.value;
    //var em=document.Enquiry.email.value;  id  quotation_for   phone   name    quantity    requirement 

    var name1=document.Enquiry.name.value;
    var quantity1=document.Enquiry.quantity.value;
    var requirement1=document.Enquiry.requirement.value;
    //alert(name1);
   
    if(quotation_for1 === " " || ph === " " || quantity1 === " " || name1 === " " || requirement1 === " ")
    {
      alert("Please Enter All The Fields");
      return false;
    }
    if(name1.match(letters))
    {
     if(ph.match(phoneno))
     {
       if (em.match(email1))
        {
          return true;
        }
        else
        {
          alert("You have entered an invalid email address!")
          return false;
        }
      return true;
     }
     else
     {
      alert("Not a valid phone number, please enter correct 10 digit number");
      //document.book.phone.focus();
      return false;
     }
    return true;
    }
    else
    {
      alert("Not a correct name ,Enter only alphabets");
      //document.Enquiry.names.focus();
      return false;
    }
   
  }

</script>


<?php

 include("../config.php");
  if(isset($_POST["submit_enq"]))                               
  {
    $quotation_for=trim($_POST['quotation_for']);
    $name=trim($_POST['name']);
    $quantity=trim($_POST['quantity']);
    $phone=trim($_POST['phone']);
    $requirement=trim($_POST['requirement']);
   
    $id="";

    $date1=Date('d-m-Y');
    
    if($quotation_for == " ") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered which Accessories you Want.</small>';
    }
    elseif($name == " ") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered name.</small>';
    }
    elseif($quantity == "") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered qhow much Quantity You nedd .</small>';
    }
    
    elseif($phone == "")
    {
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
    }
    elseif(is_numeric(trim($phone)) == false){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
    }
    elseif(strlen($phone)<10)
    {
   echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Correct 10 digit Phone Number.</small>';
    }
    elseif($requirement == "")
    {
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Your Requirements.</small>';
    }
   else
    {
                    $result=mysqli_query($conn,"select id from enquiryform where id=(select max(id) from enquiryform)");
                    if($row=mysqli_fetch_array($result))
                    {
                    $id=$row['id']+1;
                    }
                    $sql = "INSERT INTO enquiryform(id,quotation_for,name,quantity,phone,requirement,date1) VALUES ('$id','$quotation_for','$name','$quantity','$phone','$requirement','$date1')";
                    if($conn->query($sql) === TRUE)
                    {
                       
                    echo '<div class="alert alert-success" style="position:absolute !important;top:50%; role="alert" id="mydiv" onclick="this.style.display = \'none\'">
                                We Will Get In Touch With You </div>';
                    }
                    
                    else
                    {
                            echo '<div class="alert alert-danger" style="position:absolute !important;top:50%;"role="alert" id="mydiv" onclick="this.style.display = \'none\'">
                                    Sorry Failed to send Your Request ,Please try again.
                                    </div>';
                //print_r(error_get_last());
                    }

                /* if ($conn->query($sql) === TRUE) 
                    {
                        
                        
                
                    }

                    else 
                    {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        } */
                
                
    }
  //}
$conn->close();
    
  }
  ?>

    <!--footer area end-->
   
    
  <!--Enquiry  popup Form  start-->

    
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  

    <!-- Modal HTML -->
    <div id="myModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <form id="EnquiryForm" name="Enquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return EnquiryForm_validation();"  method="POST" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title">Tell us what you need, and we'll help you get quotes</h5>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            
                            <div class="mb-3">
                            
                            <label class="form-label">I want quotes for</label>
                                <select name="quotation_for" class="form-control" >
                             <option value="">Select</option>
                            <option value="Auto Electronics">Auto Electronics</option>
                            <option value="Automotive Anti-theft Products">Automotive Anti-theft Products</option>
                            <option value="Automotive Batteries">Automotive Batteries</option>
                            <option value="Automotive Body Repair">Automotive Body Repair</option>
                            <option value="Automotive Brakes">Automotive Brakes</option>
                            <option value="Automotive Electrical">Automotive Electrical</option>
                            <option value="Automotive Exterior Accessories">Automotive Exterior Accessories</option>
                            <option value="Automotive Filters">Automotive Filters</option>
                            <option value="Automotive Fitting Parts">Automotive Fitting Parts</option>
                            <option value="Automotive Gear">Automotive Gear</option>
                            <option value="Automotive Interior Accessories">Automotive Interior Accessories</option>
                            <option value="Automotive Other Accessories">Automotive Other Accessories</option>
                            <option value="Automotive Spark Plugs/Injectors">Automotive Spark Plugs/Injectors</option>
                            <option value="Automotive Tyres/wheels">Automotive Tyres/wheels</option>
                            <option value="Automotive Tyres/wheels Accessories">Automotive Tyres/wheels Accessories</option>
                            <option value="Car care & Cleaning Products">Car care & Cleaning Products</option>
                            <option value="Interior Gauges">Interior Gauges</option>

                                </select>
                            
                                <!-- <input type="text" name="quotation_for" class="form-control" placeholder="Enter Product / Service name"> -->
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="tel" name="phone" class="form-control"  placeholder="Enter your Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="text" name="quantity" class="form-control">
                                <input type="text" class="form-control" placeholder="Piece">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Briefly describe your requirement</label>
                                <textarea name="requirement" class="form-control" placeholder="Additional details about your requirement..."> </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <input type="submit"  name="submit" id="submit"/>  Submit Requirement<span></span>
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!--Enquiry  popup Form  popup End-->


<!-- Whatsapp Widget Start  --> 

<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?10006';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message us",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"Jiomex Auto India Pvt Ltd",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"918884463025"
  }
  };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  </script>


<!-- Whatsapp Widget End  --> 

<!-- JS
============================================ -->


<!-- Plugins JS -->
<script src="../assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- auto Scrool JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


<script type="text/javascript">
 function EnquiryForm_validation()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    var quotation_for1=document.Enquiry.quotation_for.value;
    var ph=document.Enquiry.phone.value;
    //var em=document.Enquiry.email.value; 	id	quotation_for	phone	name	quantity	requirement	

    var name1=document.Enquiry.name.value;
    var quantity1=document.Enquiry.quantity.value;
    var requirement1=document.Enquiry.requirement.value;
    
   
    if(quotation_for1 === " " || ph === " " || quantity1 === " " || name1 === " " || requirement1 === " ")
    {
      alert("Please Enter All The Fields");
      return false;
    }
    if(name1.match(letters))
    {
     if(ph.match(phoneno))
     {
       if (em.match(email1))
        {
          return true;
        }
        else
        {
          alert("You have entered an invalid email address!")
          return false;
        }
      return true;
     }
     else
     {
      alert("Not a valid phone number, please enter correct 10 digit number");
      //document.book.phone.focus();
      return false;
     }
    return true;
    }
    else
    {
      alert("Not a correct name ,Enter only alphabets");
      //document.Enquiry.names.focus();
      return false;
    }
   
  }

</script>


<?php

 include("../config.php");
  if(isset($_POST["submit"]))       						
  {
    $quotation_for=trim($_POST['quotation_for']);
    $name=trim($_POST['name']);
    $quantity=trim($_POST['quantity']);
    $phone=trim($_POST['phone']);
    $requirement=trim($_POST['requirement']);
   
    $id="";
    
    if($quotation_for == " ") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered which Spare Parts you Want.</small>';
    }
    elseif($name == " ") 
    {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered name.</small>';
    }
    elseif($quantity == "") {
      echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">You Did not entered qhow much Quantity You nedd .</small>';
    }
    
    elseif($phone == ""){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
    }
    elseif(is_numeric(trim($phone)) == false){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Phone Number.</small>';
    }
    elseif(strlen($phone)<10){
   echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Correct 10 digit Phone Number.</small>';
    }
    elseif($requirement == ""){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Your Requirements.</small>';
    }
   else
    {
                    $result=mysqli_query($conn,"select id from enquiryform where id=(select max(id) from enquiryform)");
                    if($row=mysqli_fetch_array($result))
                    {
                    $id=$row['id']+1;
                    }
                    $sql = "INSERT INTO enquiryform(id,quotation_for,name,quantity,phone,requirement) VALUES ('$id','$quotation_for','$name','$quantity','$phone','$requirement')";
                    if($conn->query($sql) === TRUE)
                    {
                       
                    echo '<div class="alert alert-success" style="position:absolute !important;top:50%; role="alert" id="mydiv" onclick="this.style.display = \'none\'">
                                We Will Get In Touch With You </div>';
                    }
                    
                    else{
                            echo '<div class="alert alert-danger" style="position:absolute !important;top:50%;"role="alert" id="mydiv" onclick="this.style.display = \'none\'">
                                    Sorry Failed to send Your Request ,Please try again.
                                    </div>';
                //print_r(error_get_last());
                        }

                /* if ($conn->query($sql) === TRUE) 
                    {
                        
                        
                
                    }

                    else 
                    {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        } */
                
                
    }
  //}
$conn->close();
    
  }
  ?>

</body>

</html>