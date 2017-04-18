<?php
	include('db/faculty_session.php');
  
?>
<!DOCTYPE HTML>
<html>
<?php
	include 'layouts/header.php';
?>
<style type="text/css">
/*body {
  font-size: 16px;
}*/

/*.selects {
  align-items: center;
  display: flex;
  flex-direction: row;
}*/

/*select {
  appearance: none;
  border: 0;
  font-size: 16px;
  font-family: 'Helvetica Neue';
  padding: 0;
  margin: 0;
}*/

select:first-child {
}

</style>
<body>
   <?php
   		include 'layouts/menu.php';
   ?>
   </div>
<form method="post" action="">  
    <div class="container">
      <h3>Student Detail</h3>
      <div class="col-md-6 admission_left">
        <div class="input-group input-group1">
          <select name="studentdepartment" class="selectstyle" id="studentdepartment" onchange="searchSubject()">
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
      </td>
      <div class="col-md-6 admission_left">
        <div class="input-group input-group1">
          <select name="studentsemester" class="selectstyle" id="studentsemester" onchange="searchSubject()">
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
        </br>
      </div> 

      </div>
      <center>
      <input type="submit" value="Find" class="course-submit" name="btnreport"></br></br>
      </center>

</form>
<div class="faculty_box">
        <div class="container">
            <div class="row">
                <form id="idForm" method="post">
                <input type="date" name="getDate"><br><br> 
                <div class="col-md-6 admission_left">
                <div class="input-group input-group1">
                      <select name="sub">
                          <option>Select Subject</option>
                          <?php 
                              $dd = $_POST['studentdepartment'];
                              $ss = $_POST['studentsemester'];
                              $subjectDb = mysql_query("SELECT subject_name from tbl_subjectmaster where department = '$dd' AND sem_name = '$ss' ");
                              while($row = mysql_fetch_array($subjectDb))
                              {

                                echo '<option value="'.$row['subject_name'].'">'.$row['subject_name']."</option>";
                              }
                          ?>
                      </select>
                    </div>
                  </div><br><br><br>
<label>Start Time</label>
<p><input type="time" step="900" value="08:30" class="time-picker" name="startLec"></p>
<label>End Time</label>
<p><input type="time" step="900" value="08:30" class="time-picker" name="endLec"></p>

<?php
    if (isset($_POST['btnreport'])) {
        $aa = $_POST['studentdepartment'];
        $bb = $_POST['studentsemester'];
        $sql=mysql_query("SELECT * FROM tbl_student_admission WHERE 
                          department='$aa' AND semester = '$bb'");
$result = array();
while ($row = mysql_fetch_assoc($sql)) {
        $result[] = $row;
    }

echo "<table class='table table-bordered'>
                    <thead>
                        <th>Enrollment Number</th>
                        <th>Student Name</th>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Status</th>
                    </thead>";

foreach ($result as $item) {
    ?>
    <tr>
        <td><input type="Number"  name="stuen[]" value="<?php echo $item['enrollment_number'] ?>"></td>
        <td><input type="text" name="stuname[]" value="<?php echo $item['first_name']." ".$item['last_name'] ?>"></td>
        <td><input type="text"  name="studept[]" value="<?php echo $item['department'] ?>"></td>
        <td><input type="text"  name="stusem[]" value="<?php echo $item['semester'] ?>"></td>
        <td>
            <select name='attndc[]' class='selectstyle'>
                <option value='Present'>Present</option>
                <option value='Absent'>Absent</option>
            </select>
        </td>
    </tr>
    <?php
    }
}
?>
<input type="submit" value="Save" class="course-submit" name="take"></br></br>

</form>
<?php
    if (isset($_POST['take'])) {
        $total = count($_POST['stuen']);
        $ssub = $_POST['sub'];
        $slec = $_POST['startLec'];
        $elec = $_POST['endLec'];
        for($i=0;$i<$total;$i++){
            $studentid = $_POST['stuen'][$i];
            $sname = $_POST['stuname'][$i];
            
            $sdept= $_POST['studept'][$i];
            $ssem = $_POST['stusem'][$i];
            $attndc = $_POST['attndc'][$i];
            $d = $_POST['getDate'];
            
            $insert = mysql_query("INSERT into  tbl_attendance(enrollment_no,studentname,subject,department,semester,status,dateStatus,startLecture,endLecture) VALUES ('$studentid','$sname','$ssub','$sdept','$ssem','$attndc','$d','$slec','$elec')");
        }
        if($insert){
            echo "<script>alert('Attendance Done')</script>";
            // header("Location:index.php");
        }
        else{
            echo "<script>alert('Failed')</script>";
            echo mysql_error();
            
        }
    }
?>               
               
</div>
</div>
</div>


	
<?php
	// include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
console.log('load');
const hourInput = document.getElementById('hour');
const minuteInput = document.getElementById('minute');
hourInput.addEventListener('change', function (event) {
  minuteInput.focus();
});

</script>        
</body>
</html>	