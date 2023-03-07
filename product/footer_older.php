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
            <li style="margin-bottom:5px"><a href="about.php">About Us</a></li>
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
              <li><a class="facebook" href="https://www.facebook.com/JiomexAuto"  target="_blank"><i class="icon-facebook"></i></a></li>
                                   <li><a class="" href="https://wa.me/918884463013?text=Hello"  target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                   
                                   <li><a class="instagram2" href="https://www.instagram.com/jiomexautoindiapvt/"  target="_blank"><i class="icon-instagram2"></i></a></li>
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
             <form id="BulkEnquiryForm" name="BulkEnquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  class="needs-validation"  method="POST" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:#27569e;">Tell us what you need, and we'll help you get quotes</h5>
                   <button id='closeModal' type="button" onclick="javascript:window.location.reload()"
                   class="btn btn-danger" data-dismiss="modal">Close</button>
                   <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>-->
                    
                </div>
                <div class="modal-body">
                    <div class=""> 
                            
                            <label class="form-label" style="color:#27569e;">I want quotes for : </label>
                                <select name="quotation_for" class="form-control" >
                                    <option value="">Select Category</option>
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
                                 <div class="invalid-feedback"> Please Choose Category</div>
                                </div> 
                            
                                <!-- <input type="text" name="quotation_for" class="form-control" placeholder="Enter Product / Service name"> -->
                            
                                     <div class=""> 
                                   <labelclass="form-label" style="color:#27569e;"> Your Name * :</label>
                                    <input name="name"  size="10" class="form-control" id="footerBulkEnquiryName" placeholder="Name *" type="text" required onkeyup="validateName()"> 
                                     <div class="invalid-feedback" id="name_error" style="display:none"> Please Enter valid Name</div>
                                </div> 
                                
                                <div class="">         
                                   <label style="color:#27569e;"> Phone * :</label>
                                    <input name="phone" class="form-control" placeholder="Phone *" id="footerBulkEnquiryPhone"  type="number" required onkeyup="validatePhone()">
                                    <div class="invalid-feedback" id="phone_error" style="display:none"> Phone Number must be 10 digits</div>
                                </div>  
                    <div class="">
                     
                            <!-- declaration for first field -->
                            <div class="">   
                               <label class="form-label" style="color:#27569e;">Quantity : </label>
                                 <input type="number" class="form-control "  name="quantity" placeholder="Quantity" required  id="footerBulkEnquiryQuantity"  onkeyup="validateQuantity()"/>
                                 <div class="invalid-feedback" id="quantity_error" style="display:none"> Please Enter valid Quantity</div>
                             </div>
                             
                        <!-- reducong the gap between them to zero -->
                        <span class="input-group-btn" style="width:0px;"></span>
                        <!-- declaration for second field -->
                        <input type="text" class="form-control" value="Piece" disabled />
                        <div class="invalid-feedback"> Please Enter Quantity you needed</div>
                                </div> 
                      <div class="">
                                    <label style="color:#27569e;">  Briefly describe your requirement :</label>
                                    <textarea placeholder="Additional details about your requirement... *" rows="2" cols="50" name="footerBulkEnquiryRequirement" id="footerBulkEnquiryRequirement"  onkeyup="validateRequirements()" class="form-control" required="" spellcheck="false"></textarea> 
                                    <div class="invalid-feedback" id="requirement_error" style="display:none" > Please Enter your requirement </div>
                                </div>
                                            
                                            
                             </div>  <!-- modal-body end             -->
                    <div class="modal-footer1">
                <input type="submit"  name="submit_bulk_enquiry" id="submit_bulk_enquiry" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div>
                                </form>


        </div>
    </div>
</div>



