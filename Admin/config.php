<?php
	$conn = new mysqli('localhost', 'root', '', 'ttuitinventory');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	