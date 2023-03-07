
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Potauto Auto Accessories </title>
    <?php include("header-links.php");?>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  -->
  
  <link rel="stylesheet" href="assets\css\AutoScroll.css">
  <!-- <link href="css\owl.carousel.css" rel="stylesheet"> -->



</head>



<style>




 
@media only screen and (max-width: 1850px) {
    .video  {
        
        height: 530px;
		width:1583px;	
    }
  }
   

@media only screen and (max-width: 420px) {
    .video  {
        max-height: 16vh;
		max-width:49vh;		
    }
   
  }
  @media only screen and (max-width: 850px) {
    .video  {
        height: 270px;
		width:820px;   	
    }
  }


  
    @media only screen and (max-width: 768px) 
    {
            /* For mobile phones: */
            [class*="col-"] 
            {
                width: 100%;
            }
    }
</style>
<style media="screen">
/* external css: flickity.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

*{
    box-sizing: border-box;
}

.carousel-cell {
  width: 100%;
  height: 200px;
  margin-right: 10px;
  border-radius: 5px;
  background-size: cover;
  background-position: center center;
  counter-increment: carousel-cell;
}


.carousel-cell:before{
    display: block;
    content: ' ';
}

.footer-links a:focus, a:hover
{
    color:#f9cf1f !important;
}

/*video {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  z-index: -1;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}*/
/*.playpause {
    background-image:url(images/play.png);
    background-repeat:no-repeat;
    width:50%;
    height:20%;
    position:absolute;
    left:0%;
    right:0%;
    top:0%;
    bottom:0%;
    margin:auto;
    background-size:contain;
    background-position: center;
}*/
  </style>
    

<body>
   
    <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
  <?php include("home-header.php");?>
    <!--header area end-->
    
    <!--top tags area start-->
   <!--  <div class="top_tags_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tags_content">
                        <ul>
                            <li><span>Top Tags:</span></li>
                            <li><a href="#">Wheels & Tires</a></li>
                            <li><a href="#">Lighting & lamp</a></li>
                            <li><a href="#">Body Parts</a></li>
                            <li><a href="#">Smart Devices</a></li>
                            <li><a href="#">Devices</a></li>
                            <li><a href="#">Repair Parts</a></li>
                            <li><a href="#">Car Engine</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


  
    <!--top tags area end-->
  <!-- carousel Banner start -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
     <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
       <div class="item active">
       <!--  <button class="active_play_btn">play</button>
<video id="banner-video" preload="auto" loop>
    <source src="images\videos\bluecar.mp4">
</video> -->
            <!-- <video width="1430" height="480" loop controls="hidden" autoplay style="height: auto;width: 100%;">
                <source src="images\videos\bluecar.mp4" type="video/mp4">
            </video> -->
          <center>
        <video class="video" playsinline loop muted id="autoplay"   >
        <source src="images\videos\bluecar.mp4" type="video/mp4" />
    </video>
  </center>

        </div>
   
   <div class="item">
            <img src="images/banner_truck.png" style="height: auto;width: 100%;" >
            <!-- <img src="images/banner_wiper.jpg" style="height: auto;width: 100%;" > -->
           
            <div class="carousel-caption">
                <!-- <div class="slider_content">
                <h1> <span>Leading Distributor of Auto Accessories</span></h1>
                <br>
                 <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="background:#27569e;color:white">Enquire for Bulk Orders</button>
                </div> -->
            </div>
        </div>

        <div class="item">
            <img src="images/ban9.png" style="height: auto;width: 100%;" >
            <!-- <img src="images/banner_wiper.jpg" style="height: auto;width: 100%;" > -->
           
            <div class="carousel-caption">
                <div class="slider_content">
                <h1> <span>Leading Distributor of Auto Accessories</span></h1>
                <br>
                 <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="background:#27569e;color:white">Enquire for Bulk Orders</button>
                </div>
            </div>
        </div>

         <div class="item">
            <!-- <img src="images/ban9.png" style="height: auto;width: 100%;" > -->
            <img src="images/banner_wiper.jpg" style="height: auto;width: 100%;" >
           
            <div class="carousel-caption">
                <div class="slider_content">
                <h1> <span>Complete Range of Premium Quality Wiper Blades.</span></h1>
                <br>
                 <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="background:#27569e;color:white">Enquire for Bulk Orders</button>
                </div>
            </div>
        </div>

