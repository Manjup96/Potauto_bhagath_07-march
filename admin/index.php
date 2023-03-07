
<!DOCTYPE html>

<?php
session_start(); 

if(!isset($_SESSION['username'])){
   header("Location:login.html");
}
else
{
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
}
include("config.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
				
        <meta name="description" content="">
        <meta name="keywords" content="">
     
        <link rel="icon" href="images/favicon.png">
        <title>Dashboard</title>
        <link href="css/bootstrap.css" rel="stylesheet">
                <link href="css/style.css" rel="stylesheet">
        <link href="lib/dialogue/bootstrap-dialog.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Hind:400,500,600,300,700' rel='stylesheet' type='text/css'>
       
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>

<body>
 <?php include("menu.php");?>
    <div class="container-fluid">
        <div class="row"> 
        <?php include("sidemenu.php");?>
        <div class="col-sm-9 col-md-10 page-content">
        <div id="flash-message-wrapper"></div>
    
    <div class="panel panel-default custom-panel">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <div class="row">
                            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge"> <i class="fa fa-list-ul" aria-hidden="true"></i></div>
                                    <div> View Products</div>
                                </div>
                            </div>
                        </div>
                        <a href="view-products.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge">  <i class="fa fa-question-circle"></i> </div>
                                    <div>View Enquiries</div>
                                </div>
                            </div>
                        </div>
                        <a href="view-enquiry.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge"><i class="fa fa-user"> </i></div>
                                    <div>View Contact Leads</div>
                                </div>
                            </div>
                        </div>
                        <a href="view-contacts.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                      <div class="col-lg-3 col-md-6">
                    <div class="panel panel-aqua">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div class="huge">  <i class="fa fa-file-text-o"></i> </div>
                                    <div>View Download Brochure requests</div>
                                </div>
                            </div>
                        </div>
                        <a href="View-download-brochure.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
       <?php include("footer.php");?>
        
        <!--Config-->
        <!--<script type="text/javascript">
            var config = {
                admin_url: 'http://127.0.0.1:2017/MYTASTEBUDDY/',
                //token: 'e3e097022fdd359cc3772c7630bff940',
                //pusher_key: '3f83d9544659d6e0f6fe',
                //pusher_channel: 'administrator',
                base_url: 'http://127.0.0.1:2017/MYTASTEBUDDY/administrator/admin_login'
            };
        </script> -->

    <!--<audio src="http://foodday-v2.codebases.com/administrator/beep.wav" id="order-beep"></audio>-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgWsb5IHqZN2237amDE4wLHwLWTX0d-dE&amp;libraries=places" type="text/javascript"></script>
    <script src="lib/jquery-ui/jquery-ui.js" type="text/javascript" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://js.pusher.com/3.1/pusher.min.js"></script>
    <!--<script type="text/javascript" src="js/app.js"></script>-->
</body>
</html>