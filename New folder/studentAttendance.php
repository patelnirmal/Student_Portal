<?php
   include('db/faculty_session.php');
   if(isset($_POST['btnreport']))
   {
      echo "a";
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
<?php
  include 'layouts/menu.php';
?>
<script type="text/javascript">
  function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getAttlist.php?q="+str,true);
       
        xmlhttp.send();
    }
}
</script>
<div class="admission">
<form method="post" action="">  
    <div class="container">
      <h3>Student Detail</h3>
      <div class="col-md-6 admission_left">
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
      </td>
      <div class="col-md-6 admission_left">
        <div class="input-group input-group1">
          <select name="studentsemester" class="selectstyle" onchange="showUser(this.value)">
                      <option value="Select Semester" >Select Semester</option>
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
            <select name="logtype" class="selectstyle">
              <option value="Select Subject">Select Subject</option>
              <option value="C++">C++</option>
              <option value="JAVA">JAVA</option>
              <option value=".NET">.NET</option>
              <option value="A.JAVA">A.JAVA</option>
            </select>
          
      </div>
      <center>
      <input type="submit" value="Save" class="course-submit" name="btnreport"></br></br>
      </center>
    
  
</div>
    <div>
</form>
<!-- form -->
<div class="faculty_box">
        <div class="container">
            <div class="row">
                <form id="idForm" method="post">
                <div id="txtHint"><b>Students will be listed here...</b></div>
                 
               </form>
               
               
            </div>
        </div>
</div>
<?php
  include 'layouts/footer.php';
?>

</body>
</html>
<script type="text/javascript">

$(document).ready(function(){
   var form=$("#idForm");
  $(".btnsave").click(function(){
    $.ajax({
            type:"POST",
            url:'getAttlist.php',
            data:$("#idForm").serialize(),//only input
            success: function(response){
                console.log(response);  
            }
        });
    });
});
</script>