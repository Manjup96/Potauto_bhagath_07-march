

<div class="bs-example">
<!-- flagship modals -->


  <div id="flagshipmodal" class="modal fade"  tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
             <form id="EnquiryForm" name="Enquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return EnquiryForm_flagshipmodal_validation();" class="needs-validation"  method="POST" novalidate="">
                <div class="modal-header">
                    <!--<h5 class="modal-title"> Tell us what you need, and we'll help you get quotes</h5>-->
                    <h5 class="modal-title" style="justify-content: center;color:#27569e;"> Tell us what you need, and we'll help you get quotes</h5>
                   <button id="closeModal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                            <label class="form-label" style="color:#27569e;">I want quotes for:</label>
                             <input type="text" name="quotation_for" class="form-control" value="" required    />
                             
                    <div class=""> 
                                   <labelclass="form-label" style="color:#27569e;"> Your Name * :</label>
                                    <input name="name"  size="10" class="form-control" id="footerEnquiryName" placeholder="Name *" type="text" required onkeyup="validateName()"> 
                                     <div class="invalid-feedback" id="name_error" style="display:none"> Please Enter valid Name</div>
                                </div> 
                                
                                <div class="">         
                                   <label style="color:#27569e;"> Phone * :</label>
                                    <input name="phone" class="form-control" placeholder="Phone *" id="footerEnquiryPhone"  type="number" required onkeyup="validatePhone()">
                                    <div class="invalid-feedback" id="phone_error" style="display:none"> Phone Number must be 10 digits</div>
                                </div>  
                    <div class="">
                     
                            <!-- declaration for first field -->
                            <div class="">   
                               <label class="form-label" style="color:#27569e;">Quantity :</label>
                                 <input type="number" class="form-control "  name="quantity" placeholder="Quantity" required  id="footerEnquiryQuantity"  onkeyup="validateQuantity()"/>
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
                <input type="submit"  name="submit_enq" id="submit_enq" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div>
                                </form>
        </div>
    </div>
</div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

<script type="text/javascript">
    $('#flagshipmodal').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    //console.log(bookId);
    $(e.currentTarget).find('input[name="quotation_for"]').val(bookId);
});

</script>

<!--end flagship modals -->



<script type="text/javascript">
 function EnquiryForm_flagshipmodal_validation()
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



