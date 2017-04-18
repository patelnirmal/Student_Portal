<?php
	include 'db/faculty_session.php';
	if(isset($_POST['export'])) {
                $aa = $_POST['studentEn'];
                $sql = "Select * from tbl_attendance WHERE enrollment_no = '$aa'";
                $result = mysql_query($sql);
                $file_ending = ".sxlsx";
                header("Content-Type: application/xls");    
                header("Content-Disposition: attachment; filename=$filename.xls");  
                header("Pragma: no-cache"); 
                header("Expires: 0");
                $sep = "\t"; //tabbed character
                //start of printing column names as names of MySQL fields
                for ($i = 0; $i < mysql_num_fields($result); $i++) {
                echo mysql_field_name($result,$i) . "\t";
                }
                print("\n");    
                //end of printing column names  
                //start while loop to get data
                    while($row = mysql_fetch_row($result))
                    {
                        $schema_insert = "";
                        for($j=0; $j<mysql_num_fields($result);$j++)
                        {
                            if(!isset($row[$j]))
                                $schema_insert .= "NULL".$sep;
                            elseif ($row[$j] != "")
                                $schema_insert .= "$row[$j]".$sep;
                            else
                                $schema_insert .= "".$sep;
                        }
                        $schema_insert = str_replace($sep."$", "", $schema_insert);
                        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
                        $schema_insert .= "\t";
                        print(trim($schema_insert));
                        print "\n";
                    }   
              }
?>
<!DOCTYPE html>
<html>
<head>
<head>
<link rel="icon" href="images/i/rc-logo.jpg">
<title>Learn an Education Category Flat Bootstarp Resposive Website Template | Home :: w3layouts
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/main-style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />

<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand1" href="HomeFaculty.php">Student Portal</a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="login.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span><?php echo $name;?></span></a>
               
                      <ul class="dropdown-menu">
                         <!-- <li><?php echo $name;?></li> -->
                         <li><a href="faculty_profile.php">Profile</a></li>
                        
                        <li><a href="logout.php">Logout</a></li>
                      </ul>
                </li>

            </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
        <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 

<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="HomeFaculty.php">Home</a></li>
            <!-- <li><a href="faculty.html">Profile</a></li>	 -->
    		
            
            <li><a href="studentDetails.php">Student Details</a></li> 
            
             <li class="dropdown">
            	<a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Exams<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
                	<li><a href="examTimeTable.php">Exam Time-Table</a></li>
                  <li><a href="viewExamTimeTable.php">View Exam Time-Table</a></li>
                	<li><a href="examResult.php">Exam Results</a></li>
                	
              </ul>
            </li>

            <li><a href="getSubmission.php">Submissions</a></li>	

            
            <li class="dropdown">
              <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Notice<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="addNotice.php">Add/Update E-Notice Board</a></li>
                  <li><a href="noticeBoard.php">View Notice Board</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Attendance<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="studentAttendance.php">Take Attendance</a></li> 
                  <li><a href="getAttendance.php">Get Attendance</a></li> 
                  <li><a href="exportAttendance.php">Export Attendance</a></li> 
              </ul>
            </li>
            
            <!-- <li class="last"><a href="contact.html">Contacts</a></li> -->
        </ul>
     </div>
</head>
</div>
</nav>
<div class="admission">
  <div class="container">
      <div class="col-md-6 admission_left">
        <h2>Export Attendance</h2>
		<form method="post" enctype="multipart/form-data">

          <div class="col-md-6 admission_left"">
            <div class="input-group input-group1">
              <input class="form-control has-dark-background" name="studentEn" placeholder="Enrollmment Number" type="number" required=""><br><br><br>
            </div>
            <input type="submit" value="Export To Excel Sheet" class="course-submit" name="export">
          </div>
      </div>
  </div>
</div>

</body>
<div class="footer">
      <div class="container">
        <div class="col-md-3 grid_4">
           <h3>About Us</h3> 
              R.C. Technical Institute is Govt College.
              This is reputed college and is been established by <strong>Ranchhodlal Chhotalal</strong> since 1900s.
           <p></p>
              <ul class="social-nav icons_2 clearfix">
                    <li><a href="https://www.facebook.com/profile.php?id=100008223345086" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
        </div>
        <div class="col-md-3 grid_4">
           <h3>Quick Links</h3>
          <ul class="footer_list">
            <li><a href="http://rcti.cteguj.in/"><strong>R.C. Technical Institute</strong></a></li>
            <li><a href="http://www.gtu.ac.in/"><strong>Gujarat Technical Institute</strong></a></li>
            <li><a href="http://www.gtu.ac.in/result.aspx"><strong>Exam Results</strong></a></li>
            <li><a href="http://www.gturesults.in/recheck.aspx"><strong>Re-Check Results</strong></a></li>
            
          </ul>
        </div>
        <div class="col-md-3 grid_4">
           <h3>Contact Us</h3>
          <address>
                    <strong>Ranchhodlal Chhotalal Technical Institute</strong>
                    <br>
                    <span>Opp Civil, Near Gujarat High Court,</span>
                    <br>
                    <span> S.G.Highway, Sola, </span>
                    <br>
                    <span>Ahmedabad, Gujarat 380060, </span>
                    <br>
                    <abbr>Telephone : </abbr>  079 2766 4785
                    <br>
                    <abbr>Email : </abbr> <a href="mailto@example.com">info(at)Learn.com</a>
               </address>
        </div>
        <div class="col-md-3 grid_4">
           <h3>Working Hours</h3>
           <table class="table_working_hours">
              <tbody>
                <tr class="opened_1">
              <td class="day_label">monday</td>
              <td class="day_value">08:00 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">tuesday</td>
              <td class="day_value">08:00 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">wednesday</td>
              <td class="day_value">08:00 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">thursday</td>
              <td class="day_value">08:00 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">friday</td>
              <td class="day_value">08:00 am - 6.00 pm</td>
            </tr>
              <tr class="closed">
              <td class="day_label">saturday</td>
              <td class="day_value closed"><span>Closed</span></td>
            </tr>
              <tr class="closed">
              <td class="day_label">sunday</td>
              <td class="day_value closed"><span>Closed</span></td>
            </tr>
            </tbody>
        </table>
            </div>
        <div class="clearfix"> </div>
        <div class="copy">
           
          </div>
      </div>
    </div>
</html>