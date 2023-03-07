
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





<!-- -->


<!-- modal area start-->
<!--<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">-->
<!--    <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--        <div class="modal-content">-->
<!--            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">-->
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
        <!--<form class="needs-validation" id="Download_Brochure_Form" name="Download_Brochure" action="<?php #echo htmlspecialchars($_SERVER['PHP_SELF']);?>" -->
        <!--onsubmit="Download_Brochure_Form_validation();downloadPdf('Download-Brouchre/Potauto-Catalogue.pdf','Potauto-Auto-Spareparts-Catalogue')"  method="POST" novalidate="">-->
        <form class="needs-validation" id="Download_Brochure_Form" name="Download_Brochure" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
        onsubmit="Download_Brochure_Form_validation();downloadPdf('Download-Brouchre/Potauto-Catalogue.pdf','Potauto-Auto-Spareparts-Catalogue');"           method="POST" novalidate="">
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                <div class="modal-header">
                <h5 class="modal-title" style="color:#27569e;font: weight 700px; ;">Download Brochure Form</h5>
                <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right:-50px">Close</button>
              
           </button>
                </div>
                <div class="modal-body">
                            <div class=""> 
                               <labelclass="form-label"> Your Name *</label>
                                <input name="name" id="name" size="10" class="form-control" 
                                 oninput="validateForm()" placeholder="Name *" type="text"  required> 
                                                              </div> 
                                             
                            <div class="">         
                               <label> Phone *</label>
                                <input name="phone"  id="phone" class="form-control"  
                                oninput="validateForm()" placeholder="Phone *" type="tel" required>
                               <!-- <div class="invalid-feedback"> Please Enter your Phone Number</div> -->
                             </div>  
                            <!-- <div class="">         
                                <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control"  
                            oninput="validateForm()" placeholder="Enter your Email" required>
                                <div class="invalid-feedback"> Please Enter your Email id</div>
                            </div> -->
                            <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control"  
                            oninput="validateForm()" placeholder="Enter your Email" required>
                               
                </div>
                    <div class="modal-footer1" style="justify-content: center;">
                    <!--<input type="submit"  name="submit" id="submit" value="Submit" disabled
                      style="justify-content: center;color:#27569e;background:#f9cf1f"> -->
                    <!--<button onclick="document.getElementById('link').click()">Download!</button> -->
                    <button type="submit" class="submit-button" name="submit"   disabled>Download</button>
                            
                    </input>   
                   <!--  <button type="button"  name="submit" value="Submit Requirement"  class="btn btn-primary">Submit Requirement</button> -->
                    </div>
            </div>
        </form>
    </div>
</div>                   
</div>

<script>
var button = document.querySelector('.submit-button');
 function validateForm()
 {
   
// alert("Test Script");
var phoneno=/^\d{10}$/;
var email1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;

var inputName = document.getElementById('name').value;
// var inputPhone = document.getElementById('phone').value;
 var inputEmail = document.getElementById('email').value;
 var inputPhone = document.Download_Brochure.phone.value;
 //document.Download_Brochure.phone.value;
// if (inputName.value !== "" &&  inputPhone.value !== "" && inputEmail.value !== ""  )
//if (inputName != "" ||  inputPhone != "" || inputEmail != ""  )

  // alert("Please Enter All The Fields");

  var regEx = /\S+@\S+\.\S+/; // string, white-space, @ , white-space, dot, white-space, value, string //

 
var email1 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;


   
if(inputName == "" || inputPhone == "" || inputEmail == "" )  
{
   button.style.backgroundColor = '#FFFFFF';
   button.disabled = true;
   //button.disabled = false;
   //alert("befor fields entering");
   console.log(inputName);
   console.log(inputPhone);
   console.log(inputEmail);

   console.log(" if(inputName ==  ) button.disabled = true;");
}


else 
{
   
   button.style.backgroundColor = '#27569E';
  button.disabled = false;
  // button.disabled = true;
   console.log("BEFORE entring");
}
}

