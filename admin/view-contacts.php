
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
         <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <body>
       
       <?php include("menu.php");?>
        <div class="container-fluid">
            <div class="row">
                
             <?php include("sidemenu.php");?>


	<div class="col-sm-9 col-md-10 page-content">
                   
  
			<div class="panel panel-default">
                <div class="panel-heading"><h3>View Contact Leads</h3>
<!-- <form class="form-horizontal" action="barcode_excel.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  
                            <div class="col-md-offset-10">
                                <input type="submit" name="Export" class="btn btn-success" value="Export to CSV"/>
                            </div>
                                      
            </form>  -->

                </div>
                <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                     <thead>
                      <tr>
                         <!-- <th width="7%">No</th> -->
                         <th>Date</th>
                         <th>Name</th>
              						<th>Email</th>
                          <th>Phone Number</th>
              						<th>Message</th>
              						
              						<th>Action</th>
                        </tr>
                       </thead>
					<tbody>
									
		<?php
        //chnage this query -- ok, from prodcuts table v have to get d data right?yesand to 
			$sql="SELECT * FROM contact";
		$result=$conn->query($sql);
		
		if($result->num_rows>0)
		{
			 while($row = mysqli_fetch_assoc($result)) 
			 {
			 	
		?>
		
						<tr>
                                         
						<td><?php echo $row["date1"];?>"</td>
             <td><?php echo $row["name"] ?></td>
						<td><?php echo $row["email"] ?></td>
            <td><?php echo $row["phone"] ?></td>
						<td><?php echo $row["message"];?></td>
						<td> 
			    		 	<a class="btn btn-danger" style="padding:2px 4px !important;" href="del_product.php?id=<?php echo $row["id"] ?>"> <i class="fa fa-trash white trash"></i> </a>
			    	</td>
                         </tr>
            <?php
			 }
		}	
		
		else
		{
		    ?>
		    <tr>
		        <td colspan="5"><? echo "No Records Found";?></td>
		    </tr>
		    <?php
		}
		?>
                                    </tbody>
									
                                </table>
                            </div>
                        </div>
                    </div>
	</div>
            </div>
        </div>

        <?php include("footer.php");?>
			
			<script src="js/jquery.min.js"></script>
			
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgWsb5IHqZN2237amDE4wLHwLWTX0d-dE&amp;libraries=places" type="text/javascript"></script>
    <script src="lib/jquery-ui/jquery-ui.js" type="text/javascript" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
        <script src="https://js.pusher.com/3.1/pusher.min.js"></script>
    <!--<script type="text/javascript" src="js/app.js"></script>-->

     <script src="js/dataTables/jquery.dataTables.min.js"></script>

       <script type="text/javascript">
            $(document).ready(function () {
  $('#dataTables-example').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

            $('#dataTables-example').DataTable({
  "pageLength": 10,
  "order": [0, 'desc'],
  "ordering": true,
  "drawCallback": function( settings ) {
       $("#dataTables-example tbody tr:first").insertAfter($("#dataTables-example tr:last"));
    }
});
        </script>

</body>
</html>