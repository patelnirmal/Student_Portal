<?php
    
    include('db/session.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="images/rc-logo.jpg">
<title>Learn an Education Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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
<style type="text/css">
 .faculty_box
 {
  margin-top: 20px;
 } 
</style>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand1" href="index.html">E-Softech</a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="login.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span><?php echo $name;?></span></a>
               
                      <ul class="dropdown-menu">
                         <!-- <li><?php echo $name;?></li> -->
                        
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
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="Homeadmin.php">Home</a></li>
            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Faculty<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="faculty_add.php">Add Faculty</a></li>
                    <li><a href="faculty_report.php">Faculty Report</a></li>
                    <!-- <li><a href="shortcodes.html">Faculty Master</a></li> -->
              </ul>
            </li>

            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Student<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="admission.php">Add Student</a></li>
                    <li><a href="student_report.php">Student Report</a></li>
                    <!-- <li><a href="shortcodes.html">Student Master</a></li> -->
              </ul>
            </li>   
            
            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="branch_master.php">Branch Master</a></li>
                    <li><a href="semester_master.php">Semester Master</a></li>
                    <li><a href="exam_master.html">Exam Master</a></li>
              </ul>
            </li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<div class="admission">
  <form method="post">
    <div class="container">
      <h3>Student Report</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="studentdepartment" class="selectstyle">
                      <option value="Select Department">Select Department</option>
                      <?php
                        $dept = mysql_query("SELECT * FROM tbl_branchmaster");
                        while($row = mysql_fetch_array($dept))
                        {

                          echo "<option value=".$row['department_name'].">".$row['department_name']."</option>";
                        }

                      ?>
          </select>
        </div>
      </div>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="studentsemester" class="selectstyle">
                      <option value="Select Semester">Select Semester</option>
                      <?php
                        $seme = mysql_query("SELECT * FROM tbl_semestermaster");
                        while($row = mysql_fetch_array($seme))
                        {

                          echo "<option value=".$row['sem_name'].">".$row['sem_name']."</option>";
                        }

                      ?>
          </select>
        </div>
      </div>
      <input type="submit" value="Find" class="course-submit" name="btnreport">

    </div>
    
    <div class="faculty_box">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <th>Enrollment No.</th>
                        <th>Name</th>
<!--                         <th>First Name</th>
                        <th>Last Name</th> -->
                        <th>Address</th>
                        <th>Student ContatNo</th>
                        <!-- <th>Parent ContatNo</th> -->
                        <th>Gender</th>
                        <th>Email Id</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Qualification</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['btnreport']))
                      {
                        $dept = $_POST['studentdepartment'];
                        $seme = $_POST['studentsemester'];
                        $select = mysql_query("SELECT * FROM tbl_student_admission WHERE 
                          department='$dept' AND semester = '$seme'");
                          while($row = mysql_fetch_object($select))
                          {
                                  echo "<tr>
                                      <td>$row->enrollment_number</td>
                                      <td>$row->first_name $row->last_name </td>
                                      <td>$row->student_address</td>
                                      <td>(S)$row->student_contact <br> 
                                          (P)$row->parents_contact</td>
                                      <td>$row->gender</td>
                                      <td>$row->email_id</td>
                                      <td>$row->department</td>
                                      <td>$row->semester</td>
                                      <td>$row->examination_passed</td>
                                      <td><img src='../admin/Student_photo/$row->student_photo' height='100' width='100'></td>
                                    </tr>";
                          }
                        
                      }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
     </div>
  </form>   
</div>
<!-- form -->
<div class="footer">
      <div class="container">
        <div class="col-md-3 grid_4">
           <h3>About Us</h3>  
           <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.."</p>
              <ul class="social-nav icons_2 clearfix">
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                 </ul>
        </div>
        <div class="col-md-3 grid_4">
           <h3>Quick Links</h3>
          <ul class="footer_list">
            <li><a href="#">-  PRIOR LEARNING ASSESSMENT </a></li>
            <li><a href="#">-  INTERNATIONAL STUDENTS</a></li>
            <li><a href="#">-  CAREER OPPORTUNITIES</a></li>
            <li><a href="#">-   NEW STUDENT ORIENTATION</a></li>
            <li><a href="#">-   NEW CLASSROOM TECHNOLOGY</a></li>
          </ul>
        </div>
        <div class="col-md-3 grid_4">
           <h3>Contact Us</h3>
          <address>
                    <strong>Contrary to popular belief</strong>
                    <br>
                    <span>4877 It is a long established</span>
                    <br><br>
                    <span>Contrary to popular , 15089</span>
                    <br>
                    <abbr>Telephone : </abbr> +1 (734) 123-4567
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
              <td class="day_value">9:30 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">tuesday</td>
              <td class="day_value">9:30 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">wednesday</td>
              <td class="day_value">9:30 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">thursday</td>
              <td class="day_value">9:30 am - 6.00 pm</td>
            </tr>
              <tr class="opened">
              <td class="day_label">friday</td>
              <td class="day_value">9:30 am - 3.00 pm</td>
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
           <p>Copyright © 2015 Learn . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
          </div>
      </div>
    </div>

</body>
</html>