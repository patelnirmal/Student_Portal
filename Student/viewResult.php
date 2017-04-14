<?php
    
    include('db/student_session.php');
    
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
   ?><!-- /.navbar-collapse -->
   
<div class="admission">
  <form method="post">
    <div class="container">
      <h3>Student Report</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <input class="form-control has-dark-background" name="studentEn" placeholder="Enter Enrollmment Number" type="text"><br><br><br>
          <input type="submit" value="Find" class="course-submit" name="btnreport">
        </div>
      </div>

    </div>
    
    <div class="faculty_box">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <th>Enrollment No.</th>
                        <th>Student Name</th>
                        <th>AJAVA</th>
                        <th>NMA</th>
                        <th>MCAD</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['btnreport']))
                      {
                        $en = $_POST['studentEn'];
                        $select = mysql_query("SELECT * from tbl_examresults where EnrollMentNumber='$en'");
                        if (mysql_num_rows($select)>0) {
                          while($row = mysql_fetch_object($select))
                          {
                                  echo "<tr>
                                      <td>$row->EnrollMentNumber</td>
                                      <td>$row->Student_Name</td>
                                      <td>$row->AJAVA</td>
                                      <td>$row->NMA</td>
                                      <td>$row->MCAD</td>
                                      <td>$row->Total</td>
                                    </tr>";
                          }
                        }else{
                          echo "<script>alert('No data Found')</script>";
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