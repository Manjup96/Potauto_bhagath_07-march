
<!-- flagship modals -->


  <div id="ourflagship_products" class="modal fade"  tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
             <form id="EnquiryForm" name="Enquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="needs-validation" 
             method="POST" novalida="">
                <div class="modal-header">
                    <!--<h5 class="modal-title"> Tell us what you need, and we'll help you get quotes</h5>-->
                    <h5 class="modal-title" style="justify-content: center;color:#27569e;"> Tell us what you need, and we'll help you get quotes</h5>
                   <button id="closeModal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                            <label class="form-label" style="color:#27569e;">I want quotes for * :</label>
                             <input type="text" name="quotation_for" class="form-control" value="" required    />
                             
                    <div class=""> 
                                   <labelclass="form-label" style="color:#27569e;"> Your Name * :</label>
                                    <input name="name"  size="10" class="form-control" id="footerEnquiryName123" placeholder="Name *" type="text" required onkeyup="validateName123()"> 
                                     <div class="invalid-feedback" id="name_error123" style="display:none"> Please Enter valid Name</div>
                                </div> 
                                
                                <div class="">         
                                   <label style="color:#27569e;"> Phone * :</label>
                                    <input name="phone" class="form-control" placeholder="Phone *" id="footerEnquiryPhone123"  type="number" required onkeyup="validatePhone123()">
                                    <div class="invalid-feedback" id="phone_error123" style="display:none"> Phone Number must be 10 digits</div>
                                </div>  
                    <div class="">
                     
                            <!-- declaration for first field -->
                            <div class="">   
                               <label class="form-label" style="color:#27569e;">Quantity * :</label>
                                 <input type="number" class="form-control "  name="quantity" placeholder="Quantity" required  id="footerEnquiryQuantity123"  onkeyup="validateQuantity123()"/>
                                 <div class="invalid-feedback" id="quantity_error123" style="display:none"> Please Enter valid Quantity</div>
                             </div>
                             
                        <!-- reducong the gap between them to zero -->
                        <span class="input-group-btn" style="width:0px;"></span>
                        <!-- declaration for second field -->
                        <input type="text" class="form-control" value="Piece" disabled />
                        <div class="invalid-feedback"> Please Enter Quantity you needed</div>
                                </div> 
                      <div class="">
                                    <label style="color:#27569e;">  Briefly describe your requirement * :</label>
                                    <textarea placeholder="Additional details about your requirement... *" rows="2" cols="50" name="requirement" id="footerEnquiryRequirement123"  onkeyup="validateRequirements123()" class="form-control" required="" spellcheck="false"></textarea> 
                                    <div class="invalid-feedback" id="requirement_error123" style="display:none" > Please Enter your requirement </div>
                                </div>
                                            
                                            
                             </div>  <!-- modal-body end             -->
                    <div class="modal-footer1">
                <input type="submit"  name="submit_enq123" id="submit_enq123" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div>
                                </form>
        </div>
    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

<script type="text/javascript">
    $('#ourflagship_products').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    //console.log(bookId);
    $(e.currentTarget).find('input[name="quotation_for"]').val(bookId);
});

</script>

<!--end flagship modals -->



<script>
 document.getElementById("submit_enq123").disabled = true;
var phone_check123=0,name_check123=0,quantity_check123=0,requirement_check123=0;

function validatePhone123(){
    var phone = document.getElementById("footerEnquiryPhone123").value;
   

    var phoneRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    if(phoneRegEX.test(phone))
      {
         console.log("Phone=",phone);
        document.getElementById("phone_error123").style.display = "none";
        phone_check123=1;
        check123();

      } else
       { document.getElementById("phone_error123").style.display = "block";  
       phone_check123=0;} 
       

}

function validateName123(){

var name = document.getElementById("footerEnquiryName123").value;
 console.log("Name=",name);

var nameRegEx=  /^[a-zA-Z ]{2,30}$/;

if(nameRegEx.test(name))
  {
    // console.log("true");
  document.getElementById("name_error123").style.display="none";
  name_check123=1;
}
else
   {document.getElementById("name_error123").style.display="block"; 
   name_check123=0;
       
   }
    // console.log("Error");
check123();
}


function validateQuantity123(){
    var quantity = document.getElementById("footerEnquiryQuantity123").value;
    console.log("quantity=",quantity);
    
  if(quantity>=1){
     document.getElementById("quantity_error123").style.display="none";
     quantity_check123=1;
     
}
else{
     document.getElementById("quantity_error123").style.display="block";
    quantity_check123=0;
     
    
}

   check123(); 
}


function validateRequirements123(){
     var requirement = document.getElementById("footerEnquiryRequirement123").value;
     console.log("requirement=",requirement.length)
     if(requirement.length>5){
         document.getElementById("requirement_error123").style.display="none";
         requirement_check123=1;
     }
     else{
          document.getElementById("requirement_error123").style.display="block";
          requirement_check123=0;
     }
     
check123();
     
}

function check123(){
    console.log(name_check123,phone_check123,quantity_check123,requirement_check123)
if(quantity_check123==1 &&  phone_check123==1 && name_check123==1 && requirement_check123== 1)
{ document.getElementById("submit_enq123").disabled = false;
}
else{
    document.getElementById("submit_enq123").disabled = true;

}

}

check123();
</script>



<?php

 include("config.php");
  if(isset($_POST["submit_enq123"]))       						
  {
   
    $quotation_for=trim($_POST['quotation_for']);
    $name=trim($_POST['name']);
    $quantity=trim($_POST['quantity']);
    $phone=trim($_POST['phone']);
      //$url=trim($_POST['na']);
    $requirement=trim($_POST['requirement']);
   
    $id="";
    
                    $result=mysqli_query($conn,"select id from enquiryform where id=(select max(id) from enquiryform)");
                    if($row=mysqli_fetch_array($result))
                    {
                    $id=$row['id']+1;
                    }
                    $sql = "INSERT INTO enquiryform(id,quotation_for,name,quantity,phone,requirement) VALUES ('$id','$quotation_for','$name','$quantity','$phone','$requirement')";
                    if ($conn->query($sql) === TRUE) 
    {
          //echo '<script>alert("Thank You for contacting us we will get back to you soon!");</script>';
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
        
         echo '<script>alert("Thank you!, Our team will get back to you soon")</script>';
       
       
  }
      else{
        echo '<script>alert("failed to submit")</script>';
       // header("Location: $url");
        }

} 
      else 
      {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

  }
$conn->close();
    




?>
