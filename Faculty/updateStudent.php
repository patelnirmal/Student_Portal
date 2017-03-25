<?php
    
    include('db/faculty_session.php');
    if (isset($_POST['update_student'])) {
       $enrollment = $_POST['find_en'];
      $enrollmentno = $_POST['enrollment'];
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
      $email = $_POST['email'];
      // $personal_no = $_POST['personal_number'];
      // $parents_no = $_POST['parents_number'];
      
      $update = mysql_query("UPDATE tbl_student_admission SET enrollment_number = '$enrollmentno',
        first_name='$fname',last_name='$lname',father_name='$father_name',
        mother_name='$mother_name',student_address='$address',area='$area',city='$city',
        picode='$pincode',dob='$dob',gender='$gender',email_id='$email' 
        WHERE enrollment_number = '$enrollment' ");
      if($update){
        echo "<script>alert('Updated')</script>";
      }else{
        echo "<script>alert('Failed')</script>";
      }
    }
    
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
   ?>
    <!-- /.navbar-collapse -->
   </div>
</nav>
<div class="admission">
  <form method="post" enctype="multipart/form-data">
    <div class="container">
      <h3>Update Student</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <input class="form-control has-dark-background" name="find_en" id="slider-name" placeholder="Enrollmment Number" type="number" ><br>
        </div>
      </div>
      
      <input type="submit" value="Find" class="course-submit" name="findStudent">

    </div>
<?php
  if(isset($_POST['findStudent']))
  {
      include('db/config.php');
      $enrollment = $_POST['find_en'];
      $select = mysql_query("SELECT * FROM tbl_student_admission where enrollment_number='$enrollment'");
      $erow = mysql_fetch_object($select);
      echo "
            <div class='admission'>
     <div class='container'>
        
        <div class='col-md-6 admission_left'>
          <h2>Personal Information</h2>
          
             <div class='select-block1'>
                <!-- <select>
                    <option value=''>Title</option>
                    <option value=''>Mr.</option>
                    <option value=''>Ms.</option>
               </select> -->
             </div>
             <div class='input-group input-group1'>
                <input class='form-control has-dark-background' name='enrollment' id='slider-name' placeholder='Enrollment Number' type='text' value=' $erow->enrollment_number'>
             </div>
             <div class='input-group input-group1'>
                <input class='form-control has-dark-background' name='fname' id='slider-name' placeholder='First Name' type='text' value='$erow->first_name'>
             </div>
             <div class='input-group input-group1'>
                <input class='form-control has-dark-background' name='lname' id='slider-name' placeholder='Last Name' type='text' value='$erow->last_name' >
             </div>
             <div class='input-group input-group1'>
                <input class='form-control has-dark-background' name='father_name' id='slider-name' placeholder='Father Name' type='text' value='$erow->father_name' >
             </div>
             <div class='input-group input-group1'>
                <input class='form-control has-dark-background' name='mother_name' id='slider-name' placeholder='Mother Name' type='text' value='$erow->mother_name' >
             </div>
            <!-- select-block -->
              <div class='select-block1'>
                <textarea rows='3' cols='50' placeholder='Permanent Address' name='address'>$erow->student_address</textarea>
              </div>
              <div class='col-md-4 form_box'>
                  <div class='select-block1'>
                    <select name='area'>
                      <option value='Area'>Area</option>
                      <option value='Bapunagar'>Bapunagar</option>
                      <option value='Nikol'>Nikol</option>
                    </select>
                  </div>
                 </div>
                 <div class='col-md-4 form_box'>
                   <div class='select-block1'>
                    <select name='city'>
                      <option value='City'>City</option>
                      <option value='Ahmedabad'>Ahmedabad</option>
                      <option value='Surat'>Surat</option>
                    </select>
                  </div>
                 </div>
                 <div class='col-md-4 form_box1'>
                   <div class='input-group input-group1'>
                      <input class='form-control has-dark-background' name='pincode' id='slider-name' placeholder='Postal Code' type='text' value='$erow->pincode' >
                   </div>
                  </div>
                  <div class='clearfix'> </div>
               <div class='input-group input-group1'>
                <input class='form-control has-dark-background' name='dob' id='slider-name' placeholder='DOB' type='date' value='$erow->dob' >
             </div>
              <div class='form-group col-md-12 form-group1'>
                <label class='col-md-7 control-lable' for='sex'>Sex : </label>
                <div class='col-md-5'>
                    <div class='radios'>
                <label for='radio-01' class='label_radio'>
                    <input type='radio' value='Male' name='gender'> Male
                </label>
                <label for='radio-02' class='label_radio'>
                    <input type='radio' value='Female' name='gender'> Female
                </label>
                 
                  </div>
                </div>
               
             </div>
             <div class='form-field'>
         
        
         <div class='clearfix'> </div>
             </div>
        <div class='form-field'>
           
         <div class='clearfix'> </div>
             </div>
              <!-- </form> -->
            </div>
            <div class='col-md-6 admission_right'>
              <h3>Contact Information</h3>
              <!-- <form method='post'> -->
               <div class='input-group input-group1'>
                  <input class='form-control has-dark-background' name='email' id='slider-name' placeholder='Email ID' type='text' value='$erow->email_id' >
               </div>
               <div class='input-group input-group1'>
                  <input class='form-control has-dark-background' name='personal_number' id='slider-name' placeholder='Phone no (Personal)' type='text' value='$erow->student_contact' >
               </div>
               <div class='input-group input-group1'>
                  <input class='form-control has-dark-background' name='parents_number' id='slider-name' placeholder='Phone no (Parents)' type='text' value='$erow->parents_contact'  >
               </div><br><br><br>
               
         </div>

      
      </form>
       
</div>
     <center><input type='submit' value='Update' class='course-submit' name='update_student'></center>
  </div>
           ";
  }
  else
  {

  }
?>

<?php
  include 'layouts/footer.php';
?>

</body>
</html>