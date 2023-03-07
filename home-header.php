
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
                    
                    <!-- <div class="header_account">
                        <ul>
                            <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> english <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_language">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Germany</a></li>
                                    <li><a href="#">Japanese</a></li>
                                </ul>
                            </li>
                            <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                <ul class="dropdown_currency">
                                    <li><a href="#">EUR – Euro</a></li>
                                    <li><a href="#">GBP – British Pound</a></li>
                                    <li><a href="#">INR – India Rupee</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                   <!--  <div class="header_top_links">
                        <ul>
                            <li><a href="login.html">Register</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>  -->
                    <div class="search_container">
                        <form action="#">
                           <div class="hover_category">
                            <!-- 
                           <select class="select_option" name="select" id="categori1"  onchange="javascript:handleSelect(this)">
                  
                             <option value="">Select</option>
                        <option value="Horn">Horn</option>
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
                                </select>  -->                       
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
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="index.php">Home</a>
                            </li>
                           
                            <li class="menu-item-has-children">
                                <a href="about.php">About Us</a>
                            </li>
                             <li class="menu-item-has-children">
                                <a href="ourbrands.php">Our Brands</a>
                                    <i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu()"></i>
                                    <ul class="sub_menu" id="mobile_sub_menu" style="display: none;" >
                                            <li><a href="brands/Geomex">Geomex</a></li>
                                            <li><a href="brands/Potauto">Potauto</a></li>
                                             <!--<li><a href="brands/Oxilite">Oxilite</a></li>-->
                                            <li><a href="brands/Biolite">Biolite</a></li>
                                            
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
                                <a href="contact-us.php"> Contact Us</a> 
                            </li>

                            <!-- <li class="menu-item-has-children">
                                
                            <a href="#" data-toggle="modal" data-target="#modal_box" > Download brochure </a>
                           </li> --> 

                            <li class="menu-item-has-children">
                                <a href="#">Download brochure </a><i class="fa fa-angle-down" style="float:right;cursor:pointer;" onclick="dis_submenu2()"></i>
                                    <ul class="sub_menu" id="mobile_sub_menu2">
                                    
                                    <li><a href="#" data-toggle="modal" data-target="#modal_box_potauto">Potauto</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#modal_box_biolite">Biolite</a></li>
                                    </ul>
                                </li>

                           <div class="call_support">
                        <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us info:
                        


                        
                        <a  href="tel:08884463013" style="a:visited {color: #f9cf1f} ">08884463013</a></span></p>
                    </div>
                    <div class="call_support" style="color:#f9cf1f; font-weight: bold;font-size:15px">
                    <span><i class="fa fa-envelope-o" aria-hidden="true"></i>   
                    <a href="mailto:info@potauto.in" style="a:visited {color: #f9cf1f} ">
                        info@potauto.in</a></span>
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
            
                    <div class="col-lg-3">
                    <div class="call_support text-right">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> 
                            <span>Call us: <a href="tel:08884463013">08884463013</a></span></p>
                        </div>
                    </div>
                     <div class="col-lg-2">
                    <div class="call_support text-right">
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i>   <a href="mailto:info@potauto.in">info@potauto.in</a></p>
                        </div>
                    </div>
                    <div class="col-lg-2">
                         <div class="call_support text-right offcanvas_footer" style="margin-top: 0px !important;padding-bottom:3px !important;">
                        <!-- <span><a href="#"><i class="fa fa-envelope-o"></i> info@potauto.in </a></span> -->
                        <ul style="margin-top:3px !important;">
                        <li><a class="facebook" href="https://www.facebook.com/JiomexAuto"  target="_blank"><i class="icon-facebook"></i></a></li>
                               <li><a class="" href="https://wa.me/918884463013?text=Hello"  target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                               
                               <li><a class="instagram2" href="https://www.instagram.com/jiomexautoindiapvt/"  target="_blank"><i class="icon-instagram2"></i></a></li>

                        <!-- <li><a class="facebook" href="https://www.facebook.com/JiomexAuto"><i class="icon-facebook"></i></a></li>
                               <li><a class="" href="https://wa.me/918884463013?text=Hello"><i class="fa fa-whatsapp"></i></a></li>
                               
                               <li><a class="instagram2" href="https://www.instagram.com/jiomexautoindiapvt/"><i class="icon-instagram2"></i></a></li> -->
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
                                <ul>
                                    <li><a class="active"  href="index.php">home
                                    </li>
                                  
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="ourbrands.php">Our Brands <i class="fa fa-angle-down"></i></a>
                                    <ul class="sub_menu">
                                            <li><a href="brands/Geomex">Geomex</a></li>
                                            <li><a href="brands/Potauto">Potauto</a></li>
                                             <!--<li><a href="brands/Oxilight">Oxilight</a></li>-->
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
                                        
                                    <!-- <li>
                                    <a href="#" data-toggle="modal" data-target="#modal_box"> Download brochure </a>
                                    </li> -->
                                     <li><a href="#">Download Brochure <i class="fa fa-angle-down"></i></a> 
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
                        <!-- <div class="call_support text-right">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us:  <a href="tel:08884463025">08884463025</a></span></p>
                        </div> -->
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

<!-- Download PDF Javascript Code start -->

<script>

function downloadPdf(){
        let link = document.createElement("a");
        
        link.setAttribute("download", "Potauto-Auto-Spareparts-Catalogue");
        link.href = "Download-Brouchre/Biolite-Catalogue.pdf";

        document.body.appendChild(link);
        link.click();
        link.remove();
    }
</script>
<!-- Download PDF Javascript Code End -->
<script>

   // function downloadPdf1(URL, fileName){
    function downloadPdf1()
    {
        let link = document.createElement("a");
        let fileName="Biolite-Auto-Spareparts-Catalogue";
        let URL="Download-Brouchre/Biolite-Catalogue.pdf";
     //   link.setAttribute("download", fileName);
        link.setAttribute("download", "Biolite-Auto-Spareparts-Catalogue");
        //link.href = URL;
            link.href="Download-Brouchre/Biolite-Catalogue.pdf";
        document.body.appendChild(link);
        link.click();
        link.remove();
    }
</script>

<?php include("potauto_download_brochure_form.php"); ?>
                    <?php include("biolite_download_brochure_form.php"); ?>
</body>

</html>