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
 			echo"<script>alert('Registered')</script>";

 			$msg="ID".$uname."Pass".$pass;

                $finalmsg=urlencode($msg);

                $ch=curl_init("http://login.bulksms.bz/api/sendhttp.php?authkey=2958Ahhu6E89L58e8caa7&mobiles=$contact&message=$finalmsg&sender=WEBREV&route=4");

                curl_exec($ch);                
                if($ch){
                  echo "<script>alert('Sent')</script>";
                }else{
                  echo "<script>alert('Data Sending Failed')</script>";
                }                      
 		}
 		else
 		{
 			echo"<script>alert('Failed')</script>";	
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
					<!-- <li><a href="http://localhost/Student%20Portal/login.php#">Login</a></li> -->
					<!-- <li><a href="http://localhost/Student%20Portal/Register.php">Sign Up</a></li> -->
				</ul>
			</div>
</div>
<div class="header-main">
		       <h1>Register</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form  method="post">
					 	<input type="text" placeholder="First Name" name="firstname" required="" onkeypress="return onlyAlphabets(event,this);"/>
					 	<input type="text" placeholder="Last Name" name="lastname" required="" onkeypress="return onlyAlphabets(event,this);" />
						<input type="text" placeholder="Username" name="username" required="" />
						<input type="password" placeholder="Password" name="password" required="" />
						<input type="password" placeholder="Confirm Password" required="" name="confirmpassword" />
						<input type="text" placeholder="Email" name="email" required="" />
						
						<select name="gender" class="selectstyle" required="">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<input type="text" placeholder="Contact No" name="contactno" "/>
						<select name="logtype" class="selectstyle" required="">
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
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>
</body>
</html>