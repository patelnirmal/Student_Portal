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
                		<td>Department</td>
                    <td>Sem</td>
                    <td>Exam Suject</td>
                    <td>Exam Marks</td>
                		<td>Exam Date</td>
                	</tr>
                	<tr>
                		<td>
                			<select name="examname" id="examname" class="selectstyle">
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
                			<select name="exdepartment" id="exdepartment" class="selectstyle" onchange="searchSubject()">
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
                    <select name="esemester" id="esemester" class="selectstyle" onchange="searchSubject()">
                  <option value="Select Semester">Select Semester</option>
                  <?php
                              $semname = mysql_query("SELECT * FROM tbl_semestermaster");
                              while($row = mysql_fetch_array($semname))
                              {
                                echo '<option value="'.$row['sem_name'].'">'.$row['sem_name']."</option>";
                              }
                              ?>
                </select>
                			
                		</td>
                		<td>
                    <select name="examsubject" class="selectstyle" id="examsubject">
                        
                      </select>
                			
                		</td>
                		<td>
                      <input class="form-control has-dark-background" name="exammarks" id="slider-name" placeholder="Subject Marks" type="text" required="" >
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
<script type="text/javascript">
            function searchSubject() {
                var dep = document.getElementById('exdepartment').value;
                var sem = document.getElementById('esemester').value;
                var sub = document.getElementById('examsubject');
                
                if (dep == "Computer Department") {
                    if (sem == "1") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('Basic Mathematics', 'Basic Mathematics');
                        sub.options[sub.options.length] = new Option('English', 'English');
                        sub.options[sub.options.length] = new Option('E.C.H.M', 'E.C.H.M');
                        sub.options[sub.options.length] = new Option('Coputer Programming', 'Coputer Programming');
                        sub.options[sub.options.length] = new Option('Fundamental Of Digital Electronics', 'Fundamental Of Digital Electronics');
                        sub.options[sub.options.length] = new Option('Fundamental of Computer Applications', 'Fundamental of Computer Applications');
                    }
                    if (sem == "2") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('Maths 2', 'Maths 2');
                        sub.options[sub.options.length] = new Option('Advance Computer Programming', 'Advance Computer Programming');
                        sub.options[sub.options.length] = new Option('Basics Physics', 'Basics Physics');
                        sub.options[sub.options.length] = new Option('Basic Electronics', 'Basic Electronics');
                        sub.options[sub.options.length] = new Option('  CONTRIBUTOR PERSONALITY DEVELOPMENT', ' CONTRIBUTOR PERSONALITY DEVELOPMENT');   
                    }
                    if (sem == "3") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('OPERATING SYSTEM', 'OPERATING SYSTEM');
                        sub.options[sub.options.length] = new Option('PROGRAMMING IN C++','PROGRAMMING IN C++ ');
                        sub.options[sub.options.length] = new Option('Database Management System', 'Database Management System');
                        sub.options[sub.options.length] = new Option('Data Structure', 'Data Structure');
                        sub.options[sub.options.length] = new Option('MICROPROCESSOR & ASSEMBLY LANGUAGE PROGRAMMING', 'MICROPROCESSOR & ASSEMBLY LANGUAGE PROGRAMMING');
                    }
                    if (sem == "4") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('ADVANCED DATABASE MANAGEMENT SYSTEM ', 'ADVANCED DATABASE MANAGEMENT SYSTEM ');
                        sub.options[sub.options.length] = new Option('COMPUTER NETWORKS','COMPUTER NETWORKS ');
                        sub.options[sub.options.length] = new Option('.NET PROGRAMMING', '.NET PROGRAMMING');
                        sub.options[sub.options.length] = new Option('COMPUTER ORGANIZATION AND ARCHITECTURE', 'COMPUTER ORGANIZATION AND ARCHITECTURE');
                        sub.options[sub.options.length] = new Option('WEB DEVELOPMENT TOOLS', 'WEB DEVELOPMENT TOOLS');
                        sub.options[sub.options.length] = new Option('PROJECT-I', ' FUNDAMENTALS OF SOFTWARE DEVELOPMENT');
                    }
                    if (sem == "5") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('  COMPUTER MAINTENACE AND TROUBLE SHOOTING', '  COMPUTER MAINTENACE AND TROUBLE SHOOTING');
                        sub.options[sub.options.length] = new Option('DYNAMIC WEB PAGE DEVELOPMENT','DYNAMIC WEB PAGE DEVELOPMENT ');
                        sub.options[sub.options.length] = new Option('JAVA PROGRAMMING', 'JAVA PROGRAMMING');
                        sub.options[sub.options.length] = new Option('COMPUTER AND NETWORK SECURITY', 'COMPUTER AND NETWORK SECURITY');
                        sub.options[sub.options.length] = new Option('WEB DEVELOPMENT TOOLS', 'WEB DEVELOPMENT TOOLS');
                        sub.options[sub.options.length] = new Option('PROJECT-I', 'PROJECT-I');
                    }
                    if (sem == "6") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('Advance Java Programming', 'Advance Java Programming');
                        sub.options[sub.options.length] = new Option('Mobile Computing and Developement','Mobile Copmuting and Developement');
                        sub.options[sub.options.length] = new Option('Network Management and Administation','Network Management and Administation');
                        sub.options[sub.options.length] = new Option('PPUD', 'PPUD');
                        sub.options[sub.options.length] = new Option('PROJECT-II', 'PROJECT-II');
                    }
                    if (sem == "7") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('Not Valid Option', 'Not Valid Option');
                    }
                    if (sem == "8") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('Not Valid Option', 'Not Valid Option');
                    }
                }
                else if (dep == "IT Department") {
                    for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                    }
                    if (sem == "1") {
                        for(i = sub.options.length - 1 ; i >= 0 ; i--){
                        sub.remove(i);
                        }
                        sub.options[sub.options.length] = new Option('Basic Mathematics', 'Basic Mathematics');
                        sub.options[sub.options.length] = new Option('English', 'English');
                        sub.options[sub.options.length] = new Option('E.C.H.M', 'E.C.H.M');
                        sub.options[sub.options.length] = new Option('Coputer Programming', 'Coputer Programming');
                        sub.options[sub.options.length] = new Option('Fundamental Of Digital Electronics', 'Fundamental Of Digital Electronics');
                        sub.options[sub.options.length] = new Option('Fundamental of Computer Applications', 'Fundamental of Computer Applications');
                    }
                    
                }
            }
          </script>
</body>
</html>	