<?php

 include("config.php");
  if(isset($_POST["submit_enq"]))       						
  {
    $quotation_for=trim($_POST['quotation_for']);
    $name=trim($_POST['name']);
    $quantity=trim($_POST['quantity']);
    $phone=trim($_POST['phone']);
      //$url=trim($_POST['na']);
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
   // elseif($requirement == ""){
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
                    if ($conn->query($sql) === TRUE) 
    {
         // echo '<script>alert("Thank You for contacting us we will get back to you soon!");</script>';
           $to1="contact@potauto.in";
      $subject1="New User Enquiry Info";
      $from1="info@potauto.in";
      $message1= "Hi Team,".'<br/><br/>'."New User filled the Enquiry form. Following are the User information.".'<br/><br/>'."Quotation For Product:".$quotation_for.'<br/>'."Name : " . $name .'<br/>'."Quantity : " .$quantity.'<br/>'.
      "Phone : ".$phone .'<br/>' ."Requirement : ".$requirement.'<br/><br/><br/>'."Regards".'<br/>'. "Potauto" .'<br/>'
      .'<a href="">potauto.com</a>' . '<br/>' . 
      '<img src=""  style="" width="160px" height="60px"/>'. '<br/>';
  
      $headers1 = "MIME-Version: 1.0" . "\r\n";
       $headers1 .= "From: Potauto<info@potauto.in>"."\r\n";
      $headers1 .= "Content-type: text/html; charset=utf8\r\n ";
   
      if(mail($to1,$subject1,$message1,$headers1,'-finfo@potauto.in'))
      {  
        
    //   $to=$email;
    //   $subject="Greetings from Potauto!!!";
    //   $from="contact@potauto.in";
      
//       $message= '<html><body><table width="100%" style="background-color:#dadada;border-collapse:collapse;border-spacing:0;border-collapse:collapse;border-spacing:0"><tbody><tr><td align="center"><table width="682" style="border-collapse:collapse;border-spacing:0"><tbody><tr class="m_-1958935385513098443header">
// <td bgcolor="#eeeeee"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="12">&nbsp;</td>
// </tr><tr><td><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr><td width="35">&nbsp;</td><td width="557"><table width="100%" border="0">
// <tbody><tr><center><td width="45%"><a href="" target="_blank""><img src="http://potauto.in/images/potautologo.jpeg" width="140px" ></a></td></center></tr>
// </tbody></table></td><td width="35">&nbsp;</td></tr></tbody></table></td></tr><tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left;border-bottom:3px solid #2f94d7" height="18">&nbsp;</td></tr></tbody></table></td></tr><tr><td bgcolor="#ffffff"> 
// <table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr><td width="20" style="font-size:0;line-height:0">&nbsp;</td><td width="640" style="font-size:0;line-height:0"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="15">&nbsp;</td>
// </tr><tr><td style="background-color:#f8f8f8;border:1px solid #ebebeb"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr><td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="15">&nbsp;</td>
// </tr><tr><td style="margin:0;color:#1e4a7b;font-size:20px;line-height:24px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-align:center">
// Greetings from POTAUTO!!!!</td></tr><tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="5">&nbsp;</td>
// </tr></tbody></table></td></tr></tbody></table>
// <table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
// </tr>
// <tr>
// <td style="vertical-align:top;margin:0;padding:0;font-size:16px;color:#231f20;line-height:24px;font-family:Arial,Helvetica,sans-serif;font-weight:normal;text-align:left">Dear '.$name.',
// </td></tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
// </tr>
// <tr>
// <td style="margin:0;padding:0;font-size:16px;color:#231f20;line-height:24px;text-align:center;font-family:Arial,Helvetica,sans-serif;font-weight:normal">

// <div style="text-align:left"></div><div style="text-align:left"><span style="background-color:transparent">
// Thank you for contacting us for Enquiry of our products, We will get back to you soon!! </span>

// </div>
// </td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
// </tr>
// <tr>
// <td style="margin:0;padding:0;font-size:16px;color:#231f20;line-height:21px;font-family:Arial,Helvetica,sans-serif;font-weight:normal">Regards,<br><span class="il">Potauto</span> Team</td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="10">&nbsp;</td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="10">&nbsp;</td>
// </tr>
// </tbody></table>

// </td>
// <td width="20" style="font-size:0;line-height:0">&nbsp;</td>
// </tr>
// </tbody></table></td></tr>


// <tr>
// <td bgcolor="#eeeeee"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr>
// <td width="35">&nbsp;</td>
// <td width="557"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr>
// <td><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// <tbody><tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:center" height="25">&nbsp;</td>
// </tr>
// <tr>
// <td style="margin:0;color:#999999;font-size:11px;line-height:20px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-align:center">' . date('Y').'<span class="il">  Potauto</span> |
//  | <a href="http://potauto.in/contact-us.php" style="color:#999999;font-size:11px;line-height:20px;font-family:Arial,Helvetica,sans-serif;font-style:normal;font-weight:normal;text-decoration:none" target="_blank" >Contact Us</a> <br>
//  </td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="20">&nbsp;</td>
// </tr>
// <tr>
// <td style="text-align:center"><table width="100%" border="0" style="border-collapse:collapse;border-spacing:0">
// </table></td>
// </tr>
// </tbody></table></td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left;border-bottom:1px solid #dadada" height="20">&nbsp;</td>
// </tr>
// <tr>
// <td style="line-height:0;font-size:0;vertical-align:top;padding:0px;text-align:left" height="25">&nbsp;</td>
// </tr>

// </tbody></table></td>
// <td width="35">&nbsp;</td>
// </tr>
// </tbody></table></td>
// </tr>

// </tbody></table></td>
// </tr>
// </tbody></table></body></html>';
     
    //   $headers = "MIME-Version: 1.0" . "\r\n";
    //   $headers .= "From: Potauto <contact@potauto.in>"."\r\n";
    //   $headers .= "Content-type: text/html; charset=utf8\r\n ";
    
    //   if(mail($to,$subject,$message,$headers,'-fcontact@potauto.in'))
    //   {

 
    //   // echo '<div class="error-handle error-1" id="mydiv" onclick="this.style.display = \'none\'">Thank you!! Registered successfully!! <span onclick="this.parentElement.style.display=\'none\'" class="topright">&times</span></div>';
    
    //   //echo "email sent ";
    //   }
      
        // echo '<script>alert("Thank you!, Our team will get back to you soon")</script>';
        //header("Location: $url");
       
  }
      else{
// echo '<div class="error-2 error-1" id="mydiv" onclick="this.style.display = \'none\'">Sorry Failed to send try again.</div>';
        echo '<script>alert("failed to submit")</script>';
        header("Location: $url");
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

}

?>

<script>
 document.getElementById("submit_enq").disabled = true;
var phone_check=0,name_check=0,quantity_check=0,requirement_check=0;

    function validatePhone(){
    var phone = document.getElementById("footerEnquiryPhone").value;
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
{ document.getElementById("submit_enq").disabled = false;
}
else{
    document.getElementById("submit_enq").disabled = true;

}
}

function validateName(){

var name = document.getElementById("footerEnquiryName").value;
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
{ document.getElementById("submit_enq").disabled = false;
}
else{
    document.getElementById("submit_enq").disabled = true;

}
}


function validateQuantity(){
    var quantity = document.getElementById("footerEnquiryQuantity").value;
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
{ document.getElementById("submit_enq").disabled = false;
}
else{
    document.getElementById("submit_enq").disabled = true;

}
}


function validateRequirements(){
     var requirement = document.getElementById("footerEnquiryRequirement").value;
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
{ document.getElementById("submit_enq").disabled = false;
}
else{
    document.getElementById("submit_enq").disabled = true;

}
     
}

if(quantity_check==1 &&  phone_check==1 && name_check==1 && requirement_check== 1)
{ document.getElementById("submit_enq").disabled = false;
}
else{
    document.getElementById("submit_enq").disabled = true;

}




</script>