<!-- <div class="item">
            <img src="images/banner_truck111.jpeg" style="height: auto;width: 100%;" >
            <div class="carousel-caption">
                <div class="slider_content">
                 <h1> <span>Leading Distributor of Auto Accessories</span></h1>
                <br>
                 <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="background:#27569e;color:white">Enquire for Bulk Orders</button> 
                </div>
            </div>
        </div>  -->
            <div class="item">
                <img src="images/banner_heavy vehicle.jpeg" style="height: auto;width: 100%;">
                <div class="carousel-caption">
                    <div class="slider_content">
                        <h2 style="font-size: 55px;line-height: 33px;font-weight: 900;margin-bottom: 6px;
    background-color: #0000004f;width: fit-content;margin-right: auto;margin-left: auto;">A <span style="font-size:25px;"> to &nbsp;</span>Z
                            
                           <br/><span style="font-size:25px;">of</span>
                           <br/><span style="font-size:36px;">AUTOMOTIVE</span><br/><span style="font-size:36px;"> ACCESSORIES</span></h2>
                            <!--<span style="font-size:20px">of</span><h2 style="font-size:45px;line-height: 52px;font-weight: 600;"><span>AUTO PARTS</span></h2>-->
                            <br>
                            <!--  <p style="color: #0095DA;">Exclusive Offer -30% Off This Week</p>  -->
                                <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire for Bulk Orders</button> 
                             <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
                    </div>
                </div>
                    
            </div>

    
    <div class="item">
    <img src="images/ban999.png" style="height: auto;width: 100%;" >
        <div class="carousel-caption">
            <div class="slider_content">
              
            <h1 style="font-size: 55px;line-height: 33px;font-weight: 900;margin-bottom: 6px;
    background-color: #0000004f;
    width: fit-content;margin-right: auto;margin-left: auto;">
                           <br/><span style="font-size:36px;">Premium Quality 
                           Automotive Lighting Systems</span></h1>
                            
                            
                        <br>
                        <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"
                             style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire for Bulk Orders</button> 
                     <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
            </div>
        </div>
             
    </div>
    <!--
    <div class="item">
    <img src="images/CAR SMART DEVICES.png" style="width:100%;height:500px; " >
        <div class="carousel-caption">
            <div class="slider_content">  
                 
                        <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"
                                        style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire for Bulk Orders</button> 
            </div>
        </div>
             
    </div> -->

   


    
    <!--<div class="item">-->
    <!--    <img src="images/ban555.jpg" style="width:100%;height:500px"  >-->
    <!--    <div class="carousel-caption">-->
    <!--        <div class="slider_content">-->
                <!--<h1 style="color:#f9cf1f"> <span>best for all auto mobile Accessories</span> </h1>-->
    <!--            <br>-->
    <!--            <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"-->
    <!--                                    style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire for Bulk Orders</button>-->
    <!--        </div>                                        -->
                                    
                                    
    <!--    </div>-->
    <!--</div> -->

        <div class="item">
        <img src="images/banner_vehicle111.png" style="height: auto;width: 100%;">
            <!-- <img src="images/banner_car.jpeg" style="height: 500px;width: 100%;"  > -->
            <div class="carousel-caption">
                <div class="slider_content">
                    <h1 class="banfont" style="margin-bottom:35%;"> <span>Your One Stop Shop</span> </h1>
                    <br>
                     <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"
                       style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire for Bulk Orders</button> 
                        <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
                </div>
            </div>
        </div>
  

 
   
  <!-- Left and right controls start -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background-image:none !important;">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background-image:none !important;">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a> 
</div>
</div>
  <!-- Left and right controls End --> 
  <!-- carousel Banner End -->
  <br><br>
<!-- 
  <div class="bs-example">
  
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
                         <input type="text" class="form-control "  name="quantity" placeholder="Quantity" />
                      
                        <span class="input-group-btn" style="width:0px;"></span>
                       
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
                <input type="submit"  name="submit" id="submit" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                   </div>
            </div>
        </div>
    </div>
