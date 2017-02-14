<?php

	$conn = mysql_connect('localhost','root','');
	if($conn)
	{
		$db = mysql_select_db('student_portal');
		if($db)
		{
			// echo "connected";
		}
		else
		{
			// echo "failed";
			
		}
	}



?>