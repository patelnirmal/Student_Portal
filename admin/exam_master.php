<?php

   include('db/session.php');

   if (isset($_POST['add_exam'])) {
       $ename = $_POST['exam_name'];
       $etype = $_POST['exam_type'];
       $emarks = $_POST['exam_marks'];

        $sql = mysql_query("INSERT INTO tbl_exammaster(exam_name,exam_type,exam_marks)
                            VALUES('$ename','$etype','$emarks')");
        if ($sql) {
            echo "<script>alert('New Exam Added Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";   
        }
   }

   if (isset($_POST['update_exam'])) {
     $edit_id = $_GET['edit'];
     $exam_name = $_POST['exam_name'];
     $exam_type = $_POST['exam_type'];
     $exam_marks = $_POST['exam_marks'];

     $update = mysql_query("UPDATE tbl_exammaster SET exam_name = '$exam_name', 
              exam_type = '$exam_type', exam_marks='$exam_marks' 
              WHERE exam_id='$edit_id'");
     if ($update) {
            echo "<script>alert('Exam Updated Successfully')</script>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";   
        }
   }

?>
<?php
    if (isset($_GET['edit'])) {
      $edit_id = $_GET['edit'];
      $select = mysql_query("SELECT * FROM tbl_exammaster WHERE exam_id = '$edit_id'");
      $row1=mysql_fetch_array($select);
    }

    if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $delete = mysql_query("DELETE FROM tbl_exammaster where exam_id='$delete_id'");
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

   <!-- Collect the nav links, forms, and other content for toggling -->
    <?php
    include 'layouts/menu.php';
   ?><!-- /.navbar-collapse -->

<!-- Standard Master Design Start-->
<div class="admission">
	   <div class="container">
	  
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>Add New Exam</h2>
	   	  	<form method="post">
             
             
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="exam_name" id="slider-name" placeholder="Exam Name" type="text" required="" 
                value="<?php
                    if (isset($_GET['edit'])) {
                      echo $row1['exam_name'];
                    }
                    else{
                      echo "";
                    }
                ?>" 
                >
             </div>
             <div class="input-group input-group1">
                <select name="exam_type" class="selectstyle">
                    <option value="Select Exam">Select Exam</option>
                    <option value="Theory Exam">Theory Exam</option>
                    <option value="Practical Exam">Practical Exam</option>
                </select>
                <!-- <input class="form-control has-dark-background" name="exam_type" id="slider-name" placeholder="Exam Type" type="text" required=""> -->
             </div>
             <div class="input-group input-group1">
                <input class="form-control has-dark-background" name="exam_marks" id="slider-name" placeholder=" Exam Marks" type="number" required=""
                value="<?php
                    if (isset($_GET['edit'])) {
                      echo $row1['exam_marks'];
                    }
                    else{
                      echo "";
                    }
                ?>" >
             </div>

             <?php
                  if (isset($_GET['edit'])) {
                    echo "<input type='submit' value='Update' class='course-submit' 
                            name='update_exam'>";
                  }
                  else{
                    echo "<input type='submit' value='Add' class='course-submit' 
                            name='add_exam'>";
                  }

             ?>
             <!-- <input type="submit" value="Add" class="course-submit" name="add_exam"> -->
            </form>
          </div>
        </div>
</div>

<div class="container">
	<div class="col-md-9">
		<div class="course_list">
          	<div class="table-header clearfix">
                	<div class="id_col">ID</div>
                    <div class="date_col">Exam Name</div>
                  <div class="duration_col">Exam Type</div>
                  <div class="date_col">Exam Marks</div>

    		</div>
           <?php

                $sql="SELECT *FROM tbl_exammaster";

                $result=mysql_query($sql);

                while ($row=mysql_fetch_assoc($result))
                {
                  echo  "<ul class='table-list'>

                            <li class='clearfix'>
                        
                            <div class='id_col'>";?> <?php echo $row["exam_id"]; ?></div>

                    <?php
                              echo "<div class='date_col'>";
                            ?> 
                            <?php echo $row["exam_name"]; 
                            ?></div>

                    <?php
                              echo "<div class='duration_col'>";
                            ?> 
                            <?php echo $row["exam_type"]; 
                            ?></div>

                    <?php
                              echo "<div class='date_col'>";
                            ?> 
                            <?php echo $row["exam_marks"]; 
                            ?></div>

                     <?php  
                            echo "<div class='duration_col'>
                          <a href='exam_master.php?edit=".$row['exam_id']."'>Edit</a>
                          
                          <a href='exam_master.php?delete=".$row['exam_id']."'>Delete</a>
                            </div>
                           </li>
                          </ul>";
            
                }
            ?>

          	<!-- <ul class="table-list">
            	<li class="clearfix">
    			  <div class="id_col">001</div>
                  <div class="date_col">Social Science</div>
                  <div class="duration_col">weekly</div>
                  <div class="date_col">50</div>
                  <div class="duration_col">
                                <a href="#">Edit</a>
                                <a href="#">Update</a>
                                <a href="#">Delete</a>
                        </div>
    			</li>
    		</ul>
    		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">001</div>
                         <div class="date_col">Science</div>
                        <div class="duration_col">weekly</div>
                        <div class="date_col">50</div>
                        <div class="duration_col">
                                <a href="#">Edit</a>
                                <a href="#">Update</a>
                                <a href="#">Delete</a>
                        </div>
    			</li>
    		</ul>
    		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">001</div>
                        <div class="date_col">Science</div>
                        <div class="duration_col">weekly</div>
                        <div class="date_col">50</div>
                        <div class="duration_col">
                                <a href="#">Edit</a>
                                <a href="#">Update</a>
                                <a href="#">Delete</a>
                        </div>
    			</li>
    		</ul> -->
    	</div>
	</div>
</div>




<!-- Standard Master Design Stop-->
<?php
  include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	