
    






    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Using Grid Inside Bootstrap Modal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
  

.button {
	background-color: $blue;
	border: 2px solid white;
	border-radius: 30px;
	text-decoration: none;
	padding: 10px 28px;
	color: white;
	margin-top: 10px;
	display: inline-block;
	&:hover {
		background-color: white;
		color: $blue;
		border: 2px solid $blue;
	}
}




.bs-example{
	background-color: rgba(0, 0, 0, 0.8);
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
}

.modal-footer1 {
	justify-content:center;
	text-align: center;
	padding: 20px;
	position: relative;
	border-radius: 4px;
}

input {
	margin: 15px auto;
	display: block;
	width: 50%;
	padding: 8px;
	border: 1px solid gray;
}


   
</style>
</head>
<body>
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" role="button" class="btn btn-lg btn-primary" data-bs-toggle="modal">Enquire Now</a>

    <!-- Modal HTML -->
     <div id="myModal" class="modal fade" tabindex="-1"> 
    <!-- <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="true" style="display: block; padding-right: 0px;"> -->

        <div class="modal-dialog">
            <div class="modal-content">
            <form id="EnquiryForm" name="Enquiry" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return EnquiryForm_validation();"
                                                                                                                                     method="POST" novalidate="">
                <div class="modal-header">
                    <h5 class="modal-title">Tell us what you need, and we'll help you get quotes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
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
                            
                                <!-- <input type="text" name="quotation_for" class="form-control" placeholder="Enter Product / Service name"> -->
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
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="text" name="quantity" class="form-control">
                                <input type="text" class="form-control" placeholder="Piece">
                            </div>
                        </div>
                    </div>
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
                
    
                <a href="#" class="button">Submit</a>
                <!-- <input type="submit"  name="submit" id="submit" align="center" style="text-align:center" />  Submit Requirement<span></span> -->
                   <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                </div> 
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
 function EnquiryForm_validation()
  {
    // alert("Test Script");
    var phoneno=/^\d{10}$/;
    
    var letters = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
    
    var quotation_for1=document.Enquiry.quotation_for.value;
    var ph=document.Enquiry.phone.value;
    //var em=document.Enquiry.email.value; 	id	quotation_for	phone	name	quantity	requirement	

    var name1=document.Enquiry.name.value;
    var quantity1=document.Enquiry.quantity.value;
    var requirement1=document.Enquiry.requirement.value;
    
   
    if(quotation_for1 === " " || ph === " " || quantity1 === " " || name1 === " " || requirement1 === " ")
    {
      alert("Please Enter All The Fields");
      return false;
    }
    if(name1.match(letters))
    {
     if(ph.match(phoneno))
     {
    //   if (em.match(email1))
    //     {
    //       return true;
    //     }
    //     else
    //     {
    //       alert("You have entered an invalid email address!")
    //       return false;
    //     }
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
  if(isset($_POST["submit"]))       						
  {
    $quotation_for=trim($_POST['quotation_for']);
    $name=trim($_POST['name']);
    $quantity=trim($_POST['quantity']);
    $phone=trim($_POST['phone']);
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
    elseif($requirement == ""){
    echo '<small class="error-1 error-2" id="" onclick="this.style.display = \'none\'">Please Enter Your Requirements.</small>';
    }
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
      $message1= "Hi Team,".'<br/><br/>'."New User filled the Enquiry form. Following are the User information.".'<br/><br/>'."Name : " . $name .'<br/>'."Quantity : " .$quantity.'<br/>'.
      "Phone : ".$phone .'<br/>' ."Requirement : ".$requirement.'<br/><br/><br/>'."Regards".'<br/>'. "Potauto" .'<br/>'
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
Thank you for contacting us for Enquiry of our products, We will get back to you soon!! </span>

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
      echo '<script>alert("Thank you!, Our team will get back to you soon")</script>';
       //echo "email sent ";
      }
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

}

?>

</body>

</html>