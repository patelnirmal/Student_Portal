<?php
    include('db/session.php');
    if (isset($_POST['add_semester'])) {
        
        $sem_name = $_POST['sem_name'];
        $sem="Sem ".$sem_name;

        $sql = mysql_query("INSERT INTO  tbl_semestermaster (sem_name)
                            VALUES ('$sem')");
        
        if ($sql) {
            echo "<script>alert('New Semester Added Successfully')</script>";
        }
        else{
            echo "<script>alert('Failed')</script>";
        }
    }

    if(isset($_POST['update_semester']))
    {
        $edit_id = $_GET['edit'];
        $sem_name = $_POST['sem_name'];
        $update = mysql_query("UPDATE tbl_semestermaster SET sem_name='$sem_name' WHERE sem_id='$edit_id'");
        if($update)
        {
            echo "<script>alert('Semester Name Update Successfully')</script>";
            // header("Location:semester_master.php");
        }
        else
        {
            echo "<script>alert('Error in Update')</script>";
        }
        if ($update) {
            header("Location:semester_master.php");
        }
    }
?>
<?php
    if(isset($_GET['edit']))
    {
        $edit_id = $_GET['edit'];
        $select = mysql_query("SELECT * FROM tbl_semestermaster WHERE sem_id='$edit_id'");
        $row1 = mysql_fetch_array($select);
        
    }
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $delete = mysql_query("DELETE FROM tbl_semestermaster WHERE sem_id='$delete_id'");
        if ($delete) {
            echo "<script>alert('Delete Successfully')</script>";
        }
        else
        {
            echo "<script>alert('error')</script>";
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
                    <!-- <li><a href="shortcodes.html">Faculty Master</a></li> -->
              </ul>
            </li>

            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Student<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="terms.html">Add Student</a></li>
                    <li><a href="shortcodes.html">Student Report</a></li>
                    <!-- <li><a href="shortcodes.html">Student Master</a></li> -->
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
<!-- Semester Master Design Start-->
<div class="admission">
	   <div class="container">
	  
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>Add New Semester</h2>
	   	  	<form method="post">
             
             <div class="input-group input-group1">
            
                <input class="form-control has-dark-background" name="sem_name" id="slider-name" placeholder="Semester Name" type="text" required="" maxlength=""
                value="<?php 
                if(isset($_GET['edit']))
                {
                    echo $row1['sem_name'];
                }
                else
                {
                    echo"";
                }

                ?>"
                >
             </div>
             <?php
                if(isset($_GET['edit']))
                {
                    echo "<input type='submit' value='Update' name='update_semester' class='course-submit'>";                                        
                }
                else
                {
                    echo "<input type='submit' value='Add' name='add_semester' class='course-submit'>";
                }
             ?>
<!--              <input type="submit" value="Add" name="add_semester" class="course-submit"> -->
            </form>
          </div>
        </div>
</div>

<div class="container">
	<div class="col-md-9">
		<div class="course_list">
          	<div class="table-header clearfix">
                	<div class="id_col">Semester Name</div>
                	<!-- <div class="name_col">Semester Name</div> -->
                  	
    		</div>
            <?php

                $sql="SELECT *FROM tbl_semestermaster";

                $result=mysql_query($sql);

                while ($row=mysql_fetch_assoc($result))
                {



                  echo  "<ul class='table-list'>

                            <li class='clearfix'>
                        
                            <div class='id_col'>";?> <?php echo $row["sem_name"]; ?></div>

                            <?php
                              echo "<div class='name_col'><a href='#'>";
                            ?> 
                            </a></div>

                            <?php  
                            echo "<div class='duration_col'>
                                      
                                      <a href='semester_master.php?edit=".$row['sem_id']."'>Edit</a>
                                      
                                      <a href='semester_master.php?delete=".$row['sem_id']."'>Delete</a>
                                    </div>
                                 </li>
                              </ul>";
            
                }
            ?>


          	<!-- <ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">001</div>

        				<div class="name_col"><a href="#">8<sup>th</sup>Semester</a></div>

        				<div class="duration_col">
        						<a href="#">Edit</a>
        						<a href="#">Update</a>
        						<a href="#">Delete</a>
        				</div>
    			</li>
    		</ul>
    		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">002</div>

        				<div class="name_col"><a href="#">9<sup>th</sup>Semester</a></div>

        				<div class="duration_col">
        						<a href="#">Edit</a>
        						<a href="#">Update</a>
        						<a href="#">Delete</a>
        				</div>
    			</li>
    		</ul>
    		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">003</div>

        				<div class="name_col"><a href="#">10<sup>th</sup>Semester</a></div>

        				<div class="duration_col">
        						<a href="#">Edit</a>
        						<a href="#">Update</a>
        						<a href="#">Delete</a>
        				</div>
    			</li>
    		</ul> -->
    	</div>
	</div>
</div>




<!-- Semester Master Design Stop-->
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
                   <strong>Opp Sola Civil</strong>
                    <br>
                    <span>Near Gujarat High Court </span>
                    <br><br>
                    <span>S.G.Highway, Sola</span>
                    <br>
                    <abbr>Mobile No : </abbr> +91 7927664785
                    <br>
                    <abbr>Email : </abbr> <a href="#">rctisola@yahoo.com</a>
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
		       <p>Copyright © 2016 Learn . All Rights Reserved  | Design by <a href="#" target="_blank">Nirmal Patel && Bhupinder Singh</a> </p>
	        </div>
    	</div>
    </div>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	