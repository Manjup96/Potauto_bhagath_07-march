 <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">


            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           <a class="navbar-brand" href="index.php" style="width:100px;">
           
		   <!-- <h5 style="float:left;margin-top:-40px !important;margin-left:80px !important;font-size:17px;">Athishaya Builders & Developers</h5> --></a>
            <img src="images/logo.png" style="padding-left:2px;width:21%"/>
        </div>
        <!-- <span class="menubtn">&#97756;</span> -->
        <div id="navbar" class="navbar-collapse collapse">


            <ul class="nav navbar-nav navbar-right">
               
                <li class="dropdown">
				<?php
							$sql="select * from admin_login";
		$result=$conn->query($sql);
		if($result->num_rows>0)
		{
			 if($row = mysqli_fetch_assoc($result)) 
			 {
		?>
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php  echo $row["image"];?>" style="border-radius:50%;"></a>
						<?php
			 }
		}
						?>
                    <ul class="dropdown-menu">
                        <li><a href="profile.php">My account</a></li>
                        <li><a href="changepwd.php">Change password</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </li>



                
            </ul>

            <div class="sidemenures">
                        <h4 class="panel-title" ><a  href="index.php">
                        <i class="fa fa-dashboard"> </i> Dashboard</a></h4>
                    </div>
        </div>
    </div>
</nav>