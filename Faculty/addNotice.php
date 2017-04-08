<?php
	include 'db/faculty_session.php';

	if (isset($_POST['add_notice'])) {
		$ntitle = $_POST['notice_title'];
		$ndescription = $_POST['notice_description'];
		$ndepartment = $_POST['department'];
    $notice_src = $name;
    $ndate = date("Y/m/d");

		$sql = mysql_query("INSERT INTO tbl_notice(notice_date,notice_src, notice_title,notice_details,notice_department) 
			VALUES ('$ndate','$notice_src','$ntitle','$ndescription','$ndepartment')");
		if ($sql) {
			echo "<script>alert('New Notice Added Successfully')</script>";
		}else{
			echo "<script>alert('Failed')</script>";
		}
	}

  if (isset($_POST['update_notice'])) {
      $edit_id = $_GET['edit'];
      $ntitle = $_POST['notice_title'];
      $ndescription = $_POST['notice_description'];
      $ndepartment = $_POST['department'];

      $update = mysql_query("UPDATE tbl_notice SET notice_title = '$ntitle', 
              notice_details= '$ndescription ', notice_department='$ndepartment' 
              WHERE notice_id='$edit_id'");
       if ($update) {
            echo "<script>alert('Exam Updated Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";  
            echo mysql_error(); 
        }
  }
?>
<?php
    if (isset($_GET['edit'])) {
      $edit_id = $_GET['edit'];
      $select = mysql_query("SELECT * FROM tbl_notice WHERE notice_id = '$edit_id'");
      $row1=mysql_fetch_array($select);

    }

    if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $delete = mysql_query("DELETE FROM tbl_notice where notice_id='$delete_id'");
      if ($delete) {
        echo "<script>alert('Deleted Successfully')</script>";
      }
      else{
        echo "<script>alert('Failed')</script>";
      }
    }
?>
<!DOCTYPE HTML>
<html>
<?php
	include 'layouts/header.php';
?>
<body>
<script type="text/javascript"> 
function formatText(el,tagstart,tagend) {
    if (el.setSelectionRange) {
    el.value = el.value.substring(0,el.selectionStart) + tagstart + el.value.substring(el.selectionStart,el.selectionEnd) + tagend + el.value.substring(el.selectionEnd,el.value.length)
    }
    else {
      // IE code here...
    }
  }
</script>
<style type="text/css">
.course-submit1 {

    border: none;
    width: 100px;
    height: 40px;
    margin-left: 10px;
    background-color:#f1b458;
    color: #ffffff;
    line-height: 44px;
    padding: 0 30px;
    font-size: 14px;
    text-transform: uppercase;
    border-radius: 0px;
    display: inline-block;
    margin-top: 20px;
    outline: none;
}
.course-submit1:hover {
    background-color:#2f374c;
}
</style>
   <?php
   		include 'layouts/menu.php';
   ?>

<div class="admission">
	   <div class="container">
	  
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>Add New Notice</h2>
	   	  	<form method="post">
             
             <div class="input-group input-group1">
	    		<input class="form-control has-dark-background" name="notice_title" 
                 id="slider-name" placeholder="Notice Title" type="text" required=""
                 value="<?php
                    if (isset($_GET['edit'])) {
                      echo $row1['notice_title'];
                    }
                    else{
                      echo "";
                    }
                ?>"><br><br><br>

                <textarea id="myta" class="form-control has-dark-background" name="notice_description" placeholder="Notice Description"><?php
                    if (isset($_GET['edit'])) {
                      echo $row1['notice_details'];
                    }
                    else{
                      echo "";
                    }
                  ?></textarea> <br>
                
                <input class="course-submit1"  type="button" value="BOLD" onclick="formatText(document.getElementById('myta'),'<strong>','</strong>')"/>
                <input class="course-submit1" type="button" value="ITALIC" onclick="formatText(document.getElementById('myta'),'<i>','</i>')"/>
                <input class="course-submit1" type="button" value="UNDERLINE" onclick="formatText(document.getElementById('myta'),'<u>','</u>')"/><br><br>

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
              <!-- <input type="submit" value="Add New Notice" class="course-submit" name="add_notice"> -->
              <?php
                if (isset($_GET['edit'])) {
                  echo "<input type='submit' value='Update' class='course-submit' 
                            name='update_notice'>";
                }
                else{
                  echo "<input type='submit' value='Add New Notice' class='course-submit' 
                            name='add_notice'>"; 
                }
              ?>
             </div>
            </form>
          </div>
        </div>
</div>
<div class="container">
  <div class="col-md-12">
    <div class="course_list">
            <div class="table-header clearfix">
                  <div class="id_col">ID</div>
                  <div class="name_col">Notice Title</div>
                  <div class="name_col">Notice Description</div>
                  
            </div>
            <?php

                $sql="SELECT *FROM tbl_notice";

                $result=mysql_query($sql);

                while ($row=mysql_fetch_assoc($result))
                {
                  echo  "<ul class='table-list'>

                            <li class='clearfix'>
                        
                            <div class='id_col'>";?> <?php echo $row["notice_id"]; ?></div>

                    <?php
                              echo "<div class='name_col'><a href='#'>";
                            ?> 
                            <?php echo $row["notice_title"]; 
                            ?></a></div>

                    <?php
                              echo "<div class='date_col'>";
                            ?> 
                            <?php echo $row["notice_details"]; 
                            ?></div>

                    

                    <?php  
                            echo "<div class='duration_col'>
                          <a href='addNotice.php?edit=".$row['notice_id']."'>Edit</a>
                          
                          <a href='addNotice.php?delete=".$row['notice_id']."'>Delete</a>
                            </div>
                           </li>
                          </ul>";
            
                }
            ?>  
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