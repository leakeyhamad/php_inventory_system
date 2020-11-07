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
				
				<button class="btn btn-success" data-toggle="modal" data-target="#myModal">Receive Item</button>
				<?php include ('receive_item.php');?>
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
						Received Items<button type="button" onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>
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
                                         
                                            <th>Date</th>
                                            <th>Full Name</th>
                                            <th>Job No:</th>
                                            <th>Department</th>
                                            <th>Branch</th>
                                            <th>Item</th>
                                            <th>Model</th>
                                            <th>Serial No:</th>
                                            <th>Problem</th>
                                            <th>Received By:</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
	      <?php 
			require 'config.php';
			$bool = false;
			$query = $conn->query("SELECT * FROM received_items ORDER BY item_id DESC");
			while($row = $query->fetch_array()){
			$item_id=$row['item_id'];
										?>
					    <td><?php echo $row ['date'];?></td>	
                                            <td><?php echo $row ['fullname'];?></td>
                                            <td><?php echo $row ['jobnumber'];?></td>
                                            <td><?php echo $row ['department'];?></td>
                                            <td><?php echo $row ['branch'];?></td>
                                            <td><?php echo $row ['item'];?></td>
                                            <td><?php echo $row ['model'];?></td>
                                            <td><?php echo $row ['serialnumber'];?></td>
                                            <td><?php echo $row ['problem'];?></td>
                                            <td><?php echo $row ['received_by'];?></td>
                                            

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
  
 <div id="footer">
     <div class="bottom_addr" align="center"><b>Copyright&nbsp;&copy; <?php echo date("Y");?>. All Rights Reserved</b></div>
</div>

    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

