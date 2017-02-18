<?php
    
    include('db/session.php');

  if(isset($_POST['add_student']))
  {
      
      $facid = $_POST['facid'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $father_name = $_POST['father_name'];
      $mother_name = $_POST['mother_name'];
      $address = $_POST['address'];
      $area = $_POST['area'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      //$photo = $_POST['photo'];
      $email = $_POST['email'];
      $personal_no = $_POST['personal_no'];
      $alternate_no = $_POST['alternate_no'];
      $department = $_POST['department'];

      $examination = $_POST['examination'];
      $uni = $_POST['uni'];
      $yearofpassing= $_POST['yearofpassing'];
      $per = $_POST['per'];

      
      if(file_exists("Faculty_photo/" . $_FILES["file"]["name"]))
      {
        echo $_FILES["file"]["name"] . " already exists. ";
      }
      else
      {
          $photo = $_FILES["file"]["name"];
          $filePath = "Faculty_photo/" . $photo;
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$filePath))
          { 
          /*prepare sql query here and insert*/
            $insert = mysql_query("INSERT INTO tbl_faculty_add(
            facid,first_name,last_name,father_name,mother_name,faculty_address,area,city,pincode,dob,gender,faculty_photo,email_id,faculty_contact,faculty_alternate_contact,department,  examination_passed,university,  year_of_passing,
            percentage) 
                VALUES('$facid','$fname','$lname','$father_name','$mother_name','$address','$area','$city','$pincode','$dob','$gender','$photo','$email','$personal_no',
                '$alternate_no','$department','$examination','$uni',' $yearofpassing',
                '$per')");
            if($insert)
            {
              echo "<script>alert('New Faculty Added Successfully')</script>";
            }
            else
            {
              echo "<script>alert('Failed')</script>";
            }
        }
    }
  }

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
                    <li><a href="terms.html">Add Faculty</a></li>
                    <li><a href="shortcodes.html">Faculty Report</a></li>
                    <li><a href="shortcodes.html">Faculty Master</a></li>
              </ul>
            </li>

            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Student<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="terms.html">Add Student</a></li>
                    <li><a href="shortcodes.html">Student Report</a></li>
                    <li><a href="shortcodes.html">Student Master</a></li>
              </ul>
            </li>   
            
            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="branch_master.php">Branch Master</a></li>
                    <li><a href="semester_master.php">Semester Master</a></li>
                    <li><a href="terms.html">Exam Master</a></li>
              </ul>
            </li>
            
            <li class="last"><a href="contact.html">Contacts</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<div class="courses_banner">
    <div class="container">
      <h3>Admissions</h3>
      <p class="description">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Admissions</li>
            </ul>
        </div>
    </div>
  </div>
