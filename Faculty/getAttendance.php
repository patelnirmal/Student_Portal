<?php
  include 'db/faculty_session.php';

?>
<!DOCTYPE HTML>
<html>
<?php
  include 'layouts/header.php';
?>
<body>

   <?php
      include 'layouts/menu.php';
   ?>
   </div>
</nav>
<div class="admission">
  <div class="container">
      <div class="col-md-6 admission_left">
          <h2>Search Attendance</h2>

          <form method="post" enctype="multipart/form-data">

          <div class="col-md-6 admission_left"">
            <div class="input-group input-group1">
              <input class="form-control has-dark-background" name="studentEn" placeholder="Enrollmment Number" type="Number" required=""><br><br><br>
            </div>
            <input type="submit" value="Submit" class="course-submit" name="findWork">
          </div>
      </div>
  </div>
</div>
<div class="faculty_box">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <th>Enrollment Number</th>
                        <th>Student Name</th>
                        <th>Department</th>  
                        <th>Semester</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                    <?php
                      if (isset($_POST['findWork'])) {
                        $en = $_POST['studentEn'];
                        $search = mysql_query("SELECT * FROM  tbl_attendance WHERE enrollment_no = '$en'");
                        if (mysql_num_rows($search)>0) {
                          while ($row = mysql_fetch_object($search)) {
                          echo "<tr>
                                    <td>$row->enrollment_no</td>
                                    <td>$row->studentname</td>
                                    <td>$row->department</td>
                                    <td>$row->semester</td>
                                    <td>$row->subject</td>
                                    <td><strong><u>$row->status</u></strong></td>
                                    <td>$row->dateStatus</td>
                                    </tr>";
                        }
                        }else{
                          echo "<script>alert('No Data Found')</script>";
                        }
                      }
                    ?>
                    </tbody>
                </table>
            </div>
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