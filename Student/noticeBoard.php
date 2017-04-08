<?php
	include 'db/student_session.php';

	
?>
<!DOCTYPE HTML>
<?php include 'layouts/header.php'; ?>
<body>
<?php include 'layouts/menu.php'; ?>
<form method="post">
<div class="admission">
    <div class="container">
        <h1>Search Notice</h1>

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
        <input type='submit' value='Find Notice' class='course-submit' 
                            name='find_notice'>
        </div>
    </div>
</div>
<div class="faculty_box">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <!-- <th>First Name</th> -->
                        <!-- <th>Last Name</th> -->
                        <th>Notice Title</th>
                        <th>Notice Date</th>
                        <th>Notice Source</th>  
                        <th>Notice Description</th>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_POST['find_notice']))
                      {
                        
                        $dept = $_POST['department'];
                        $select = mysql_query("SELECT * FROM tbl_notice WHERE notice_department='$dept'");
                        
                          while($row = mysql_fetch_object($select))
                          {
                              echo "<tr>
                                    <td>$row->notice_title</td>
                                    <td>$row->notice_date</td>
                                    <td>$row->notice_src</td>
                                    <td>$row->notice_details</td>
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
<?php include 'layouts/footer.php'; ?>
</body>
</html>	