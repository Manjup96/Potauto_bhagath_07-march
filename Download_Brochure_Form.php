<!--Download_Brochure  popup Form  start-->

<button data-target="#myModal" role="button" class="btn btn-primary" data-toggle="modal"
                                                                            >Enquire Now</button>

    
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
  

    <!-- Modal HTML -->
    <div id="myModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                 
            <form id="Download_Brochure_Form" name="Download_Brochure" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return Download_Brochure_Form_validation();"  class="needs-validation" 
            method="POST" novalidate="">
                
                    <div class="modal-header">
                            <h5 class="modal-title" style="color:#f9cf1f;">onclick in down header Download Brochure Form</h5>
                         <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="tel" name="phone" class="form-control"  placeholder="Enter your Mobile Number">
                                    </div>
                                </div>
                        </div>
                            
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                               
                            </div>
                        </div>
                    </div>
                        
                
                        <div class="modal-footer1" style="justify-content: center;">
                        <input type="submit"  name="submit" id="submit" value="Submit" style="justify-content: center;color:#27569e;background:#f9cf1f"/>
                            <!-- <button type="button"  name="submit" value="Submit Requirement" class="btn btn-primary">Submit Requirement</button> -->
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

    <!--Download_Brochure  popup Form  popup End-->