<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0; background-color:cadetblue;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:white;"><i class = "fa fa-home fa-large" > </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; TTU ICT SUPPORT INVENTORY SYSTEM&nbsp;&nbsp;&nbsp;</a>
				
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php require 'config.php';
				$query = $conn->query("SELECT * from admin where admin_id ='$session_id'")or die (mysql_error ());
				
				while ($row = $query->fetch_array()){
				
				
			 ?>
               
                <li class="dropdown">
                    <a href="admin.php"  style = "color: darkblue">
					<i class="fa fa-cog fa-spin fa-fw"></i>Welcome: <?php echo $admin_username = $admin_row['firstname']." ".$admin_row['lastname'];?>
                          
                    </a>
                   
                
                </li>
           
            </ul>
			<?php }?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="received_items.php"><i class="fa fa-menu fa-fw"></i>Menu </a>
                        </li>
                        <li>
                            <a href="#"><i class=""></i>RECEIVED ITEMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="received_items.php"><i class = "fa fa-arrow-circle-o-right fa-fw "></i>View Received Items</a>
                                </li>
                                <li>
                                    <a href="ttutech_received_items.php"><i class = "fa fa-arrow-circle-o-right fa-fw"></i>TTUTECH Received Items</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class=""></i> ISSUED ITEMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="issued_items.php"><i class = "fa fa-arrow-circle-o-right fa-fw"></i>Issued Items</a>
                                </li>
                                <li>
                                    <a href="ttutech_issued_items.php"><i class = "fa fa-arrow-circle-o-right fa-fw"></i>TTUTECH issued items</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        		<li>
                            <a href="#"><i class=""></i>ALLOCATED ITEMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="allocated_items.php"><i class = "fa fa-arrow-circle-right fa-fw"></i>Allocated Items</a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        	<li>
                            <a href="#"><i class=""></i>READY ITEMS FOR USE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="ready_items.php"><i class = "fa fa-arrow-circle-right fa-fw"></i>Ready Items for issue</a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        		<li>
                            <a href="#"><i class=""></i>LEND ITEMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="lend_items.php"><i class = "fa fa-arrow-circle-o-right fa-fw"></i>Items Lend Out</a>
                                </li>
                                <li>
                                    <a href="returned_lend_items.php"><i class = "fa fa-arrow-circle-o-right fa-fw"></i>Lend Returned Items</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        	<li>
                            <a href="#"><i class=""></i>RETRIEVED ITEMS<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="items_retrieved.php"><i class = "fa fa-arrow-circle-o-right fa-fw"></i>View Retrieved Items</a>
                                </li>
                               
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
                       
                            
                        
                       
                       
                       
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Admin<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="admin.php"> <i class = "fa fa-user" ></i>Profile</a>
                                </li>
                                <li>
                                    
                                </li>
                                
                                <li>
                                    <a href="logout.php"> <i class = "fa fa-sign-out" ></i>Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>