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
            <img alt=""  src="images/potauto_logo_bgremoved.png" style="margin: 5px 0;">
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

   



<!--<div class="container">-->
  <!-- Trigger the modal with a button -->
<!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal -->
<!--  <div class="modal fade" id="myModal1" role="dialog">-->
<!--    <div class="modal-dialog">-->
    
      <!-- Modal content-->
<!--      <div class="modal-content">-->
<!--        <div class="modal-header">-->
<!--          <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--          <h4 class="modal-title">Modal Header</h4>-->
<!--        </div>-->
<!--        <div class="modal-body">-->
<!--          <p>Some text in the modal.</p>-->
<!--            <input type="text" id="username"  onkeyup="validateName()">-->
<!--        </div>-->
<!--        <div class="modal-footer">-->
<!--          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--        </div>-->
<!--      </div>-->
      
<!--    </div>-->
<!--  </div>-->
  
<!--</div>-->



<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade"  tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
             <form id="EnquiryForm" name="Enquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return EnquiryForm_validation();" class="needs-validation"  method="POST" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title" style="color:#27569e;">Tell us what you need, and we'll help you get quotes</h5>
                   <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>-->
                    
                </div>
                <div class="modal-body">
                    <div class=""> 
                            
                            <label class="form-label" style="color:#27569e;">I want quotes for : </label>
                            <!--id="footerEnquiryQuotationFor"   onkeyup="validateQuotationFor()" />-->

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
                                    <input name="name"  size="10" class="form-control" class="Name" id="EnquiryName" placeholder="Name *" type="text" onkeyup="validateName()" required> 
                                     <div class="invalid-feedback" id="name_error" style="display:none"> Please Enter valid Name</div>
                                </div> 
                                
                                <div class="">         
                                   <label style="color:#27569e;"> Phone * :</label>
                                    <input name="name"  size="10" class="form-control" id="footerEnquiryPhone" placeholder="Phone *" type="text" onkeyup="validatePhone()" required>
                                    
                                    <!--<input type="text" name="phone" class="form-control" placeholder="Phone *" id="footerEnquiryPhone"   required onkeyup="validatePhone()">-->
                                    <div class="invalid-feedback" id="phone_error" style="display:none"> Phone Number must be 10 digits</div>
                                </div>  
                    <div class="">
                     
                            <!-- declaration for first field -->
                            <div class="">   
                               <label class="form-label" style="color:#27569e;">Quantity : </label>
                                 <input type="number" class="form-control "  name="quantity" placeholder="Quantity" required 
                                 id="footerEnquiryQuantity"  onkeyup="validateQuantity()"/>
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
                                    <textarea placeholder="Additional details about your requirement... *" rows="2" cols="50" name="requirement" id="footerEnquiryRequirement"  onkeyup="validateRequirements()" class="form-control" required="" spellcheck="false"></textarea> 
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
      // echo "not sent email";
 //print_r(error_get_last());
        }

} 
      else 
      {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

  }
$conn->close();
    
//}



?>


<script type="text/javascript">
 function EnquiryForm_validation()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    var quotation_for1=document.Enquiry.quotation_for.value;
    var ph=document.Enquiry.phone.value;
    //alert(ph);
    //var em=document.Enquiry.email.value;  id  quotation_for   phone   name    quantity    requirement 

    var name1=document.Enquiry.name.value;
    var quantity1=document.Enquiry.quantity.value;
    var requirement1=document.Enquiry.requirement.value;
    //alert(name1);
   
    if(quotation_for1 === "" || ph === "" || quantity1 === "" || name1 === "" || requirement1 === "")
    {
      alert("Please Enter All The Fields");
      return false;
    }
    

    //{
    if(name1.match(letters))
    {
     if(ph.match(phoneno))
     {
    //    if (em.match(email1))
    //     {
    //       return true;
    //     }
    //     else
    //     {
    //       alert("You have entered an invalid email address!")
    //       return false;
    //     }
    
        if (!isNaN(quantity1))
         {
          return true;
          
        }
        else
        {
            document.getElementById("numberText").innerHTML ="Please enter Numeric value";
          alert("Please Enter only Numbers for Quanity!")
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

<script>
    
function validateName(){
   // alert("Inside fun...");
 var name = document.getElementById("EnquiryName").value;
 console.log("Name=",name);

}

 function validatePhone(){
    var phone = document.getElementById("footerEnquiryPhone").value;
    console.log("Phone=",phone);
}

function validateQuantity(){
    var quantity = document.getElementById("footerEnquiryQuantity").value;
    console.log("quantity=",quantity);
  if(quantity>=1){
     document.getElementById("quantity_error").style.display="none";
}
else{
    { document.getElementById("quantity_error").style.display="block";

    }
}
}
</script>








