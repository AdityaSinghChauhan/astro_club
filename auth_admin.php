<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if($_SESSION['SESS_TYPE']!="admin" ) 
        {
		header("location: login.php");
		exit();
	}
        
?>