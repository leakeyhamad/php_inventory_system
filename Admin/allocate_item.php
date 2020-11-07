<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Allocate Item</center>
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
						<label>Allocate To:</label>
							<input class="form-control" type ="text" name = "fullname" placeholder="Please enter full name" required="true">
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
						<label>Item</label>
						<select class = "form-control" name = "item">
						<option></option>				
				<option>CPU</option>
				<option>Printer </option>
				<option>Laptop</option>
				<option>Monitor</option>
				<option>Keyboard</option>
				<option>Projector</option>
                                <option>Mouse</option>
				
                                
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
                            <label>Allocated By:</label>
                            <input class="form-control" type="text" name="allocated_by" placeholder="Enter your name" required="true">
                        </div>

			
						<button name = "save" type="submit" class="btn btn-primary">Save Data</button>
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
					$item=$_POST['item'];
                                        $model=$_POST['model'];
                                        $serialnumber=$_POST['serialnumber'];
                                        $allocated_by=$_POST['allocated_by'];
					
					
					$conn->query("INSERT INTO allocated_items(date,fullname,jobnumber,department,branch,item,model,serialnumber,allocated_by)values('$date','$fullname','$jobnumber','$department','$branch','$item','$model','$serialnumber','$allocated_by')")or die(mysql_error());
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>