//input.addEventListener('keyup', (e) => {
button.addEventListener('keyup', (e) => {
const value =      event.preventDefault();
 console.log("submitted");

})
</script>
<!--Download_Brochure  popup Form  popup End-->

<div class="bs-example">
<!-- Button HTML (to Trigger Modal) -->


<!-- Modal HTML -->
<div class="modal fade" id="modal_box_biolite" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form class="needs-validation" id="Download_Brochure_Form1" name="Download_Brochure1" 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
        onsubmit="Download_Brochure_Form_validation1();
        downloadPdf1('Download-Brouchre/Biolite-Catalogue.pdf','Biolite-Auto-Spareparts-Catalogue')"
          method="POST" novalidate="" >
            
            <!-- <form class="needs-validation" id="Download_Brochure_Form1" name="Download_Brochure1" 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="Download_Brochure_Form_validation1();"  method="POST" novalidate="" >
             -->
        <!-- <form class="needs-validation" id="Download_Brochure_Form" name="Download_Brochure" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
        onsubmit="Download_Brochure_Form_validation();downloadPdf('Download-Brouchre/Potauto-Catalogue.pdf','Potauto-Auto-Spareparts-Catalogue');"           method="POST" novalidate="">
          <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/> -->

            
             <input type="hidden" name="destination" value="<?php echo $_SERVER["REQUEST_URI"]; ?>"/>
                <div class="modal-header">
                <h5 class="modal-title" style="color:#27569e;font: weight 700px; ;">Download Brochure Form</h5>
                <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal" style="margin-right:-50px">Close</button>
              
           </button>
                </div>
                <div class="modal-body">
                            <div class=""> 
                               <labelclass="form-label"> Your Name *</label>
                                <input name="name" id="name" size="10" class="form-control" 
                                 oninput="validateForm2()" placeholder="Name *" type="text"  required> 
                                                              </div> 
                                             
                            <div class="">         
                               <label> Phone *</label>
                                <input name="phone"  id="phone" class="form-control"  
                                oninput="validateForm2()" placeholder="Phone *" type="tel" required>
                               <!-- <div class="invalid-feedback"> Please Enter your Phone Number</div> -->
                             </div>  
                            <!-- <div class="">         
                                <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control"  
                            oninput="validateForm()" placeholder="Enter your Email" required>
                                <div class="invalid-feedback"> Please Enter your Email id</div>
                            </div> -->
                            <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" id="email" class="form-control"  
                            oninput="validateForm2()" placeholder="Enter your Email" required>
                               
                </div>
                    <div class="modal-footer1" style="justify-content: center;">
                    <!--<input type="submit"  name="submit" id="submit" value="Submit" disabled
                      style="justify-content: center;color:#27569e;background:#f9cf1f"> -->
                    <!--<button onclick="document.getElementById('link').click()">Download!</button> -->
                    <button type="submit" class="submit-button2" name="submit"   disabled>Download</button>
                            
                    </input>   
                   <!--  <button type="button"  name="submit" value="Submit Requirement"  class="btn btn-primary">Submit Requirement</button> -->
                    </div>
            </div>
        </form>
    </div>
</div>                   
</div>

<script>
var button = document.querySelector('.submit-button2');
 function validateForm2()
 {
   
// alert("Test Script");
var phoneno=/^\d{10}$/;
var email1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 

var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;

var inputName = document.Download_Brochure1.name.value;
// var inputPhone = document.getElementById('phone').value;
 var inputEmail = document.Download_Brochure1.email.value;
 var inputPhone = document.Download_Brochure1.phone.value;
 //document.Download_Brochure.phone.value;
// if (inputName.value !== "" &&  inputPhone.value !== "" && inputEmail.value !== ""  )
//if (inputName != "" ||  inputPhone != "" || inputEmail != ""  )

  // alert("Please Enter All The Fields");

  var regEx = /\S+@\S+\.\S+/; // string, white-space, @ , white-space, dot, white-space, value, string //

 
var email1 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

var mobileRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;


   
if(inputName == "" || inputPhone == "" || inputEmail == "" )  
{
   button.style.backgroundColor = '#FFFFFF';
   button.disabled = true;
   //button.disabled = false;
   //alert("befor fields entering");
   console.log(inputName);
   console.log(inputPhone);
   console.log(inputEmail);

   console.log(" if(inputName ==  ) button.disabled = true;");
}


else 
{
   
   button.style.backgroundColor = '#27569E';
  button.disabled = false;
  // button.disabled = true;
   console.log("BEFORE entring");
}
}

