<?php
    
    include('db/session.php');
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
      <h3>Faculty Report</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <select name="facultydepartment" class="selectstyle">
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
      <input type="submit" value="Find" class="course-submit" name="btnreport">

    </div>
    
    <div class="faculty_box">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <!-- <th>First Name</th> -->
                        <!-- <th>Last Name</th> -->
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Contat No</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Email Id</th>
                        <th>Department</th>
                        <th>Qualification</th>
                        <th>Designation</th>
                        <th>Photo</th>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['btnreport']))
                      {
                        $dept = $_POST['facultydepartment'];
                        $select = mysql_query("SELECT * FROM tbl_faculty_add WHERE department='$dept'");
                        if (mysql_num_rows($select)>0) {
                          while($row = mysql_fetch_object($select))
                          {
                              echo "<tr>
                                      <td>$row->first_name $row->last_name</td>
                                      <td>$row->faculty_address</td>
                                      <td>(P)$row->faculty_contact <br> (A)$row->faculty_alternate_contact</td>
                                      <td>$row->dob</td>
                                      <td>$row->gender</td>
                                      <td>$row->email_id</td>
                                      <td>$row->department</td>
                                      <td>$row->examination_passed</td>
                                      <td>$row->designation</td>
                                      <td><img src='Faculty_photo/$row->faculty_photo' height='100' width='100'></td>
                                    </tr>";
                          }
                        }else{
                          echo "<script>alert('No record Found')</script>";
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