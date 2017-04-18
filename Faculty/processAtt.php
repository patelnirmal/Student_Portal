<?php
	$aa = $_POST['studentsemester'];
	echo $aa;
	// $total = count($_POST['stuen']);
	// echo $total;
	/*for($i=0;$i<$total;$i++){
			$studentid = $_POST['stuen'][$i];
			$sname = $_POST['stuname'][$i];
			$sdept = $_POST['studept'][$i];
			$ssem = $_POST['stusem'][$i];
			$attndc = $_POST['attndc'][$i];

			$insert = mysql_query("INSERT into  tbl_attandence(enrollmentno,studentname,department,semester,status) VALUES ('$studentid','$sname','$sdept','$ssem','$attndc')");
		if($insert){
			echo "Done";
			header("Location:studentattendance.php");
		}
		else{
			echo "failed";
			echo mysql_error();
		}
	}*/

?>