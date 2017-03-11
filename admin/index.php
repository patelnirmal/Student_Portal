<?php
	include('db/config.php');
    
	session_start();
	if(isset($_POST['admin_login']))
	{
		$a_username = $_POST['admin_username'];
		$a_password = $_POST['admin_password'];

		$sql = mysql_query("SELECT adm_username AND adm_password FROM tbl_login WHERE 
			adm_username ='$a_username' AND 
			adm_password = '$a_password'");
 		$result = mysql_num_rows($sql);
		
		if ($result==1) 
		{
			$_SESSION['userchk'] = $a_username;
			header('location:Homeadmin.php');
		}
		else
		{
			echo "<script>alert('error')</script>";
		}
	}
	else
	{
		
	}
?>
<!DOCTYPE html>
<html>	
<head>
<link rel="icon" href="images/rc-logo.jpg">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Kipy Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/login_style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<h1>Admin Login</h1>
	<div class="login-form">
		<h2>Login</h2>
			<div class="form-info">
					<form method="post">
							<input type="text" class="email" name="admin_username" 
								placeholder="Username" required=""/>
							<input type="password" class="password" name="admin_password" 
								placeholder="Password" required=""/>
							
						<ul class="login-buttons">
							<li><input type="submit" name="admin_login" value="LOGIN"/></li>
							
							<div class="clear"> </div>
						</ul>
					</form>
			</div>
	</div>
<!--copyrights-->
<div class="copyrights">
	<p>Developed by <a href="#">Nirmal and Bhuppi</a></p>
</div>
<!--/copyrights-->
</body>
</html>