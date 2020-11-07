<?php
	require 'config.php';
	session_start(); 
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
		<script>
			window.location = "index.php";
		</script>
<?php 
	}
		$session_id=$_SESSION['id'];
		$admin_query = $conn->query("SELECT * FROM admin WHERE admin_id = '$session_id'") or die(mysqli_errno());
		$admin_row = $admin_query->fetch_array();
		$admin_username = $admin_row['firstname']." ".$admin_row['lastname'];
?>