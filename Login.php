<?php
 
 	include("db/config.php");
 	session_start();
 	if(isset($_POST['save']))
 	{
 		$uname = $_POST['username'];
 		$pass = $_POST['password'];
 		$logtype = $_POST['logtype'];
 		$sql = mysql_query("SELECT * FROM tbl_registration WHERE username='$uname' AND password='$pass' AND log_type='$logtype'");
 		$result = mysql_num_rows($sql);
 		if($uname=="" && $pass=="")
 		{
	 		echo "<script>alert('Username and Password id Wrong')</script>";
 		}
 		else if($result==1)
		{
			 
			 if($logtype == "Faculty")
			 {
			 	$_SESSION['login_userf'] = $uname;
			 	$_SESSION['login_type'] = $logtype;
			 	header("location:Faculty/HomeFaculty.php");
	 		 }
	 		 else if($logtype == "Student")
	 		 {
	 		 	$_SESSION['login_users'] = $uname;
			 	$_SESSION['login_type'] = $logtype;
	 		 	header("location:Student/HomeStudent.php");	
	 		 }
	 		 else
	 		 {
	 		 	echo "<script>alert('Login Type is Not Matched')</script>";
	 		 }

	 	}
	 	else
	 	{
	 		echo "<script>alert('Username and Password id Wrong')</script>";
	 		
	 	}
 	}

?>
<html>
<head>
	<title>Login</title>
	<link rel="icon" href="images/i/rc-logo.jpg">

</head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<style type="text/css">
.selectstyle
{
    background: url(../images/m.png)no-repeat 0px 5px;
    outline: none;
    font-size: 15px;
    color: #FFf;
    font-weight: 400;
    /*color: #fff;*/
    padding: 12px 13px 20px 0px;
  border:none;
    border-bottom:1px solid #fff;
    width: 87%;
    margin: 0 25 20px;
    display: inline-block;
}
.selectstyle option
{
	color: black;
}
/*.img-responsive
{
	border: 0px solid;
	height: 150px;
	width: 40%;
	margin-left:140px;

}
.img-responsive img
{
	height: 150px;
	width: 100%;
}*/
</style>
<body>
<!--header start here-->
<div class="header">
	<div class="logo-main">
			<div class="logo-text">
				<div class="txtstyle">R.C. Technical Institute </div>	
			</div>
			<div class="menu-text">
				<ul>
					<li><a href="http://localhost/Student%20Portal/login.php#">Login</a></li>
					<!-- <li><a href="http://localhost/Student%20Portal/Register.php">Sign Up</a></li> -->
				</ul>
			</div>
</div>
<div class="header-main">
				<!-- <div class="img-responsive">
					<img src="images/i/rc-logo.jpg"></img>
				</div> -->
		       <h1 >Login</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="#" method="post">
						<input type="text" placeholder="Username" name="username"/>
						<input type="password" placeholder="Password" name="password"/>
						<select name="logtype" class="selectstyle">
							<option value="Faculty">Faculty</option>
							<option value="Student">Student</option>
						</select>
						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="forgetPassword.php">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Login" name="save">
					</form>	
					<!-- <div class="header-left-top">
						<div class="sign-up"> <h2>or</h2> </div>
					
					</div> -->
					<!-- <div class="header-social wthree">
							<a href="https://www.facebook.com" class="face"><h5>Facebook</h5></a>
							<a href="https://www.twitter.com" class="twitt"><h5>Google Plus</h5></a>
						</div> -->
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<!-- <p>© 2016 Classy Login Form. All rights reserved | Design by  <a href="#" target="_blank"></a></p> -->
</div>
<!--footer end here-->
</body>
</html>