<?php

 include("config.php");
  if(isset($_POST["submit_bulk_enquiry"]))       						
  {
    $quotation_for=trim($_POST['quotation_for']);
    $name=trim($_POST['name']);
    $quantity=trim($_POST['quantity']);
    $phone=trim($_POST['phone']);
    //   $email=trim($_POST['email']);
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
    //elseif($requirement == ""){
    //echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Your Requirements.</small>';
    //}
   else
    {
                    $result=mysqli_query($conn,"select id from enquiryform where id=(select max(id) from enquiryform)");
                    if($row=mysqli_fetch_array($result))
                    {
                    $id=$row['id']+1;
                    }
                    $sql = "INSERT INTO enquiryform(id,quotation_for,name,quantity,phone,requirement) VALUES ('$id','$quotation_for','$name','$quantity','$phone','$requirement')";
                    if ($conn->query($sql) == TRUE) 
    {
        
           $to1="contact@potauto.in";
      $subject1="New User Enquiry Info";
      $from1="info@potauto.in";
      $message1= "Hi Team,".'<br/><br/>'."New User filled the Enquiry form. Following are the User information.".'<br/><br/>'."  Quotation For the Product :" . $quotation_for .'<br/>'."Name : " . $name .'<br/>'."Quantity : " .$quantity.'<br/>'.
      "Phone : ".$phone .'<br/>' ."Requirement : ".$requirement.'<br/><br/><br/>'."Regards".'<br/>'. "Potauto" .'<br/>'
      .'<a href="">potauto.com</a>' . '<br/>' . 
      '<img src=""  style="" width="160px" height="60px"/>'. '<br/>';
  
      $headers1 = "MIME-Version: 1.0" . "\r\n";
       $headers1 .= "From: Potauto<info@potauto.in>"."\r\n";
      $headers1 .= "Content-type: text/html; charset=utf8\r\n ";
   
      if(mail($to1,$subject1,$message1,$headers1,'-finfo@potauto.in'))
      {  
        
      
        echo '<script>alert("Thank you!, Our team will get back to you soon")</script>';
  }
      else{
// echo '<div class="error-2 error-1" id="mydiv" onclick="this.style.display = \'none\'">Sorry Failed to send try again.</div>';
        echo '<script>alert("failed to submit")</script>';
      
        }

} 
      else 
      {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

  }
$conn->close();
    
//}

}

?>

<script>
 document.getElementById("submit_bulk_enquiry").disabled = true;
var phone_check=0,name_check=0,quantity_check=0,requirement_check=0;

    function validatePhone()
    {
        //alert("inside");
    var phone = document.getElementById("footerBulkEnquiryPhone").value;
    var phone1=document.BulkEnquiry.phone.value;
    console.log("Phone=",phone1);
    console.log("Phone=",phone);

    var phoneRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    if(phoneRegEX.test(phone))
      {
        
        document.getElementById("phone_error").style.display = "none";
        phone_check=1;

      } else
       { document.getElementById("phone_error").style.display = "block";  
       phone_check=0;} 
       
if(quantity_check==1 &&  phone_check==1 && name_check==1 && requirement_check== 1)
{ document.getElementById("submit_bulk_enquiry").disabled = false;
}
else{
    document.getElementById("submit_bulk_enquiry").disabled = true;

}
}

function validateName(){

var name = document.getElementById("footerBulkEnquiryName").value;
 console.log("Name=",name);

var nameRegEx=  /^[a-zA-Z ]{2,30}$/;

if(nameRegEx.test(name))
  {
    // console.log("true");
  document.getElementById("name_error").style.display="none";
  name_check=1;
}
else
   {document.getElementById("name_error").style.display="block"; 
   name_check=0;
       
   }
    // console.log("Error");

if(quantity_check==1 &&  phone_check==1 && name_check==1 && requirement_check== 1)
{ document.getElementById("submit_bulk_enquiry").disabled = false;
}
else{
    document.getElementById("submit_bulk_enquiry").disabled = true;

}
}


function validateQuantity(){
    var quantity = document.getElementById("footerBulkEnquiryQuantity").value;
    console.log("quantity=",quantity);
  if(quantity>=1){
     document.getElementById("quantity_error").style.display="none";
     quantity_check=1;
}
else{
    { document.getElementById("quantity_error").style.display="block";
    quantity_check=0;
        
    }
}


if(quantity_check==1 &&  phone_check==1 && name_check==1 && requirement_check== 1)
{ document.getElementById("submit_bulk_enquiry").disabled = false;
}
else{
    document.getElementById("submit_bulk_enquiry").disabled = true;

}
}


function validateRequirements(){
     var requirement = document.getElementById("footerBulkEnquiryRequirement").value;
     console.log("requirement=",requirement.length)
     if(requirement.length>5){
         document.getElementById("requirement_error").style.display="none";
         requirement_check=1;
     }
     else{
          document.getElementById("requirement_error").style.display="block";
          requirement_check=0;
     }
     
if(quantity_check==1 &&  phone_check==1 && name_check==1 && requirement_check== 1)
{ document.getElementById("submit_bulk_enquiry").disabled = false;
}
else{
    document.getElementById("submit_bulk_enquiry").disabled = true;

}
     
}


if(quantity_check==1 &&  phone_check==1 && name_check==1 && requirement_check== 1)
{ document.getElementById("submit_bulk_enquiry").disabled = false;
}
else{
    document.getElementById("submit_bulk_enquiry").disabled = true;

}




</script>



