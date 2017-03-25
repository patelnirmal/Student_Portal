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
   ?><!-- /.navbar-collapse -->
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

                          echo "<option value=".$row['department_name'].">".$row['department_name']."</option>";
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

                          echo "<option value=".$row['sem_name'].">".$row['sem_name']."</option>";
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