</div>         -->
<!--chose us area start-->
<div class="why_choose_us" style="images/why_choose_us_background.jpg">
            <h1 style="color: #27569e;text-align: center;font-size: 48px; line-height: 1;font-weight: 700;"> Why Choose POTAUTO Products? </h1>
            
    
            
            <div class="choseus_area" style="background: #f9cf1f ;color:White">
                <div class="row">
                
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                
                                <div class="choose_icone">
                                   <img src="images/brand-removebg.png" style="height: 250px;  width: 400px; ;" alt=""> 
                                </div>
                                 <div class="choose_content" style="color:#27569e;font-size:15px"> 
                                    <h3  >Original Products</h3>
                                    <p   >
                                        Only reliable parts from trusted Aftermarket brands</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="choose_icone">
                                     <img src="images/affordable_price.png" style="height: 250px;  width: 400px; ;" alt=""> 
                                </div>
                                 <div class="choose_content" style="color:#27569e;font-size:15px">  
                                <h3  >Affordable Rates </h3>
                                    <p   >  
                                        Repairing a damaged vehicle can be expensive. Using the aftermarket products
                                         is a good solution if you're on a budget.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_chose">
                                <div class="choose_icone">
                                     <img src="images/widevarity.png" style="height: 250px;  width: 400px; ;" alt="">
                                </div>
                                 <div class="choose_content" style="color:#27569e;font-size:15px"> 
                                <h3  >Wide variety</h3>
                                    <p>  We have something for everyone when it comes to aftermarket products. 
                                        Just search for the product in the searchbar and check the offers.</p>

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
</div>

            <!--chose us area end-->      
          
    
   

     <!--Categories product area start-->
     <br>
   <!--Categories product area start-->
   <br>
    <div class="categories_product_area mb-80">
        <div class="container-fluid"> 
    
            
<h1>Horns</h1>
         <div class="row">
            <div class="col-12">
            <div class="categories_product_inner categories_column7 owl-carousel">
              <?php
            $sql="SELECT * FROM products where Product_sub_category = 'HORNS'";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
           
               <div class="single_categories_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;height: 255px;">
                        <div class="categories_product_thumb">
                            <a href="product/product.php?name=<?php echo $row["Product_name"];?>"><img src="admin/<?php echo $row["Product_image"];?>" style="height:150px;" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                             <h4 style="color: inherit"><a href="product/product.php?name=<?php echo $row["Product_name"];?>"><?php echo $row["Product_name"];?></a></h4>
                        </div>
                </div> 
            <?php
    }
  }
    ?>         
                
                   
                </div>
                </div>
            </div> <br> 
  


  <h1>FANS</h1>
         <div class="row">
            <div class="col-12">
            <div class="categories_product_inner categories_column7 owl-carousel">
              <?php
            $sql="SELECT * FROM products where Product_sub_category = 'FANS'";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
           
               <div class="single_categories_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;height: 255px;">
                        <div class="categories_product_thumb">
                            <a href="product/product.php?name=<?php echo $row["Product_name"];?>"><img src="admin/<?php echo $row["Product_image"];?>" style="height:150px;" alt=""></a>
                        </div><hr/>
                        <div class="categories_product_content">
                             <h4 style="color: inherit"><a href="product/product.php?name=<?php echo $row["Product_name"];?>"><?php echo $row["Product_name"];?></a></h4>
                        </div>
                </div> 
            <?php
    }
  }
    ?>    
  </div>
</div>
</div><br/>


 <h1>LED LIGHTS</h1>
         <div class="row">
            <div class="col-12">
            <div class="categories_product_inner categories_column7 owl-carousel">
              <?php
            $sql="SELECT * FROM products where Product_sub_category = 'LED LIGHTS'";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
           
               <div class="single_categories_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;height:255px;">
                        <div class="categories_product_thumb">
                            <a href="product/product.php?name=<?php echo $row["Product_name"];?>"><img src="admin/<?php echo $row["Product_image"];?>" style="height:150px;" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                             <h4 style="color: inherit"><a href="product/product.php?name=<?php echo $row["Product_name"];?>"><?php echo $row["Product_name"];?></a></h4>
                        </div>
                </div> 
            <?php
    }
  }
    ?>    
  </div>
