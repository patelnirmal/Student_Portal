<?php
 
 	include("db/config.php");
 	if(isset($_POST['save']))
 	{
 		$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$confpass = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$contact = $_POST['contactno'];
	$logtype = $_POST['logtype'];


 		$sql = mysql_query("INSERT INTO tbl_registration(firstname,lastname,username,password,confpassword,emailid,gender,contactno,log_type)
			VALUES('$fname','$lname','$uname','$pass','$confpass','$email','$gender','$contact','$logtype')");
 		if ($sql) 
 		{
 			//echo "Record save";
 			header('Location:login.php');
 		}
 		else
 		{
 			//echo "Record not save";
 		}
 	}
 	

?>
<html>
<head>
	<title>Login</title>
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

</style>
<body>
<!--header start here-->
<div class="header">
	<div class="logo-main" >
			
			<div class="logo-text">
				<div class="txtstyle">R.C. Technical Institute</div>	
			</div>
			<div class="menu-text">
				<ul>
					<li><a href="http://localhost/Student%20Portal/login.php#">Login</a></li>
					<li><a href="http://localhost/Student%20Portal/Register.php">Sign Up</a></li>
				</ul>
			</div>
</div>
<div class="header-main">
		       <h1>Register</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form  method="post">
					 	<input type="text" placeholder="First Name" name="firstname"/>
					 	<input type="text" placeholder="Last Name" name="lastname"/>
						<input type="text" placeholder="Username" name="username"/>
						<input type="password" placeholder="Password" name="password" />
						<input type="password" placeholder="Confirm Password" name="confirmpassword" />
						<input type="text" placeholder="Email" name="email" />
						
						<select name="gender" class="selectstyle">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<input type="text" placeholder="Contact No" name="contactno" "/>
						<select name="logtype" class="selectstyle">
							<option value="Faculty">Faculty</option>
							<option value="Student">Student</option>
						</select>

						<div class="remember">
			             <span class="checkbox1">
							   <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
						 </span>
						 <div class="forgot">
						 	<h6><a href="#">Forgot Password?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" value="Register" name="save">
					</form>	
					<div class="header-left-top">
						<div class="sign-up"> <h2>or</h2> </div>
					
					</div>
					<div class="header-social wthree">
							<a href="https://www.facebook.com" class="face"><h5>Facebook</h5></a>
							<a href="https://www.twitter.com" class="twitt"><h5>Whatsapp</h5></a>
						</div>
						
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