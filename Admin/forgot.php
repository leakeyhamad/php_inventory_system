<?php include ('header.php');?>

<body style="background-image:url('ttu-images/TTU.JPG');">
    

    <div class="container">
        
        <div class="row">
            <h1 align="center">&nbsp;&nbsp;&nbsp;<img src="ttu-images/logo.JPEG" width="150" height="150" class="img-circle">
               
            </h1>
                 
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title"><b>Password Reset</b></h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" required = "true" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "password" >New Password</label>
										<input class="form-control" placeholder="New Password" name="new_password" type="password" required = "true" value="">
                                </div>
                                <div class="form-group">
									<label for = "confirm" >Confirm Password</label>
										<input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password" required = "true" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "reset">Reset</a>
								
								
                            </fieldset>
							
									<?php include ('reset.php');?>
                        </form>
                        <div align="center"><br/><a href="index.php"  style = "color: darkblue;text-decoration:none" >Login</a></div>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
        </div>
    <div id="footer">
        <div class="bottom_addr" align="center"><font color="white"><b>Copyright&nbsp;&copy; <?php echo date("Y");?>. All Rights Reserved</b></font></div>
</div>

  <?php include ('script.php');?>

</body>



