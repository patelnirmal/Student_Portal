<?php
    
    include('db/session.php');
  
    if(isset($_POST['add_student'])){
      
      $enrollment = $_POST['enrollment'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $father_name = $_POST['father_name'];
      $mother_name = $_POST['mother_name'];
      $address = $_POST['address'];
      $area = $_POST['area'];
      $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      // $photo = $_POST['file'];
      $email = $_POST['email'];
      $personal_no = $_POST['personal_no'];
      $parents_no = $_POST['parents_no'];
      $department = $_POST['department'];
      $semester = $_POST['semester'];
      $examination = $_POST['examination'];
      $uni = $_POST['uni'];
      $yearofpassing = $_POST['yearofpassing'];
      $per = $_POST['per'];


      if(file_exists("Student_photo/" . $_FILES["file"]["name"]))
       {
          echo $_FILES["file"]["name"] . " already exists. ";       
        }
      else
      {
          $photo = $_FILES["file"]["name"];
          $filePath = "Student_photo/" . $photo;
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$filePath))
          { 
          /*prepare sql query here and insert*/
            
           $insert = mysql_query("INSERT INTO tbl_student_admission(enrollment_number,first_name,last_name,father_name,mother_name,student_address,area,city,pincode,dob,gender,student_photo,email_id,student_contact,parents_contact,department,semester,examination_passed,university,year_of_passing,percentage) 
           VALUES('$enrollment','$fname','$lname','$father_name','$mother_name','$address','$area','$city','$pincode','$dob','$gender','$photo','$email','$personal_no','$parents_no',
           '$department','$semester','$examination','$uni',' $yearofpassing','$per')");

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
<div class="courses_banner">
    <div class="container">
      <h3>Admissions</h3>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Admissions</li>
            </ul>
        </div>
    </div>
  </div>
<!-- form -->
<div class="admission">
     <div class="container">
        <h1>Introduce Yourself</h1>
        
        <div class="col-md-6 admission_left">
          <h2>Personal Information</h2>
          <form method="post" enctype="multipart/form-data">
             <div class="select-block1">
                <!-- <select>
                    <option value="">Title</option>
                    <option value="">Mr.</option>
                    <option value="">Ms.</option>
               </select> -->
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="enrollment" id="slider-name" placeholder="Enrollment Number" type="number" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="fname" id="slider-name" placeholder="First Name" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="lname" id="slider-name" placeholder="Last Name" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="father_name" id="slider-name" placeholder="Father Name" type="text" required="">
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="mother_name" id="slider-name" placeholder="Mother Name" type="text" required="">
             </div>
            <!-- select-block -->
              <div class="select-block1">
                <textarea rows="3" cols="50" placeholder="Permanent Address" name="address"></textarea>
              </div>
              <div class="col-md-4 form_box">
                  <div class="select-block1">
                    <select name="area">
                      <option value="Area">Area</option>
                      <option value="Bapunagar">Bapunagar</option>
                      <option value="Nikol">Nikol</option>
                      <option value="Chandkheda">Chandkheda</option>
                      <option value="SataDhar">SataDhar</option>
                      <option value="Ghatlodia">Ghatlodia</option>
                      <option value="S.G Highway">S.G Highway</option>
                      <option value="Thaltej">Thaltej</option>
                      <option value="Naroda">Naroda</option>
                      <option value="SahiBaug">SahiBaug</option>
                      <option value="Vastral">Vastral</option>
                      <option value="Bopal">Bopal</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box">
                   <div class="select-block1">
                    <select name="city">
                      <option value="City">City</option>
                      <option value="Ahmedabad">Ahmedabad</option>
                      <option value="Surat">Surat</option>
                    </select>
                  </div>
                 </div>
                 <div class="col-md-4 form_box1">
                   <div class="input-group input-group1">
                      <input class="form-control has-dark-background" name="pincode" id="slider-name" placeholder="Postal Code" type="text" required="">
                   </div>
                  </div>
                  <div class="clearfix"> </div>
               <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="dob" id="slider-name" placeholder="DOB" type="date" required="">
             </div>
              <div class="form-group col-md-12 form-group1">
                <label class="col-md-7 control-lable" for="sex">Sex : </label>
                <div class="col-md-5">
                    <div class="radios">
                <label for="radio-01" class="label_radio">
                    <input type="radio" value="Male" name="gender"> Male
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" value="Female" name="gender"> Female
                </label>
                 <!-- <select name="department" class="selectstyle">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br><br> -->
                  </div>
                </div>
                <div class="clearfix"> </div>
             </div>
             <div class="form-field">
         <div class="col-md-7 photo"><label>Upload Photo <em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
         <div class="col-md-5"><input type="file" name="file" class="file upload_1"></div>
        
         <div class="clearfix"> </div>
             </div>
        <div class="form-field">
           <!-- <div class="col-md-7 photo"><label>Upload Signature<em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
           <div class="col-md-5"><input name="photo" id="cphoto" type="file" class="file upload_1" onchange="AlertFilesize();"></div> -->
         <div class="clearfix"> </div>
             </div>
              <!-- </form> -->
            </div>
            <div class="col-md-6 admission_right">
              <h3>Contact Information</h3>
              <!-- <form method="post"> -->
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="email" id="slider-name" placeholder="Email ID" type="text" required="">
               </div>
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="personal_no" id="slider-name" placeholder="Phone no (Personal)" type="text" required="">
               </div>
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="parents_no" id="slider-name" placeholder="Phone no (Parents)" type="text" required="">
               </div><br><br><br>
               <!-- <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="slider-name" id="slider-name" placeholder="Postal code" type="text" required="">
               </div> -->
             <!--  <input type="submit" value="Apply Now" class="course-submit"> -->                               
             <!-- </form>   -->
         </div>

         <div class="col-md-6 admission_right">
              <h3>Admission Details</h3>
              <!-- <form method="post"> -->
               <div class="input-group input-group1">
                  <select name="department" class="selectstyle">
                    <option value="Select Department">Select Department</option>
                    <?php
                      $dept = mysql_query("SELECT * FROM tbl_branchmaster");
                      while($row = mysql_fetch_array($dept))
                      {

                        echo '<option value="'.$row['department_name'].'">'.$row['department_name']."</option>";
                      }

                    ?>
                </select><br><br>
                <select name="semester" class="selectstyle">
                    <option value="Select Semester">Select Semester</option>
                    <?php
                      $dept = mysql_query("SELECT * FROM tbl_semestermaster");
                      while($row = mysql_fetch_array($dept))
                      {

                        echo '<option value="'.$row['sem_name'].'">'.$row['sem_name']."</option>";
                      }

                    ?>
                </select><br><br>
             </div>
                                             
             
         </div>

<div class="clearfix"> </div>
        <table class="timetable">
                  <thead>
                  <tr>
                  <h3>Highest Qualification</h3>
                    <th>Examination <br>Passed</th>
                    <th>School/Board/University</th>  
                    <th>Year of<br> Passing</th> <br></th> <th>Percentage <br>(%)</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                  <td><input name="examination" type="text" class="no-box" placeholder="Examination"></td>
                  <td><input name="uni" type="text" class="no-box" placeholder="University"></td>
                  <td><input name="yearofpassing" type="text" class="no-box" placeholder="YOP"></td>
                  <td><input name="per" type="text" class="no-box" placeholder="Percentage"></td>
                </tr>
               <!--  <tr>
                  <td><input name="examination_passed" type="text" class="no-box"></td>
                  <td><input name="university" type="text" class="no-box"></td>
                  <td><input name="year_of_passing" type="text" class="no-box"></td>
                  <td><input name="percentage" type="text" class="no-box"></td>
                </tr><tr> -->
                  <!-- <td><input name="year_of_passing" type="text" class="no-box"></td> -->
                  <!-- <td><input name="year_of_passing" type="text" class="no-box"></td> -->
                  <!-- <td><input name="year_of_passing" type="text" class="no-box"></td> -->
                  <!-- <td><input name="year_of_passing" type="text" class="no-box"></td> -->
                </tr><tr>
                  <!-- <td><input name="percentage" type="text" class="no-box"></td> -->
                  <!-- <td><input name="percentage" type="text" class="no-box"></td> -->
                  <!-- <td><input name="percentage" type="text" class="no-box"></td> -->
                  <!-- <td><input name="percentage" type="text" class="no-box"></td> -->
                </tr>
               </tbody>
      </table>
      <input type="submit" value="Apply Now" class="course-submit" name="add_student">
      </form>
       <div class="clearfix"> </div>
     </div>
  </div>
<?php
  include 'layouts/footer.php';
?>

</body>
</html>