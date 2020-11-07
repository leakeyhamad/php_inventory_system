<?php
	require_once 'config.php';
	
	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);
	
		
		$query = $conn->query("SELECT * FROM admin WHERE username = 	'$username' AND password = '$password'") or die(mysql_error());
		$rows = $query->num_rows;
		$fetch = $query->fetch_array();
																		
			if ($rows == 0) 
					{
						echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
					} 
				else if ($rows > 0)
					{
					session_start();
					$_SESSION['id'] = $fetch['admin_id'];
					header("location:received_items.php");
				
			}	
	
	}
	?>