//input.addEventListener('keyup', (e) => {
button.addEventListener('keyup', (e) => {
const value =      event.preventDefault();
 console.log("submitted");

})
</script>
<!--Download_Brochure  popup Form  popup End-->

<!--Download_Brochure  popup Form  popup End-->

<!--Download_Brochure  popup Form  popup End-->

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery.ui.autocomplete.min.js"></script> -->




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
                $result=mysqli_query($conn,"select * from download_brochure_form where id=(select max(id) from download_brochure_form)");
                if($row=mysqli_fetch_array($result))
                {
                $id=$row['id']+1;
                }
                $sql = "INSERT INTO download_brochure_form(id,name,phone,email) VALUES ('$id','$name','$phone','$email')";
               
                if($conn->query($sql) === TRUE)
                {
                   echo "<script> downloadPdf1(); </script>";
                    
                    //echo "<script> downloadPdf1('Download-Brouchre/Biolite-Catalogue.pdf','Biolite-Auto-Spareparts-Catalogue'); </script>"; 
                          
//                           echo '<script type="text/javascript">
             
//              var URL="Download-Brouchre/Biolite-Catalogue.pdf";
//  var fileName="Biolite-Auto-Spareparts-Catalogue";
//  downloadPdf1(URL,fileName);
//         </script>';
        
//          echo '<script type="text/javascript">',
//  //'jsfunction();',
//  'var URL="Download-Brouchre/Biolite-Catalogue.pdf";',
//  'var fileName="Biolite-Auto-Spareparts-Catalogue";',
//  'downloadPdf1(URL, fileName);',
 
//  '</script>' ;
   

        //potauto brocuhre pdf downalod
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
    $date1 = Date('Y-m-d');
                $result=mysqli_query($conn,"select * from download_brochure_form where id=(select max(id) from download_brochure_form)");
                if($row=mysqli_fetch_array($result))
                {
                $id=$row['id']+1;
                }
                $sql = "INSERT INTO download_brochure_form(id,name,phone,email) VALUES ('$id','$name','$phone','$email')";
               
                if($conn->query($sql) === TRUE)
                {
                     // echo '<script>alert("Thank You for contacting us we will get back to you soon!");</script>';
           $to1="contact@potauto.in";
      $subject1="New User Contact Info";
      $from1="info@potauto.in";
      $message1= "Hi Team,".'<br/><br/>'."New User filled the contact form. Following are the User information.".'<br/><br/>'."Name : " . $name .'<br/>'."Email : " .$email.'<br/>'.
      "Phone : ".$phone .'<br/><br/><br/><br/>'."Regards".'<br/>'. "Potauto" .'<br/>'
      .'<a href="">potauto.com</a>' . '<br/>' . 
      '<img src=""  style="" width="160px" height="60px"/>'. '<br/>';
  
      $headers1 = "MIME-Version: 1.0" . "\r\n";
       $headers1 .= "From: Potauto<info@potauto.in>"."\r\n";
      $headers1 .= "Content-type: text/html; charset=utf8\r\n ";
   
      if(mail($to1,$subject1,$message1,$headers1,'finfo@potauto.in'))
      {  
        
      $to=$email;
      $subject="Greetings from Potauto!!!";
      $from="contact@potauto.in";
      
      $message= '<html><body><table width="100%" style="background-color:#dadada;border-collapse:collapse;border-spacing:0;border-collapse:collapse;border-spacing:0"><tbody><tr><td align="center"><table width="682" style="border-collapse:collapse;border-spacing:0"><tbody><tr class="m_-1958935385513098443header">
<td bgcolor="#eeeeee"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="12">&nbsp;</td>
</tr><tr><td><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr><td width="35">&nbsp;</td><td width="557"><table width="100%" border="0">
<tbody><tr><center><td width="45%"><a href="" target="_blank""><img src="http://potauto.in/images/potautologo.jpeg" width="140px" ></a></td></center></tr>
</tbody></table></td><td width="35">&nbsp;</td></tr></tbody></table></td></tr><tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left;border-bottom:3px solid #2f94d7" height="18">&nbsp;</td></tr></tbody></table></td></tr><tr><td bgcolor="#ffffff"> 
<table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr><td width="20" style="font-size:0;line-height:0">&nbsp;</td><td width="640" style="font-size:0;line-height:0"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="15">&nbsp;</td>
</tr><tr><td style="background-color:#f8f8f8;border:1px solid #ebebeb"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="15">&nbsp;</td>
</tr><tr><td style="margin:0;color:#1e4a7b;font-size:20px;line-height:24px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-align:center">
Greetings from POTAUTO!!!!</td></tr><tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="5">&nbsp;</td>
</tr></tbody></table></td></tr></tbody></table>
<table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
</tr>
<tr>
<td style="vertical-align:top;margin:0;padding:0;font-size:16px;color:#231f20;line-height:24px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;text-align:left">Dear '.$name.',
</td></tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
</tr>
<tr>
<td style="margin:0;padding:0;font-size:16px;color:#231f20;line-height:24px;text-align:center;font-family:Arial,Helvetica,sans-serif;font-weight:normal">

<div style="text-align:left"></div><div style="text-align:left"><span style="background-color:transparent">
Thank you for contacting us, We will get back to you soon!! </span>

</div>
</td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
</tr>
<tr>
<td style="margin:0;padding:0;font-size:16px;color:#231f20;line-height:21px;font-family:Arial,Helvetica,sans-serif;font-weight:normal">Regards,<br><span class="il">Potauto</span> Team</td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="10">&nbsp;</td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="10">&nbsp;</td>
</tr>
</tbody></table>

</td>
<td width="20" style="font-size:0;line-height:0">&nbsp;</td>
</tr>
</tbody></table></td></tr>


<tr>
<td bgcolor="#eeeeee"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr>
<td width="35">&nbsp;</td>
<td width="557"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr>
<td><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
<tbody><tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:center" height="25">&nbsp;</td>
</tr>
<tr>
<td style="margin:0;color:#999999;font-size:11px;line-height:20px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-align:center">' . date('Y').'<span class="il">  Potauto</span> |
 | <a href="http://potauto.in/contact-us.php" style="color:#999999;font-size:11px;line-height:20px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-decoration:none" target="_blank" >Contact Us</a> <br>
 </td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
</tr>
<tr>
<td style="text-align:center"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
</table></td>
</tr>
</tbody></table></td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left;border-bottom:1px solid #dadada" height="20">&nbsp;</td>
</tr>
<tr>
<td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="25">&nbsp;</td>
</tr>

</tbody></table></td>
<td width="35">&nbsp;</td>
</tr>
</tbody></table></td>
</tr>

</tbody></table></td>
</tr>
</tbody></table></body></html>';
     
      $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "From: Potauto <contact@potauto.in>"."\r\n";
      $headers .= "Content-type: text/html; charset=utf8\r\n ";
    
      if(mail($to,$subject,$message,$headers,'fcontact@potauto.in'))
      {

 
      // echo '<div class="error-handle error-1" id="mydiv" onclick="this.style.display = \'none\'">Thank you!! Registered successfully!! <span onclick="this.parentElement.style.display=\'none\'" class="topright">&times</span></div>';
      echo '<script>alert("Thank you!, Downloading Brouchure")</script>';
       //echo "email sent ";
      }
  }
                    
                   
                
                
                else
                {
                        echo '<div class="alert alert-danger" style="position:absolute !important;top:50%;"role="alert" id="mydiv" onclick="this.style.display = \'none\'">
                                Sorry Failed to send Your Request ,Please try again.
                                </div>';
            //print_r(error_get_last());
                    }
                }
                    else 
      {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }


           
            
            
}
//}
$conn->close();
           
}
?>



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