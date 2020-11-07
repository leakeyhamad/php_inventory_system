
<?php include ('session.php');?>
<?php include ('header.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('sidebar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><center><img src="ttu-images/logoo.JPEG" width="100" height="100"></center>
            
					
                </div>
				
				<button class="btn btn-success" data-toggle="modal" data-target="#add_user">Add new admin</button>
				<?php include ('add_admin.php');?>
                <button class="btn btn-success" data-toggle="modal" data-target="#change_pass">Change Password</button>
				<?php include ('change_password.php');?>
                <button class="btn btn-success" data-toggle="modal" data-target="#add_user"><a href="logout.php" style = "color: white; text-decoration:none" >Logout</a></button>

                <!-- /.col-lg-12 -->
			
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														System Administrators
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
										require 'config.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM admin ORDER BY admin_id DESC");
										while($row = $query->fetch_array()){
										$admin_id=$row['admin_id'];
										?>
											
					    <td><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['password'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                           
					   
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

