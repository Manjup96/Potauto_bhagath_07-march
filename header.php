
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
                                    <?php include("config.php");
                                    $sql="select * from products";
                                    $result=$conn->query($sql);if($result->num_rows>0){while($row=mysqli_fetch_assoc($result)){ ?><a href="product/<?php echo $row["Product_name"]; ?>"><?php echo $row["Product_name"]; ?></a><?php }} ?></div>
                                    <!-- <button type="submit">Search</button>  -->
                                </div>
                            </form>
                        </div> 
                        <div id="menu" class="text-left ">
                            <ul >
                                <li class="menu-item-has-children active">
                                    <a href="index.php">Home</a>
                                   
                                </li>
                                
                                <li class="menu-item-has-children">
                                    <a href="about.php">About Us</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="ourbrands.php">Our Brands </a><i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu" style="display: none;" >
                                                <li><a href="brands/Geomex">Geomex</a></li>
                                                <li><a href="brands/Potauto">Potauto</a></li>
                                                 <!--<li><a href="brands/Oxilite">Oxilite</a></li>-->
                                                <li><a href="brands/Biolite">Biolite</a></li>
                                                
                                            </ul>
                                        </li>



                                <li class="menu-item-has-children">
                                    <a href="#">Products </a><i class="fa fa-angle-down"  style="float:right;cursor:pointer;" onclick="dis_submenu1()"></i>
                                    <ul class="sub_menu"id="mobile_sub_menu1" style="display: none">
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
                                    <a href="contact-us.php"> Contact Us</a> 
                                </li>
                                <!-- <li class="menu-item-has-children">     
                                <a href="#" data-toggle="modal" data-target="#modal_box" >Download brochure </a>
                                </li> --> 

                                   <li class="menu-item-has-children">
                                    <a href="#">Download brochure </a><i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu2()"></i>
                                        <ul class="sub_menu" id="mobile_sub_menu2" style="display: none;" >
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box_potauto">Potauto</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box_biolite">Biolite</a></li>
                                        </ul>
                                    </li>

                                <div class="call_support">

                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us info : <a href="tel:08884463025">08884463025</a></span></p>

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
                            <li><a class="facebook" href="https://www.facebook.com/JiomexAuto"  target="_blank"><i class="icon-facebook"></i></a></li>
                                   <li><a class="" href="https://wa.me/918884463013?text=Hello"  target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                   
                                   <!--<li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>-->
                                   <!--<li><a class="google" href="#"><i class="icon-google"></i></a></li>-->
                                   <li><a class="instagram2" href="https://www.instagram.com/jiomexautoindiapvt/"  target="_blank"><i class="icon-instagram2"></i></a></li>
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
                                <a href="index.php"><img src="images/potautologo.jpeg" alt="" width="83%"></a>
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
                                    <ul >
                                        <li><a class="active"  href="index.php">home<!-- <i class="fa fa-angle-down"></i> --></a>

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
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="ourbrands.php">Our Brands <i class="fa fa-angle-down"></i></a> 
                                        <ul class="sub_menu">
                                                <li><a href="brands/Geomex">Geomex</a></li>
                                                <li><a href="brands/Potauto">Potauto</a></li>
                                                 <!--<li><a href="brands/Oxilite">Oxilite</a></li>-->
                                                <li><a href="brands/Biolite">Biolite</a></li>
                                                
                                            </ul>
                                        </li>
                                         <li><a href="#">Products <i class="fa fa-angle-down"></i></a>
                                         <ul class="sub_menu">
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
                                        
                                        <li><a href="contact-us.php"> Contact Us</a></li>
                                       <!--   <li>
                                         <a href="#" data-toggle="modal" data-target="#modal_box"> Download brochure </a>
                                         </li> -->
                                          <li><a href="#">Download brochure <i class="fa fa-angle-down"></i></a> 
                                        <ul class="sub_menu">
                                                <li><a href="#" data-toggle="modal" data-target="#modal_box_potauto">Potauto</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal_box_biolite">Biolite</a></li>
                                            
                                            </ul>
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
                                    $result=$conn->query($sql);if($result->num_rows>0){while($row=mysqli_fetch_assoc($result)){ ?><a href="product/<?php echo $row["Product_name"]; ?>"><?php echo $row["Product_name"]; ?></a><?php }} ?></div>
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
    <div class="modal fade" id="modal_box_potauto" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form id="Download_Brochure_Form" name="Download_Brochure" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="Download_Brochure_Form_validation();downloadPdf('Download-Brouchre/Potauto-Catalogue.pdf','Potauto-Auto-Spareparts-Catalogue')"  method="POST" novalidate="">
                 <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                    <div class="modal-header">
                    <h5 class="modal-title" style="color:#27569e;font: weight 700px; ;"> Header.pph Download Brochure Form</h5>
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

                    <!--  <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Select Brochure</label>
                                <select class="form-control" name="brochure" id="brochure">
                                    <option value="potauto brochure">Potauto Brochure</option>
                                    <option value="biolite brochure">Biolite Brochure</option>
                                </select>
                               
                            </div>
                        </div>
                    </div> -->
                        
                
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

   <div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  

    <!-- Modal HTML -->
    <div class="modal fade" id="modal_box_biolite" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form id="Download_Brochure_Form1" name="Download_Brochure1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="Download_Brochure_Form_validation1();downloadPdf1('Download-Brouchre/Biolite-Catalogue.pdf','Biolite-Auto-Spareparts-Catalogue')"  method="POST" novalidate="">
                 <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                    <div class="modal-header">
                    <h5 class="modal-title" style="color:#27569e;font: weight 700px; ;">Download Brochure Form</h5>
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

                    <!--  <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Select Brochure</label>
                                <select class="form-control" name="brochure" id="brochure">
                                    <option value="potauto brochure">Potauto Brochure</option>
                                    <option value="biolite brochure">Biolite Brochure</option>
                                </select>
                               
                            </div>
                        </div>
                    </div> -->
                        
                
                        <div class="modal-footer1" style="justify-content: center;">
                        <input type="submit"  name="submit1" id="submit1" value="Submit"  style="justify-content: center;color:#27569e;background:#f9cf1f">
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
     function dis_submenu2()
    {
      
        if (document.getElementById("mobile_sub_menu2").style.display == "none")
        {
            document.getElementById("mobile_sub_menu2").style.display = "block";
        }
        else if (document.getElementById("mobile_sub_menu2").style.display == "block")
        {
            document.getElementById("mobile_sub_menu2").style.display = "none";
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
    
    
   
    if(name1 == "" || ph == "" || em == "" )
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

 include("config.php");
  if(isset($_POST["submit"]))       						
  {
   
    $name=trim($_POST['name']);
   
    $phone=trim($_POST['phone']);
    $email=trim($_POST['email']);
    // $brochure = trim($_POST['brochure']);
   
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
                        echo '<div id="downloadBrouchre"> <a  href="Download-Brouchre/Potauto-Catalogue.pdf" 
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

    echo 
 
        '<div id="downloadBrouchre"> <a  href="Download-Brouchre/Potauto-Catalogue.pdf" download="Potauto-Auto-Spareparts-Catalogue.pdf"></a>  </div> ';
 }
</script>                    

<!-- Download_Brochure_Form_validation() start -->

<script type="text/javascript">
 function Download_Brochure_Form_validation1()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    var email1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    
    var ph=document.Download_Brochure1.phone.value;
    var em=document.Download_Brochure1.email.value;	

    var name1=document.Download_Brochure1.name.value;
    
    
   
    if(name1 == "" || ph == "" || em == "" )
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

 include("config.php");
  if(isset($_POST["submit1"]))                               
  {
   
    $name=trim($_POST['name']);
   
    $phone=trim($_POST['phone']);
    $email=trim($_POST['email']);
    // $brochure = trim($_POST['brochure']);
   
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
                        echo '<div id="downloadBrouchre"> <a  href="Download-Brouchre/Potauto-Catalogue.pdf" 
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

<script>
    
        function downloadPdf1(URL, fileName){
            let link = document.createElement("a");
            
            link.setAttribute("download", fileName);
            link.href = URL;

            document.body.appendChild(link);
            link.click();
            link.remove();
        }
    </script>