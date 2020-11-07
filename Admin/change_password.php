<div class="modal fade" id="change_pass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Change Password</center>
													</div>    
												</div>
											</h4>
										</div>
										
										
                                        <div class="modal-body">
										<form method = "post" enctype = "multipart/form-data">
                                        <div class="form-group">
									<label for = "password" >Old Password</label>
										<input class="form-control" placeholder="Old Password" name="old_password" type="password" value="" required="true">
                                </div>	
                                        <div class="form-group">
									<label for = "password" >New Password</label>
										<input class="form-control" placeholder="New Password" name="new_password" type="password" value="" required="true">
                                </div>
                                <div class="form-group">
									<label for = "confirm" >Confirm Password</label>
										<input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password" value="" required="true">
                                </div>
											
											
									
												 <button name = "change" type="submit" class="btn btn-primary">Change</button>
							  
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           
                                        </div>
										
										</form>
										
							<?php 
										
								require_once 'session.php';
								if (isset($_POST['change'])){
								
								$old_password=md5($_POST['old_password']);
								$new_password=md5($_POST['new_password']);
                                $confirm_password=md5($_POST['confirm_password']);
                                $session_id=$_SESSION['id'];
								
										
		
		
								$query = $conn->query("SELECT password FROM admin WHERE admin_id = '$session_id'") or die (mysql_error());
								$count1 = $query->num_rows;
                                $result = $query->fetch_array();
								if ($old_password!=$result['password'] or $new_password!=$confirm_password){ 
							?>
										<script>
											alert("Wrong old password or new passwords do not match");
										</script>
							<?php
								}
								else{
									$conn->query("UPDATE admin SET password='$new_password' WHERE admin_id = '$session_id'");
									header('location:admin.php');
							?>
									<script>
										alert('Password changed successfully');
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