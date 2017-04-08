<?php
	include('db/faculty_session.php');
  if (isset($_POST['add_exam'])) {
    $ename = $_POST['examname'];
    $esubject = $_POST['examsubject'];
    $emarks = $_POST['exammarks'];
    $esem = $_POST['esemester'];
    $edepartment = $_POST['exdepartment'];
    $date = $_POST['examdate'];
    // echo $ename;
    // echo $esubject;
    // echo $emarks;
    // echo $esem;
    // echo $edepartment;
    // echo $date;
    // exit();

    $sql = mysql_query("INSERT INTO tbl_examtimetable(exam_name,exam_subject,exam_marks,exam_sem,exam_department,exam_date)
                      VALUES ('$ename','$esubject','$emarks','$esem','$edepartment','$date')");
    if($sql){
      echo "<script>alert('Done')</script>";
    }else{
      echo "<script>alert('Failed')</script>";
      echo mysql_error();

    }
  }
?>
<!DOCTYPE HTML>
<html>
<?php
	include 'layouts/header.php';
?>
<body>


   <!-- Collect the nav links, forms, and other content for toggling -->
   <?php
   		include 'layouts/menu.php';
   ?>
    <!-- /.navbar-collapse -->
   </div>
</nav>
<div class="admission">
	<div class="container">
	  	<div class="col-md-6 admission_left">
	   	  	<h2>Add New Exam Time Table</h2>
	   	  	<form method="post">
        		<div class="faculty_box">
        <div class="container">
            <div class="row">
                
                <table class="table table-bordered">
                	<tr>
                		<td>Exam Name</td>
                		<td>Exam Suject</td>
                		<td>Exam Marks</td>
                		<td>Sem</td>
                		<td>Department</td>
                		<td>Exam Date</td>
                	</tr>
                	<tr>
                		<td>
                			<select name="examname" class="selectstyle">
									<option value="Select Exam Name">Select Exam Name</option>
									<?php
                        			$examname = mysql_query("SELECT * FROM tbl_exammaster");
                        			while($row = mysql_fetch_array($examname))
                        			{
                                echo '<option value="'.$row['exam_name'].'">'.$row['exam_name']."</option>";
                        			}
                  ?>
								</select>
                		</td>
                		<td>
                			<select name="examsubject" class="selectstyle">
                        <option value="Select Semester">Select Subject</option>
                        <?php
                              $deptname = mysql_query("SELECT * FROM tbl_subjectmaster");
                              while($row = mysql_fetch_array($deptname))
                              {
                                  echo '<option value="'.$row['subject_name'].'">'.$row['subject_name']."</option>";
                              }
                              ?>
                      </select>
                      <!-- <input class="form-control has-dark-background" name="examsubject" id="slider-name" placeholder="Subject Name" type="text" required=""> -->
                		</td>
                		
                		<td>
                			<input class="form-control has-dark-background" name="exammarks" id="slider-name" placeholder="Subject Marks" type="text" required="">
                		</td>
                		<td>
                			<select name="esemester" class="selectstyle">
									<option value="Select Semester">Select Semester</option>
									<?php
                        			$semname = mysql_query("SELECT * FROM tbl_semestermaster");
                        			while($row = mysql_fetch_array($semname))
                        			{
                          				// echo "<option value=".$row['sem_name'].">".$row['sem_name']."</option>";
                                echo '<option value="'.$row['sem_name'].'">'.$row['sem_name']."</option>";
                        			}
                      				?>
								</select>
                		</td>
                		<td>
                			<select name="exdepartment" class="selectstyle">
									<option value="Select Department">Select Department</option>
									<?php
                        			$deptname = mysql_query("SELECT * FROM tbl_branchmaster");
                        			while($row = mysql_fetch_array($deptname))
                        			{
                          				
                                echo '<option value="'.$row['department_name'].'">'.$row['department_name']."</option>";
                        			}
                      				?>
								</select>
                		</td>
                		<td>
							<input type="date" name="examdate">                			
                		</td>
                	</tr>

                </table>
            </div>
        </div>
     </div>
     			<input type="submit" value="Add" class="course-submit" name="add_exam">
            </form>
        </div>
</div>

	
	
<?php
	include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	