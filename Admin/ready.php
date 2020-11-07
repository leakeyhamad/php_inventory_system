<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>READY ITEM</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
                                    
                                   	<div class="form-group">
                        <label>ITEM NAME</label>
                        <select class="form-control" name="item_name">
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
                            <select class="form-control" name="item_model">
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
                            <input class="form-control" type="text" name="item_serial" placeholder="Enter serial number" required="true">
                        </div>
                                                    
                                       
					<div class="form-group">
						<label>Name of User</label>
							<input class="form-control" type ="text" name = "user_name" placeholder="Enter user full name" required="true">
					</div>
										
					<div class="form-group">
						<label>Job Number</label>
                                                <input class="form-control" type="text" name="user_jobnum" placeholder="Enter user job number" required="true">
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
					
                                        $item_name=$_POST['item_name'];
                                        $item_model=$_POST['item_model'];
                                        $item_serial=$_POST['item_serial'];
                                        $user_name=$_POST['user_name'];
                                        $user_jobnum=$_POST['user_jobnum'];
                                        
					
					
	$conn->query("INSERT INTO ready_items(item_name,item_model,item_serial,user_name,user_jobnum)values('$item_name','$item_model','$item_serial','$user_name','$user_jobnum')")or die(mysql_error());
				}						
			?>
           
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>