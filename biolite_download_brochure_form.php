

<!-- Button HTML (to Trigger Modal) -->

<!-- biolite_download_brochure_form.php -->
<!-- Modal HTML -->
<div class="modal fade" id="modal_box_biolite" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form class="needs-validation" id="Download_Brochure1" name="Download_Brochure1" 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" 
        onsubmit="downloadPdf_Biolite_Catalogue('Download-Brouchre/Biolite-Catalogue.pdf','Biolite-Auto-Spareparts-Catalogue')"
          method="POST" novalidate="" >
            
            
                    
             <input type="hidden" name="destination" value="<?php #echo $_SERVER["REQUEST_URI"]; ?>"/>
                <div class="modal-header">
                <h5 class="modal-title" style="color:#27569e;font: weight 700px; ;">Download Biolite Brochure Form</h5>
                <button id='closeModal' type="button" onclick="javascript:window.location.reload()"
                class="btn btn-danger" data-dismiss="modal" style="margin-right:-50px">Close</button>             
           
                </div>
                <div class="modal-body">
                           
                <div class=""> 
                                   <labelclass="form-label"> Your Name *</label>
                                    <input name="biolitename"  size="10" class="form-control" id="biolitename" placeholder="Name *" type="text" required onkeyup="biolite_validateName()"> 
                                     <div class="invalid-feedback" id="biolite_name_error" style="display:none"> Please Enter  characters only for Name</div>
                                </div> 
                                
                                <div class="">         
                                   <label> Phone *</label>
                                    <input name="biolitephone" class="form-control" placeholder="Phone *" id="biolitephone"  type="number" required onkeyup="biolite_validatePhone()">
                                    <div class="invalid-feedback" id="biolite_phone_error" style="display:none"> Please enter 10-digit Phone Number </div>
                                </div>  
                    
                            
                            <div class="">
                            <label>Email *</label>
                             <input type="email" name="bioliteemail" id="bioliteemail" class="form-control"  
                            placeholder="Enter your Email" required onkeyup="biolite_validateEmail()">
                             <div class="invalid-feedback"  id="biolite_email_error" style="display:none">
                              Please Enter correct email </div>
                              </div>
                            
                              </div>
                    <div class="modal-footer1" style="justify-content: center;">
                    <!--<input type="submit"  name="submit" id="submit" value="Submit" disabled
                      style="justify-content: center;color:#27569e;background:#f9cf1f"> -->
                    <!--<button onclick="document.getElementById('link').click()">Download!</button> -->
                    <button type="submit" class="submit-button2" name="submit_biolite"   id="submit_biolite" disabled>Download</button>
                            <!--id="submit_biolite"-->
                    </input>   
                   <!--  <button type="button"  name="submit" value="Submit Requirement"  class="btn btn-primary">Submit Requirement</button> -->
                    </div>
            
        </form>
    </div>
</div>                   
</div>


<!-- Download_Brochure_Form_validation() start -->

                                
<script>
   document.getElementById("submit_biolite").disabled = true;
  var biolite_phone_check=0,biolite_name_check=0,biolite_email_check=0;
  var regEx = /\S+@\S+\.\S+/; // string, white-space, @ , white-space, dot, white-space, value, string //
      function biolite_validatePhone(){
      var phone = document.getElementById("biolitephone").value;
      console.log("Phone=",phone);
  
      var phoneRegEX =/^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
  
      if(phoneRegEX.test(phone))
        {
          
          document.getElementById("biolite_phone_error").style.display = "none";
          biolite_phone_check=1;
  
        } else
         { document.getElementById("biolite_phone_error").style.display = "block";  
         biolite_phone_check=0;} 
         
  if( biolite_phone_check==1 && biolite_name_check==1 && biolite_email_check==1)
  { document.getElementById("submit_biolite").disabled = false;
  }
  else{
      document.getElementById("submit_biolite").disabled = true;
  
  }
  }
  
  function biolite_validateName(){
  
  var name = document.getElementById("biolitename").value;
   console.log("Name=",name);
  
  var nameRegEx=  /^[a-zA-Z ]{2,30}$/;
  
  if(nameRegEx.test(name))
    {
      // console.log("true");
    document.getElementById("biolite_name_error").style.display="none";
    biolite_name_check=1;
  }
  else
     {document.getElementById("biolite_name_error").style.display="block"; 
     biolite_name_check=0;
         
     }
      // console.log("Error");
  
if( biolite_phone_check==1 && biolite_name_check==1 && biolite_email_check==1)
  { document.getElementById("submit_biolite").disabled = false;
  }
  else{
      document.getElementById("submit_biolite").disabled = true;
  
  }
  }
  
  
  
  
function biolite_validateEmail() {
    var email = document.getElementById("bioliteemail").value; //tenant
    console.log("Email =",email);
        var regEx = /\S+@\S+\.\S+/; // string, white-space, @ , white-space, dot, white-space, value, string //
    var emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(emailRegEx.test(email))
    {
        console.log("Email=",email);
        if (regEx.test(email))
        {
            console.log("ph=",biolite_phone_check,biolite_name_check,biolite_email_check);
        document.getElementById("biolite_email_error").style.display ="none";
        biolite_email_check=1;
        }

    }else
    {
        document.getElementById("biolite_email_error").style.display = "block";
        biolite_email_check=0;
    }

  
 if( biolite_phone_check==1 && biolite_name_check==1 && biolite_email_check==1)
  { document.getElementById("submit_biolite").disabled = false;
  }
  else{
      document.getElementById("submit_biolite").disabled = true;
  
  }
  }
  
  
//var form = document.querySelector('.form');

  </script>
<?php

include("config.php");
if(isset($_POST["submit_biolite"]))   
{

$name=trim($_POST['biolitename']);

$phone=trim($_POST['biolitephone']);
$email=trim($_POST['bioliteemail']);

$id="";
 if(!empty($email))
               
{
   // $date1 = Date('Y-m-d');
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
      echo '<script>alert("Thank you!, Downloading Biolite Brouchure")</script>';
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

$conn->close();
           
}
?>


<script>
    
        function downloadPdf_Biolite_Catalogue(URL, fileName){
            let link = document.createElement("a");
            
            link.setAttribute("download", fileName);
            link.href = URL;

            document.body.appendChild(link);
            link.click();
            link.remove();
        }
    </script>
            
            