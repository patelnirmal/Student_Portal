<?php
	
	include('db/student_session.php');

  if (isset($_POST['submitwork'])) {
    $en = $_POST['studentEn'];
    $subject = $_POST['studentSubject'];
    $dept = $_POST['department'];
    $sem = $_POST['semester'];
    // $work = $_FILES["file"]["name"];

  if(file_exists("Submission_Work/" . $_FILES["file"]["name"]))
       {
          echo $_FILES["file"]["name"] . " already exists. ";       
        }
      else
      {
          $work = $_FILES["file"]["name"];
          $filePath = "Submission_Work/" . $work;
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$filePath))
          { 
            $insert = mysql_query("INSERT INTO tbl_student_submissions (enrollment_no, subject_name,subject_department,subject_sem,submission_work) 
            VALUES ('$en','$subject','$dept','$sem','$work')");

            if($insert)
            {
              echo "<script>alert('New Student Added Successfully')</script>";
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
<?php include 'layouts/header.php'; ?>
<body>
<?php include 'layouts/menu.php'; ?>
<div class="admission" >
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <h3>Student Submissions</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <input class="form-control has-dark-background" name="studentEn" placeholder="Enrollmment Number" type="text"><br><br><br>

          <input class="form-control has-dark-background" name="studentSubject" placeholder="Subject Name" type="text"><br><br><br>

          <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="studentdepartment" class="selectstyle" id="studentdepartment" 
                  onchange="searchSubject()">
                      <option value="Select Department">Select Department</option>
                      <?php
                        $dept = mysql_query("SELECT * FROM tbl_branchmaster");
                        while($row = mysql_fetch_array($dept))
                        {

                           echo '<option value="'.$row['department_name'].'">'.$row['department_name']."</option>";
                        }

                      ?>
          </select>
        </div>
      </div>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="studentsemester" class="selectstyle" id="studentsemester" onchange="searchSubject()">
                      <option value="Select Semester">Select Semester</option>
                      <?php
                        $seme = mysql_query("SELECT * FROM tbl_semestermaster");
                        while($row = mysql_fetch_array($seme))
                        {
                           echo '<option value="'.$row['sem_name'].'">'.$row['sem_name']."</option>";
                        }

                      ?>
          </select>
        </div>
        
      </div>
      
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="subject" class="selectstyle" id="subject">
              <!-- <option>Subject</option> -->
          </select>
          <script type="text/javascript">
            function searchSubject() {
                var dep = document.getElementById('studentdepartment').value;
                var sem = document.getElementById('studentsemester').value;
                var sub = document.getElementById('subject');
                
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
                        sub.options[sub.options.length] = new Option('PROJECT-II', 'PROJECT-II');
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
        </div>


          <input type="file" name="file" class="file upload_1"><br><br>
          <input type="submit" value="Submit" class="course-submit" name="submitwork">

        </div>
      </div>
    </div>
  </form>
</div>
<?php include 'layouts/footer.php'; ?>
</body>
</html> 