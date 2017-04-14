<?php 
    include 'db/config.php';

    if(isset($_POST["rpass"]))
    {
        	$mob=$_POST["mob"];

        	$select = mysql_query("SELECT * FROM tbl_registration WHERE contactno='$mob'");
          if (mysql_num_rows($select)>0) {
            while($row = mysql_fetch_object($select))
              {
                $pass=$row->password;

                $msg="Dear Student/Faculty Your Password is".$pass;

                $finalmsg=urlencode($msg);

                $ch=curl_init("http://login.bulksms.bz/api/sendhttp.php?authkey=2958Ahhu6E89L58e8caa7&mobiles=$mob&message=$finalmsg&sender=WEBREV&route=4");

                curl_exec($ch);                
                if($ch){
                  echo "<script>alert('Sent')</script>";
                }else{
                  echo "<script>alert('Data Sending Failed')</script>";
                }                      
              }
          }else{
            echo "<script>alert('Data Not Found')</script>";
          }
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Reset Password Form  Responsive Widget Template | Home :: w3layouts</title>
<link href="css-pass/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Reset Password Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!--element start here-->
<div class="elelment">
    <h2>Reset Password Form</h2>
    <div class="element-main">
        <h1>Forgot Password</h1><br><br>
        
        <form action="forgetPassword.php" method="post">
            <input type="text" name="mob" value="Your Valid Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your e-mail address';}">
            <input type="submit" value="Reset my Password" name="rpass">
        </form>
    </div>
</div>
<div class="copy-right">
            
</div>

<!--element end here-->
</body>
</html>