<?php
	
	include('db/student_session.php');

?>
<!DOCTYPE HTML>
<html>
<?php include 'layouts/header.php'; ?>
<body>
<?php include 'layouts/menu.php'; ?>

<div class="admission">
  <form method="post">
    <div class="container">
      <h3>Exam Time Table</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="department" class="selectstyle" id="studentdepartment">
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
          <select name="semester" class="selectstyle" id="studentsemester">
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
      <input type="submit" value="Search Exam " class="course-submit" name="search_exam">
    </div><br><br>
<div class="faculty_box">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <th>Exam Name</th>
                        <th>Exam Subject</th>
                        <th>Exam Marks</th>
                        <th>Exam Date</th>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['search_exam']))
                      {
                        
                        $dept = $_POST['department'];
                        $sem = $_POST['semester'];
                        $select = mysql_query("SELECT * FROM tbl_examtimetable WHERE exam_department='$dept' AND exam_sem='$sem'");
                        
                          while($row = mysql_fetch_object($select))
                          {
                              echo "<tr>
                                    <td>$row->exam_name</td>
                                    <td>$row->exam_subject</td>
                                    <td>$row->exam_marks</td>
                                    <td>$row->exam_date</td>
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
</form> 

<?php include 'layouts/footer.php'; ?>
</body>
</html> 