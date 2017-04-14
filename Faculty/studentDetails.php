<?php
    
    include('db/faculty_session.php');
?>

<!DOCTYPE HTML>
<html>
<?php
    include 'layouts/header.php';
?>
<style type="text/css">
 .faculty_box
 {
  margin-top: 20px;
 } 
</style>
<body>


   <!-- Collect the nav links, forms, and other content for toggling -->
   <?php
      include 'layouts/menu.php';
   ?>
    <!-- /.navbar-collapse -->
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

                           echo '<option value="'.$row['department_name'].'">'.$row['department_name']."</option>";
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

                           echo '<option value="'.$row['sem_name'].'">'.$row['sem_name']."</option>";
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
                        if (mysql_num_rows($select)>0) {
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
                        }else{
                          echo "<script>alert('Not data Found')</script>";
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
<?php
  include 'layouts/footer.php';
?>

</body>
</html>