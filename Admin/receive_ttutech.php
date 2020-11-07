<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>RECEIVE ITEM FROM TTUTECH</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
                                    
                                    <div class="form-group">
                                        <label> Date</label>
					
                               <input type="date" name="date" value="<?php echo date('d-m-Y'); ?>" />
                                    </div>
						
					

						
                                                    
                                                    
                                       
					<div class="form-group">
						<label>Received From:</label>
							<input class="form-control" type ="text" name = "received_from" placeholder="Please enter full name" required="true">
					</div>
										
					<div class="form-group">
						<label>Job Number</label>
                                                <input class="form-control" type="text" name="jobnumber" placeholder="Enter your job number" required="true">
                                        </div>
                                    
															
				
											
											
					<div class="form-group">
                        <label>ITEM</label>
                        <select class="form-control" name="item">
                            <option></option>
                            <option>CPU</option>
                            <option>Monitor</option>
                            <option>Keyboard</option>
                            <option>laptop</option>
                            <option>printer</option>
                            
                        </select>
                                        </div>
                        <div class="form-group">
                            <label>Model</label>                         
                            <select class="form-control" name="model">
                                <option></option>
                                <option>Hp</option>
                                <option>Dell</option>
                                <option>Lenovo</option>
                                <option>KONICA</option>
                                <option>Apple</option>
                                <option>ASUS</option>
                                <option>Accer</option>
                                
                                
                            </select>
                    </div>
                        <div class="form-group">
                            <label>Serial Number</label>
                            <input class="form-control" type="text" name="serialnumber" placeholder="Enter serial number" required="true">
                        </div>
                            
                                        <div class="form-group">
                            <label>Received By:</label>
                            <input class="form-control" type="text" name="received_by" placeholder="Enter your name" required="true">
                        </div>
						<button name = "save" type="submit" class="btn btn-primary">Save Item</button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
										
										
										
										
			<?php 
				require_once 'config.php';
				
				if (isset ($_POST ['save'])){
					$date=$_POST['date'];
					$received_from=$_POST['received_from'];
					$jobnumber=$_POST['jobnumber'];					
                                        $item=$_POST['item'];
                                        $model=$_POST['model'];
                                        $serialnumber=$_POST['serialnumber'];
                                        $received_by=$_POST['received_by'];
					
					
					$conn->query("INSERT INTO ttutech_received_items(date,received_from,jobnumber,item,model,serialnumber,received_by)values('$date','$received_from','$jobnumber','$item','$model','$serialnumber','$received_by')")or die(mysql_error());
				}						
			?>
           
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>