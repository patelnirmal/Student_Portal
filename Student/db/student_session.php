<?php

	include("db/config.php");

	session_start();
	$login_checks = $_SESSION['login_users'];
	$login_type =  $_SESSION['login_type'];
	if($login_checks && $login_type)
	{
			$sql = mysql_query("SELECT * from tbl_registration WHERE username = '$login_checks' 
				AND log_type='$login_type'");
			$row = mysql_fetch_assoc($sql);

			$name = $row['firstname'];	
	}
	else 
	{
		mysql_close($con);
		header('Location:../login.php');
	}
	

?>