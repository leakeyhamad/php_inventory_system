<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>RECEIVE LEND ITEM</center>
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
						<label>Returned By:</label>
							<input class="form-control" type ="text" name = "returned_by" placeholder="Please enter full name" required="true">
					</div>
										
					<div class="form-group">
						<label>Job Number</label>
                                                <input class="form-control" type="text" name="jobnumber" placeholder="Enter your job number" required="true">
                                        </div>
                                    <div class="form-group">
                                        <label>Department</label>
                     
				<select class = "form-control" name ="department">
                                        <option></option>
                                        <option>Human Resource</option>
					<option>Public Relations Office</option>
					<option>Procurement</option>
                                        <option>Finance</option>
                                        <option>Catering</option>
                                        <option>Security</option>
                                        <option>Office Of The Director(Administration,Planning and Development)</option>
                                        <option>Internal Audit</option>
                                        <option>Health Unit</option>
                                        <option>Facilities Management</option>
							</select>
					</div>
															
					<div class="form-group">
						<label>Branch</label>
                                                
			<select class = "form-control" name ="branch" placeholder="select branch">
                                <option></option>				
				<option>Main Campus</option>
				<option>Ngerenyi Campus</option>
                                
							</select>
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
                            <input class="form-control" type="text" name="received_by" placeholder="Enter receiver name" required="true">
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
					$returned_by=$_POST['returned_by'];
					$jobnumber=$_POST['jobnumber'];
					$department=$_POST['department'];
					$branch=$_POST['branch'];
                                        $item=$_POST['item'];
                                        $model=$_POST['model'];
                                        $serialnumber=$_POST['serialnumber'];                                       
                                        $received_by=$_POST['received_by'];
                                       //added lines
                                        $query = $conn->query("SELECT * FROM lend_items WHERE jobnumber = '$jobnumber'") or die (mysql_error());
                                        $count1 = $query->num_rows;
                                        $result = $query->fetch_array();
                                        if ($serialnumber!=$result['serialnumber'] or $jobnumber!=$result['jobnumber']){
					
					
										
			?>
                <script>
											alert("Wrong item serial number or invalid job number");
										</script>
							<?php
								}
								else{
									$conn->query("INSERT INTO lend_returned(date,returned_by,jobnumber,department,branch,item,model,serialnumber,received_by)values('$date','$returned_by','$jobnumber','$department','$branch','$item','$model','$serialnumber','$received_by')");
									
							?>
									<script>
										alert('Item returned successfully');
									</script>
							<?php 
									}
								} 
							?>	
           
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>