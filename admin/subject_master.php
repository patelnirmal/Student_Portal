<?php
    
    include('db/session.php');
    if (isset($_POST['add_subject'])) {
        $dept = $_POST['department'];
        $sem = $_POST['semester'];
        $sub = $_POST['subject_name'];
        $insert = mysql_query("INSERT INTO tbl_subjectmaster(department,sem_name,subject_name)
                            VALUES ('$dept','$sem','$sub')");  
        if ($insert) {
            echo "<script>alert('New Subject Added')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
        }
    }
    
?>


<!DOCTYPE HTML>
<html>
<?php
    include 'layouts/header.php';
?>
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
    <?php
    include 'layouts/menu.php';
    ?>
   <!-- /.navbar-collapse -->
   </div>
</nav>
<!-- Standard Master Design Start-->
<div class="admission">
	   <div class="container">
	  
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>Add New Subject</h2>
	   	  	<form method="post">
             
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

                <select name="semester" class="selectstyle">
                    <option value="Select Semester">Select Semester</option>
                    <?php
                      $dept = mysql_query("SELECT * FROM tbl_semestermaster");
                      while($row = mysql_fetch_array($dept))
                      {

                        echo "<option value=".$row['sem_name'].">".$row['sem_name']."</option>";
                      }

                    ?>
                </select><br>
            </div>

             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="subject_name" 
                id="slider-name" placeholder="Subject Name" type="text" required=""
                value="">
             </div>
            

             <input type="submit" value="Add Subject" class="course-submit" name="add_subject">
            </form>
          </div>
        </div>
</div>

<div class="container">
	<div class="col-md-6">
    <h3>Search Subjects:</h3>
		<!-- <div class="course_list">
            <ul class="nav navbar-nav nav_1">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" style="background-color: #F1B458; color: #ffffff";>Computer Department<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                    <ul class="nav navbar-nav nav_1">
                        <li class="dropdown" >
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Semester 1<span class="caret" ></span></a>
                            <?php
                                $comp1 = mysql_query("SELECT * from tbl_subjectmaster where department = 'Computer' and sem_name = '1'");
                                while ($row1=mysql_fetch_array($comp1)) {
                                    echo "<ul>";
                                        echo "<li>".$row1['subject_name']."</li>";
                                    echo "</ul>";
                                }
                            ?>
                        </li>
                    </ul>
                </li>
            </ul>
    	</div> -->
        <form method="post">
             
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

               
                <input type="submit" value="Find Subject" class="course-submit" name="search_subject"><br><br><br>
            </div>
            <!-- <?php
                if (isset($_POST['search_subject'])) {
                    $sel_dept = $_POST['department'];
                    // $sel_sem = $_POST['semester'];

                    if ($sel_dept == 'Computer') {
                        $comp_sem1 = mysql_query("SELECT * from tbl_subjectmaster where department='Computer' and sem_name='1'");
                        echo "<h3>Computer Sem 1</h3>";
                        while ($comp_sem1_row = mysql_fetch_array($comp_sem1)) {
                            echo "<ul>";
                            echo "<li>" . $comp_sem1_row['subject_name'] . "</li>";
                            echo "</ul>";
                        }

                        $comp_sem2 = mysql_query("SELECT * from tbl_subjectmaster where department='Computer' and sem_name='2'");
                        echo "<h3>Computer Sem 2</h3>";
                        while ($comp_sem2_row = mysql_fetch_array($comp_sem2)) {
                            echo "<ul>";
                            echo "<li>" . $comp_sem2_row['subject_name'] . "</li>";
                            echo "</ul>";
                        }                        

                    }
                }
            ?> -->
        <div class="container">                        
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <th>Semester 1</th>
                        <th>Semester 2</th>
                        <th>Semester 3</th>
                        <th>Semester 4</th>
                        <th>Semester 5</th>
                        <th>Semester 6</th>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['search_subject']))
                      {
                        $sel_dept = $_POST['department'];
                        if ($sel_dept == "Computer") {
                            $comp_all = mysql_query("SELECT * from tbl_subjectmaster where department = 'Computer'");
                            while ($comp_row = mysql_fetch_array($comp_all)) {
                              echo "<tr>
                                      <td>$comp_row->subject_name</td>
                                    </tr>";
                            }
                          }  
                      }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
	</div>
</div>




<!-- Standard Master Design Stop-->
<?php
    include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	