
<!-- flagship modals -->


  <div id="new_flagship_modals" class="modal fade"  tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
             <form id="flagship_Form" name="flagship_Form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="needs-validation" 
             method="POST" novalida="">
                <div class="modal-header">
                    <!--<h5 class="modal-title"> Tell us what you need, and we'll help you get quotes</h5>-->
                    <h5 class="modal-title" style="justify-content: center;color:#27569e;"> Tell us what you need, and we'll help you get quotes</h5>
                   <button id="closeModal" type="button" onclick="javascript:window.location.reload()"
                   class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                            <label class="form-label" style="color:#27569e;">I want quotes for * :</label>
                             <input type="text" name="flagship_Form_quotation_for" class="form-control" value="" required    />
                             
                    <div class=""> 
                                   <labelclass="form-label" style="color:#27569e;"> Your Name * :</label>
                                    <input name="flagship_Form_Name"  size="10" class="form-control" id="flagship_Form_Name" placeholder="Name *" type="text" required onkeyup="flagship_Form_validateName123()"> 
                                     <div class="invalid-feedback" id="flagship_Form_name_error" style="display:none"> Please Enter valid Name</div>
                                </div> 
                                
                                <div class="">         
                                   <label style="color:#27569e;"> Phone * :</label>
                                    <input name="flagship_Form_Phone" class="form-control" placeholder="Phone *" id="flagship_Form_Phone"  type="number" required onkeyup="flagship_Form_validatePhone123()">
                                    <div class="invalid-feedback" id="flagship_Form_phone_error" style="display:none"> Phone Number must be 10 digits</div>
                                </div>  
                    <div class="">
                     
                            <!-- declaration for first field -->
                            <div class="">   
                               <label class="form-label" style="color:#27569e;">Quantity * :</label>
                                 <input type="number" class="form-control "  name="flagship_Form_Quantity" placeholder="Quantity" required  id="flagship_Form_Quantity"  onkeyup="flagship_Form_validateQuantity123()"/>
                                 <div class="invalid-feedback" id="flagship_Form_quantity_error" style="display:none"> Please Enter valid Quantity</div>
                             </div>
                             
                        <!-- reducong the gap between them to zero -->
                        <span class="input-group-btn" style="width:0px;"></span>
                        <!-- declaration for second field -->
                        <input type="text" class="form-control" value="Piece" disabled />
                        <div class="invalid-feedback"> Please Enter Quantity you needed</div>
                                </div> 
                      <div class="">
                                    <label style="color:#27569e;">  Briefly describe your requirement * :</label>
                                    <textarea placeholder="Additional details about your requirement... *" rows="2" cols="50" 
                                    name="flagship_Form_Requirement" id="flagship_Form_Requirement"  onkeyup="flagship_Form_validateRequirements123()" class="form-control" required="" spellcheck="false"></textarea> 
                                    <div class="invalid-feedback" id="flagship_Form_requirement_error" style="display:none" > Please Enter your requirement </div>
                                </div>
                                            
                                            
                             </div>  <!-- modal-body end             -->
                    <div class="modal-footer1">
                <input type="submit"  name="flagship_Form_submit" id="flagship_Form_submit" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div>
                                </form>
        </div>
    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 

<script type="text/javascript">
    $('#new_flagship_modals').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    //console.log(bookId);
    $(e.currentTarget).find('input[name="flagship_Form_quotation_for"]').val(bookId);
});

</script>

<!--end flagship modals -->



<script>
 document.getElementById("flagship_Form_submit").disabled = true;
var phone_flagship_Form_check=0,name_flagship_Form_check=0,quantity_flagship_Form_check=0,
requirement_flagship_Form_check=0;

function flagship_Form_validatePhone123(){
    var phone = document.getElementById("flagship_Form_Phone").value;
   

    var phoneRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    if(phoneRegEX.test(phone))
      {
         console.log("Phone=",phone);
        document.getElementById("flagship_Form_phone_error").style.display = "none";
        phone_flagship_Form_check=1;
        flagship_Form_check();

      } else
       { document.getElementById("flagship_Form_phone_error").style.display = "block";  
       phone_flagship_Form_check=0;} 
       

}

function flagship_Form_validateName123(){

var name = document.getElementById("flagship_Form_Name").value;
 console.log("Name=",name);

var nameRegEx=  /^[a-zA-Z ]{2,30}$/;

if(nameRegEx.test(name))
  {
    // console.log("true");
  document.getElementById("flagship_Form_name_error").style.display="none";
  name_flagship_Form_check=1;
}
else
   {document.getElementById("flagship_Form_name_error").style.display="block"; 
   name_flagship_Form_check=0;
       
   }
    // console.log("Error");
flagship_Form_check();
}


function flagship_Form_validateQuantity123(){
    var quantity = document.getElementById("flagship_Form_Quantity").value;
    console.log("quantity=",quantity);
    
  if(quantity>=1){
     document.getElementById("flagship_Form_quantity_error").style.display="none";
     quantity_flagship_Form_check=1;
     
}
else{
     document.getElementById("flagship_Form_quantity_error").style.display="block";
    quantity_flagship_Form_check=0;
     
    
}

   flagship_Form_check(); 
}


function flagship_Form_validateRequirements123(){
     var requirement = document.getElementById("flagship_Form_Requirement").value;
     console.log("requirement=",requirement.length)
     if(requirement.length>5){
         document.getElementById("flagship_Form_requirement_error").style.display="none";
         requirement_flagship_Form_check=1;
     }
     else{
          document.getElementById("flagship_Form_requirement_error").style.display="block";
          requirement_flagship_Form_check=0;
     }
     
flagship_Form_check();
     
}

function flagship_Form_check(){
    console.log(name_flagship_Form_check,phone_flagship_Form_check,quantity_flagship_Form_check,requirement_flagship_Form_check)
if(quantity_flagship_Form_check==1 &&  phone_flagship_Form_check==1 && name_flagship_Form_check==1 && 
requirement_flagship_Form_check== 1)
{ document.getElementById("flagship_Form_submit").disabled = false;
}
else{
    document.getElementById("flagship_Form_submit").disabled = true;

}

}

flagship_Form_check();

</script>



<?php

 include("config.php");
  if(isset($_POST["flagship_Form_submit"]))       						
  {
   
   
    $quotation_for=trim($_POST['flagship_Form_quotation_for']);
    $name=trim($_POST['flagship_Form_Name']);
    $quantity=trim($_POST['flagship_Form_Quantity']);
    $phone=trim($_POST['flagship_Form_Phone']);
      //$url=trim($_POST['na']);
    $requirement=trim($_POST['flagship_Form_Requirement']);
   //flagship_Form_Name flagship_Form_Phone flagship_Form_Quantity flagship_Form_Requirement
   
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