</div>
</div><br/>
          

           <h1>WIPER BLADES</h1>
         <div class="row">
            <div class="col-12">
            <div class="categories_product_inner categories_column7 owl-carousel">
              <?php
            $sql="SELECT * FROM products where Product_sub_category = 'WIPER BLADES'";
        $result=$conn->query($sql);
        
        if($result->num_rows>0)
        {
             while($row = mysqli_fetch_assoc($result)) 
             {
                
        ?>
           
               <div class="single_categories_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;height:255px;">
                        <div class="categories_product_thumb">
                            <a href="product/product.php?name=<?php echo $row["Product_name"];?>"><img src="admin/<?php echo $row["Product_image"];?>" style="height:150px;" alt=""></a>
                        </div>
                        <div class="categories_product_content">
                             <h4 style="color: inherit"><a href="product/product.php?name=<?php echo $row["Product_name"];?>"><?php echo $row["Product_name"];?></a></h4>
                        </div>
                </div> 
            <?php
    }
  }
    ?>    
  </div>
</div>
</div><br/> 
      </div>
    </div>
    <!--Categories product area end-->
    
    <!--home section bg area start-->
    <div class="home_section_bg" style="background: #f9cf1f ;color:White">
        <!--product area start-->
        <div class="product_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title" style="color:#27569e">
                           <h2><span>our</span> </h2> &nbsp;<h2><span> FLAGSHIP Products</span></h2>
                            <p>POTAUTO Spares provides the widest range of 100% genuine and top-quality car Accessories available at just one tap. 
                            POTAUTO Spares hold a unique position in the automotive spares world by providing a large variety of OES and OEM manufacturing Brands.  </p>                    
                        </div>
                        <!-- <div class="product_tab_btn">
                            <ul class="nav" role="tablist" id="nav-tab">
                                <li>
                                    <a class="active" style="color:#27569e" data-bs-toggle="tab" href="#Sellers" role="tab" aria-controls="Sellers" aria-selected="true"> 
                                        Best Sellers
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab" style="color:#27569e" href="#Featured" role="tab" aria-controls="Featured" aria-selected="false">
                                        Featured Products
                                    </a>
                                </li>
                                <li>
                                    <a data-bs-toggle="tab"  style="color:#27569e" href="#Arrivals" role="tab" aria-controls="Arrivals" aria-selected="false">
                                       New Arrivals
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div> <br/><br/>
     <div class="tab-content">
        <div class="tab-pane fade show active" id="Sellers" role="tabpanel">
            <div class="row">
            <div class="col-12">
            <div class="product_carousel product_column4 owl-carousel">
                 <div class="product_items">
                 <article class="single_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;">
                        <figure>
                           <div class="product_thumb">
                                <a class="primary_img" href="product.php?subcategory=<?php echo "WIPER BLADES"?>"><img src="images/Universal-U-or-J-Hook-Auto-Windshield-Wiper-Blades.jpg" style="height:  125px;" alt=""></a>
                            </div>
                            <div class="product_content">
                                <div class="product_content_inner" style="text-align: center;">
                                 <h4 class="product_name" style="text-transform: ;color:black"><a href="product.php?subcategory=<?php echo "WIPER BLADES"?>">WIPER BLADE</a></h4>
                                  <div>  <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</button>
                                 <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->

                                     <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button> -->
                                  </div>
                                </div> 
                                                      
                            </div>
                        </figure>
                    </article>
             </div>
              <div class="product_items">
             
             <article class="single_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px,rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;">
                <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="product.php?subcategory=<?php echo "HALOGEN BULBS"?>"><img src="images/H4 HALOGEN BULBS1.jpg" style="height:  125px;" alt=""></a>
                    </div>
                    <div class="product_content">
                     <div class="product_content_inner" style="text-align: center;">
                         <h4 class="product_name" style="text-transform: ;color:black"><a href="product.php?subcategory=<?php echo "HALOGEN BULBS"?>">HID bulbs/Halogen Bulbs</a></h4>
                      <div>  <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</button>
                     <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
                       </div>
                      </div> 
                     </div>
                        </figure>
                    </article>
                </div>
                <div class="product_items">
                     <article class="single_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;">
                    <figure>
                    <div class="product_thumb">
                        <a class="primary_img" href="product.php?subcategory=<?php echo "FOG LAMP BULBS"?>"><img src="images/fog_lamp.jpg" style="height:  125px;" alt=""></a>
                    </div>
                    <div class="product_content">
                      <div class="product_content_inner" style="text-align: center;">
                       <h4 class="product_name" style="text-transform: ;color:black"><a href="product.php?subcategory=<?php echo "FOG LAMP BULBS"?>">Fog Lamps</a></h4>
                         <div>  <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</button>
                             
                          </div>
                       </div> 
                     </div>
                     </figure>
                    </article>
                </div>
            <div class="product_items"> <article class="single_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px;border-color:  #0095DA;">
                        <figure>
                            <div class="product_thumb">
                               <a class="primary_img" href="product.php?subcategory=<?php echo "LED LIGHTS"?>"><img src="images/GEOMEX LED LIGHTS 1.jpg" style="height: 125px;" alt=""></a>
                             </div>
                            <div class="product_content">
                             <div class="product_content_inner" style="text-align: center;">
                                <h4 class="product_name" style="text-transform: ;color:black"><a href="product.php?subcategory=<?php echo "LED LIGHTS"?>">LED Bulb(3 in 1) </a></h4>
                               <div>  <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</button>
                                 <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
                                 </div>
                            </div> 
                            </div>
                        </figure>
                       </article></div>
    
                   
                   
                   <div class="product_items">
                        <article class="single_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;">
                       <figure>
                        <div class="product_thumb">
                        <a class="primary_img" href="product.php?subcategory=<?php echo "FANS"?>"><img src="images/coach fan.jpg" style="height:  125px;" alt=""></a>
                         </div>
                         <div class="product_content">
                        <div class="product_content_inner" style="text-align: center;">
                        <h4 class="product_name" style="text-transform: ;color:black"><a href="product.php?subcategory=<?php echo "FANS"?>">Fans</a></h4>
                        <div>  <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</button>
                        <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
                        </div>
                         </div> 
                        </div>
                        </figure>
                    </article>
                   </div>
                     
                    
                    
                     <div class="product_items">
                          <article class="single_product" style="box-shadow: rgb(102, 153, 153) 0px 0px 10px 0px, 
                    rgb(153, 102, 153) 0px 0px 10px 0px, rgb(153, 153, 102) 0px 0px 10px 0px, rgb(102, 102, 153) 0px 0px 30px 0px; border-color:  #0095DA;">
                    <figure>
                       <div class="product_thumb">
                          <a class="primary_img" href="product.php?subcategory=<?php echo "HORNS"?>"><img src="images/PIPER HORN2.jpg" style="height:  125px;" alt=""></a>
                        </div>
                        <div class="product_content">                                                 
                        <div class="product_content_inner" style="text-align: center;">
                          <h4 class="product_name" style="text-transform: ;color:black"><a href="product.php?subcategory=<?php echo "HORNS"?>"> HORNS </a></h4>
                            <div class="product_rating"><ul></ul> </div>
                          <div>  <button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal" style="box-shadow: 4px 4px 1px 1px #0e4677;">Enquire Now</button>
                         <!-- <button data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary" data-toggle="modal"  style="box-shadow: 4px 4px 1px 1px ##f9cf1f;">Enquire Now </button>  -->
                          </div>
                        </div> 
                        </div>
                    </figure>
                    </article>
                     </div>
                    
                     
                            </div> 
                        </div> 
                        </div>
                    </div>

                </div>  

          </div> 
         </div>
        <!--product area end-->
    
        
      
        

    </div>
    <!--home section bg area end-->

   
    
   
    
    
    <!--footer area start-->
 <?php include("footer_older.php");?>
    <!--footer area end-->
   
<!-- Banner Video Autoplay Start  --> 
    
<script>
    window.onload=function(){
        document.getElementById("autoplay").play();
    }
</script>

<!-- Banner Video Autoplay End  --> 



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
      "brandName":"POTAUTO Auto India Pvt Ltd",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question about {{page_link}}",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"918884463013"
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
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- auto Scrool JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->


<script type="text/javascript">
 $('.video').parent().click(function () {
  if($(this).children(".video").get(0).paused){        $(this).children(".video").get(0).play();   $(this).children(".playpause").fadeOut();
    }else{       $(this).children(".video").get(0).pause();
  $(this).children(".playpause").fadeIn();
    }
});
</script>


</body>

</html>