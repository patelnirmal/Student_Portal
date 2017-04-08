<?php

	include("db/config.php");

	session_start();
	$login_checkf = $_SESSION['login_userf'];
	$login_type =  $_SESSION['login_type'];

	if($login_checkf && $login_type)
	{
			$sql = mysql_query("SELECT * from tbl_registration WHERE username = '$login_checkf' 
				AND log_type='$login_type'");
			$row = mysql_fetch_assoc($sql);

			$facid = $row['reg_id'];
			$name = $row['firstname'];
	}
	else 
	{
		mysql_close($con);
		header('Location:../login.php');
		
	}


?>