<!-- form -->
<div class="admission">
     <div class="container">
        <h1>Introduce Yourself</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <div class="col-md-6 admission_left">
          <h2>Personal Information</h2>
          <form method="post" enctype="multipart/form-data">
             <div class="select-block1">
                <!-- <select>
                    <option value="">Title</option>
                    <option value="">Mr.</option>
                    <option value="">Ms.</option>
               </select> -->
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="facid" id="slider-name" placeholder="Faculty ID" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="fname" id="slider-name" placeholder="First Name" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="lname" id="slider-name" placeholder="Last Name" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="father_name" id="slider-name" placeholder="Father Name" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="mother_name" id="slider-name" placeholder="Mother Name" type="text" required="">
             </div>
            <!-- select-block -->
              <div class="select-block1">
                <textarea rows="3" cols="50" placeholder="Permanent Address" name="address"></textarea>
              </div>
              <div class="col-md-4 form_box">
                  <div class="select-block1">
                    <select name="area">
                      <option value="Area">Area</option>
                      <option value="Bapunagar">Bapunagar</option>
                      <option value="Nikol">Nikol</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box">
                   <div class="select-block1">
                    <select name="city">
                      <option value="City">City</option>
                      <option value="Ahmedabad">Ahmedabad</option>
                      <option value="Surat">Surat</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box1">
                   <div class="input-group input-group1">
                      <input class="form-control has-dark-background" name="pincode" id="slider-name" placeholder="Postal Code" type="text" required="">
                   </div>
                  </div>
                  <div class="clearfix"> </div>
               <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="dob" id="slider-name" placeholder="DOB" type="date" required="">
             </div>
              <div class="form-group col-md-12 form-group1">
                <label class="col-md-7 control-lable" for="sex">Sex : </label>
                <div class="col-md-5">
                    <div class="radios">
                <label for="radio-01" class="label_radio">
                    <input type="radio" value="Male" name="gender"> Male
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" value="Female" name="gender"> Female
                </label>
                 <!-- <select name="department" class="selectstyle">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br><br> -->
                  </div>
                </div>
                <div class="clearfix"> </div>
             </div>
             <div class="form-field">
         <div class="col-md-7 photo"><label>Upload Photo <em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
         <div class="col-md-5"><input name="file" id="cphoto" type="file" class="file upload_1"></div>
         <div class="clearfix"> </div>
             </div>
        <div class="form-field">
           <!-- <div class="col-md-7 photo"><label>Upload Signature<em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
           <div class="col-md-5"><input name="photo" id="cphoto" type="file" class="file upload_1" onchange="AlertFilesize();"></div> -->
         <div class="clearfix"> </div>
             </div>
              <!-- </form> -->
            </div>
            <div class="col-md-6 admission_right">
              <h3>Contact Information</h3>
              <!-- <form method="post"> -->
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="email" id="slider-name" placeholder="Email ID" type="text" required="">
               </div>
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="personal_no" id="slider-name" placeholder="Phone no (Personal)" type="text" required="">
               </div>
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="alternate_no" id="slider-name" placeholder="Phone no (Alternate)" type="text" required="">
               </div><br><br><br>
               <!-- <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Postal code" type="text" required="">
               </div> -->
             <!--  <input type="submit" value="Apply Now" class="course-submit"> -->                               
             <!-- </form>   -->
         </div>

         <div class="col-md-6 admission_right">
                
              <!-- <form method="post"> -->
               <div class="input-group input-group1">
                  <select name="department" class="selectstyle">
                    <option value="Select Department">Select Department</option>
                    <?php
                      $dept = mysql_query("SELECT * FROM tbl_branchmaster");
                      while($row = mysql_fetch_array($dept))
                      {

                        echo "<option value=".$row['department_name'].">".$row['department_name']."</option>";
                      }

                    ?>
                </select><br><br>
                <!-- <select name="department" class="selectstyle">
                    <option value="Select Semester">Select Semester</option>
                    <?php
                      $dept = mysql_query("SELECT * FROM tbl_semestermaster");
                      while($row = mysql_fetch_array($dept))
                      {

                        echo "<option value=".$row['sem_name'].">".$row['sem_name']."</option>";
                      }

                    ?>
                </select><br><br> -->
             </div>
                                             
             
         </div>

<div class="clearfix"> </div>
        <table class="timetable">
                  <thead>
                  <tr>
                  <h3>Qualifications</h3>
                    <th>Examination <br>Passed</th>
                    <th>School/Board/University</th>  
                    <th>Year of<br> Passing</th> <br></th> <th>Percentage <br>(%)</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td><input name="examination" type="text" class="no-box" placeholder="Examination"></td>
                  <td><input name="uni" type="text" class="no-box" placeholder="University"></td>
                  <td><input name="yearofpassing" type="text" class="no-box" placeholder="YOP"></td>
                  <td><input name="per" type="text" class="no-box" placeholder="Percentage"></td>
                </tr>

                <!--<tr>
                  <td><input name="examination" type="text" class="no-box" placeholder="Examination"></td>
                  <td><input name="uni" type="text" class="no-box" placeholder="University"></td>
                  <td><input name="yearofpassing" type="text" class="no-box" placeholder="YOP"></td>
                  <td><input name="per" type="text" class="no-box" placeholder="Percentage"></td>
                </tr>

                <tr>
                  <td><input name="examination" type="text" class="no-box" placeholder="Examination"></td>
                  <td><input name="uni" type="text" class="no-box" placeholder="University"></td>
                  <td><input name="yearofpassing" type="text" class="no-box" placeholder="YOP"></td>
                  <td><input name="per" type="text" class="no-box" placeholder="Percentage"></td>
                </tr>-->
               
               </tbody>
      </table><br><br>
      <input type="submit" value="Apply Now" class="course-submit" name="add_student">
      </form>
       <div class="clearfix"> </div>
     </div>
  </div>
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