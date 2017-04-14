<?php
  include 'db/faculty_session.php';
  $cuser=$_SESSION['login_userf'];

   $select = mysql_query("SELECT * FROM tbl_faculty_add where facid='$cuser'");
                        
                        while($row = mysql_fetch_object($select))
                        {
                                  $fname=$row->first_name;
                                  $lname=$row->last_name;
                                  $faname=$row->father_name;
                                  $mname=$row->mother_name;
                                  $address=$row->faculty_address;
                                  $sarea=$row->area;
                                  $scity=$row->city;
                                  $spincode=$row->pincode;
                                  $scontact=$row->faculty_contact;
                                  $pcontact=$row->faculty_alternate_contact;
                                  $semail=$row->email_id;
                                  $sdepartment=$row->department;
                                 $sexam= $row->examination_passed;
                                 $suniversity=$row->university;
                                 $syearpass=$row->year_of_passing;
                                 $pic = $row->faculty_photo;
                              
                        }
?>
<!DOCTYPE HTML>
<html>
<?php
  include 'layouts/header.php';
?>
<style type="text/css">
.aa{
  height:60%;
  width: 50%;
}
</style>
<body>

<?php
  include 'layouts/menu.php';
?>
<div class="admission">
     <div class="container">
        <div class="faculty_top">
            <div class="col-md-4 faculty_grid">
              <figure class="team_member">
                <img src="../admin/faculty_photo/<?php echo $pic; ?>" class="aa" alt=""/>
              </figure>
            </div>
          </div>
     </div>
</div>
      <div class="col-md-5 admission_left">
        <center><h2>Personal Information</h2></center>
          <br>
              <div class="input-group input-group1">
              <div class="row">
                <table class="table table-striped">
                  <tr>
                      <td><label for="male">First Name:-</label></td>
                      <td><?php echo $fname; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Last Name:-</label></td>
                      <td><?php echo $lname; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Father Name:-</label></td>
                      <td><?php echo $faname; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Mother Name:-</label></td>
                      <td><?php echo $mname; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Address:-</label></td>
                      <td><?php echo $address; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">City:-</label></td>
                      <td><?php echo $scity; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Pincode:-</label></td>
                      <td><?php echo $spincode; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Student ContactNo:-</label> </td>
                      <td><?php echo $scontact; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Parents ContactNo:-</label> </td>
                      <td><?php echo $pcontact; ?></td>
                  </tr>
                  <tr>
                      <td><label for="male">Email:</label> </td>
                      <td><?php echo $semail; ?></td>
                  </tr>
               </table>                

              </div>
            </div>
   </div>
   <div class="col-md-2">
     
   </div>
            <div class="col-md-5 admission_right">
               <center><h2>Education Information</h2></center>
               <br>
                  <div class="input-group input-group1">
                    <div class="row">
                      <table class="table table-striped ">
                        <tr>
                            <td><label for="male">Department:-</label></td>
                            <td><?php echo $sdepartment; ?></td>
                        </tr>
                        <tr>
                            <td><label for="male">Exam Pass:-</label></td>
                            <td><?php echo $sexam; ?></td>
                        </tr>
                        <tr>
                            <td><label for="male">University/Board:-</label></td>
                            <td><?php echo $suniversity; ?></td>
                        </tr>
                        <tr>
                            <td><label for="male">Year of Passing:-</label> </td>
                            <td><?php echo $syearpass; ?></td>
                        </tr>
                      </table>
                   </div>
                    
                  </div>
            </div>
             </tbody> 
            </div>
        </div>
     </div>
  
<?php
  include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html> 