<?php
    include('db/session.php');
    if (isset($_POST['add_semester'])) {
        
        $sem_name = $_POST['sem_name'];
        $sem=$sem_name;

        $sql = mysql_query("INSERT INTO  tbl_semestermaster (sem_name)
                            VALUES ('$sem')");
        
        if ($sql) {
            echo "<script>alert('New Semester Added Successfully')</script>";
        }
        else{
            echo "<script>alert('Failed')</script>";
        }
    }

    if(isset($_POST['update_semester']))
    {
        $edit_id = $_GET['edit'];
        $sem_name = $_POST['sem_name'];
        $update = mysql_query("UPDATE tbl_semestermaster SET sem_name='$sem_name' WHERE sem_id='$edit_id'");
        if($update)
        {
            echo "<script>alert('Semester Name Update Successfully')</script>";
            // header("Location:semester_master.php");
        }
        else
        {
            echo "<script>alert('Error in Update')</script>";
        }
        if ($update) {
            header("Location:semester_master.php");
        }
    }
?>
<?php
    if(isset($_GET['edit']))
    {
        $edit_id = $_GET['edit'];
        $select = mysql_query("SELECT * FROM tbl_semestermaster WHERE sem_id='$edit_id'");
        $row1 = mysql_fetch_array($select);
        
    }
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $delete = mysql_query("DELETE FROM tbl_semestermaster WHERE sem_id='$delete_id'");
        if ($delete) {
            echo "<script>alert('Delete Successfully')</script>";
        }
        else
        {
            echo "<script>alert('error')</script>";
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
   
<!-- Semester Master Design Start-->
<div class="admission">
	   <div class="container">
	  
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>Add New Semester</h2>
	   	  	<form method="post">
             
             <div class="input-group input-group1">
            
                <input class="form-control has-dark-background" name="sem_name" id="slider-name" placeholder="Semester Name" type="text" required="" maxlength=""
                value="<?php 
                if(isset($_GET['edit']))
                {
                    echo $row1['sem_name'];
                }
                else
                {
                    echo"";
                }

                ?>"
                >
             </div>
             <?php
                if(isset($_GET['edit']))
                {
                    echo "<input type='submit' value='Update' name='update_semester' class='course-submit'>";                                        
                }
                else
                {
                    echo "<input type='submit' value='Add' name='add_semester' class='course-submit'>";
                }
             ?>
<!--              <input type="submit" value="Add" name="add_semester" class="course-submit"> -->
            </form>
          </div>
        </div>
</div>

<div class="container">
	<div class="col-md-9">
		<div class="course_list">
          	<div class="table-header clearfix">
                	<div class="id_col">Semester Name</div>
                	<!-- <div class="name_col">Semester Name</div> -->
                  	
    		</div>
            <?php

                $sql="SELECT *FROM tbl_semestermaster";

                $result=mysql_query($sql);

                while ($row=mysql_fetch_assoc($result))
                {



                  echo  "<ul class='table-list'>

                            <li class='clearfix'>
                        
                            <div class='id_col'>";?> <?php echo $row["sem_name"]; ?></div>

                            <?php
                              echo "<div class='name_col'><a href='#'>";
                            ?> 
                            </a></div>

                            <?php  
                            echo "<div class='duration_col'>
                                      
                                      <a href='semester_master.php?edit=".$row['sem_id']."'>Edit</a>
                                      
                                      <a href='semester_master.php?delete=".$row['sem_id']."'>Delete</a>
                                    </div>
                                 </li>
                              </ul>";
            
                }
            ?>


          	<!-- <ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">001</div>

        				<div class="name_col"><a href="#">8<sup>th</sup>Semester</a></div>

        				<div class="duration_col">
        						<a href="#">Edit</a>
        						<a href="#">Update</a>
        						<a href="#">Delete</a>
        				</div>
    			</li>
    		</ul>
    		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">002</div>

        				<div class="name_col"><a href="#">9<sup>th</sup>Semester</a></div>

        				<div class="duration_col">
        						<a href="#">Edit</a>
        						<a href="#">Update</a>
        						<a href="#">Delete</a>
        				</div>
    			</li>
    		</ul>
    		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">003</div>

        				<div class="name_col"><a href="#">10<sup>th</sup>Semester</a></div>

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




<!-- Semester Master Design Stop-->
 <?php
  include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</body>
</html>	