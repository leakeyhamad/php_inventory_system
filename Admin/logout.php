<?php
include('config.php');
include('session.php');
session_destroy();
unset($_SESSION);
header('location: index.php'); 
?>