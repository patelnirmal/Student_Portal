<?php

	session_start();

	if(session_destroy())
	 {
		header("location:http://localhost/Student_Portal/login.php");

	 }
	?>