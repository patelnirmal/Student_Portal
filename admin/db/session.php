<?php

	include("db/config.php");

	session_start();

	$login_check = $_SESSION['userchk'];
	
	if(!isset($login_check))
	{
		mysql_close($con);
		header('location:index.php');
	}
	else
	{
		$sql = mysql_query("SELECT * from tbl_login WHERE adm_username = '$login_check'");
		$row = mysql_fetch_assoc($sql);

		$name = $row['adm_username'];
	}

?>