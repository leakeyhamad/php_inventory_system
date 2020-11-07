<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Allocate Full Set</center>
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
						<label>Full Name</label>
							<input class="form-control" type ="text" name = "fullname" placeholder="Please enter fullname" required="true">
					</div>
										
					<div class="form-group">
						<label>Job Number</label>
                                                <input class="form-control" type="text" name="jobnumber" placeholder="Enter  job number" required="true">
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
						<label>Model</label>
                                                
			<select class = "form-control" name ="model" placeholder="select model">
                                <option></option>				
				<option>Dell</option>
				<option>HP</option>
                                <option>Lenovo</option>
                               
							</select>
					            </div>			
											
                        <div class="form-group">
                            <label>CPU</label>
                            <input class="form-control" type="text" name="cpu" placeholder="Enter serial number" required="true">
                        </div>
                                    <div class="form-group">
                            <label>Monitor</label>
                            <input class="form-control" type="text" name="monitor" placeholder="Enter serial number" required="true">
                        </div>
                                    <div class="form-group">
                            <label>Keyboard</label>
                            <input class="form-control" type="text" name="keyboard" placeholder="Enter serial number" required="true">
                        </div>
                                    <div class="form-group">
                            <label>Mouse</label>
                            <input class="form-control" type="text" name="mouse" placeholder="Enter serial number" required="true">
                        </div>
                         
                                        <div class="form-group">
                            <label>Issued By:</label>
                            <input class="form-control" type="text" name="issued_by" placeholder="Enter your name" required="true">
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
					$fullname=$_POST['fullname'];
					$jobnumber=$_POST['jobnumber'];
					$department=$_POST['department'];
					$branch=$_POST['branch'];
                                        $model=$_POST['model'];
                                        $cpu=$_POST['cpu'];
                                        $monitor=$_POST['monitor'];
                                        $keyboard=$_POST['keyboard'];
                                        $mouse=$_POST['mouse'];
                                        $issued_by=$_POST['issued_by'];
					
					
					$conn->query("INSERT INTO fullset_allocation(date,fullname,jobnumber,department,branch,model,cpu,monitor,keyboard,mouse,received_by)values('$date','$fullname','$jobnumber','$department','$branch','$model','$cpu','$monitor','$keyboard','$mouse','$issued_by')")or die(mysql_error());
				}						
			?>
           
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>