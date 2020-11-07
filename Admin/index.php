<?php include ('header.php');?>

<body style="background-image:url('ttu-images/TTU.JPG');">
    

    <div class="container">
        
        <div class="row">
            <h1 align="center">&nbsp;&nbsp;&nbsp;<img src="ttu-images/logo.JPEG" width="150" height="150" class="img-circle">
               
            </h1>
                 
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title"><b>Admin Login</b></h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Please Enter your Username" name="username" required = "true" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Password" name="password" required = "true" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('querylogin.php');?>
                        </form>
                        <div align="center"><br/><a href="forgot.php"  style = "color: darkblue;text-decoration:none" >Forgot password?</a></div>
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



