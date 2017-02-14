<?php

	include("db/config.php");

	session_start();

	if(isset($login_checkf = $_SESSION['login_userf'] && $login_type =  $_SESSION['login_type'])
	{
			$sql = mysql_query("SELECT * from tbl_registration WHERE username = '$login_checkf' 
				AND log_type='$login_type'");
			$row = mysql_fetch_assoc($sql);

			$name = $row['firstname'];
	}
	else if($login_checks = $_SESSION['login_users'] && $login_type =  $_SESSION['login_type'])
	{
			$sql = mysql_query("SELECT * from tbl_registration WHERE username = '$login_checks' 
				AND log_type='$login_type'");
			$row = mysql_fetch_assoc($sql);

			$name = $row['firstname'];	
	}
	else if(!isset($login_checkf) || !isset($login_checks) || !isset($login_type))
	{
		mysql_close($con);
		header('Location:login.php');
		
	}
	else
	{
		echo "";
	}

?>