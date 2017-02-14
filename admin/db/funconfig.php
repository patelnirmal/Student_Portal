<?php

function Ins_Upd_Del($query)	// insert-update-delete ni query ma excute non query hoy etle tenu function bhegu banavyu 6e.
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			$db=mysql_select_db("esoftech_db");
			if($db)
			{
				$execute = mysql_query($query); // ahi query nam apyu 6e. jema query lakhay 6e.
				if($execute)
				{
					echo "<script>alert('Data Save Successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data Not Save')</script>";
				}
				mysql_close($con);
			}
			else
			{
				echo "Database Connection Failed";
			}
		}
		else
		{
			echo "Connection Failed";
		}
	}
function SelectData($query)				// select ni query ma data return karvani hoy 6e etle te alg 6e.
	{
		$con=mysql_connect("localhost","root","");
		if($con)
		{
			$db=mysql_select_db("esoftech_db");
			if($db)
			{
				$result=mysql_query($query);
				mysql_close($con);
				return $result;
			}
			else
			{
				echo "Database Connection Failed";					
			}
		}
		else
		{
			echo "Connection Failed";	
		}
	}
function CheckData($query)				// data lavya pachi tene chek karyo 6e.
	{
		$result=SelectData($query);

		$rowCount=mysql_num_rows($result);
		
		if($rowCount==0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
?>
