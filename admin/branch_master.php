<?php
    
    include('db/session.php');
    
    if (isset($_POST['add_branch'])) {
        
        $b_code = $_POST['branch_code'];
        $b_name = $_POST['branch_name'];

        $sql = mysql_query("INSERT INTO tbl_branchmaster (department_code,department_name)
                            VALUES ('$b_code','$b_name')");
        
        if ($sql) {
            echo "<script>alert('New Branch Added Successfully')</script>";
        }
        else{
            echo "<script>alert('Failed')</script>";
        }
    }

    if (isset($_POST['update_branch'])) {
        $edit_id = $_GET['edit'];
        $dept_code = $_POST['branch_code'];
        $dept_name = $_POST['branch_name'];

        $update = mysql_query("UPDATE tbl_branchmaster SET department_code='$dept_code'
                  ,department_name='$dept_name'  
                  WHERE department_code='$edit_id'");

        if ($update) {
            echo "<script>alert('Department Details Update Successfully')</script>";
            // header("location:branch_master.php");
        }
        else
        {
            echo "<script>alert('Error')</script>";   
        }
    }
?>
<?php

    if (isset($_GET['edit'])) {
        
        $edit_id = $_GET['edit'];
        $select = mysql_query("SELECT * FROM tbl_branchmaster WHERE department_code='$edit_id'");
        $row1 = mysql_fetch_array($select);
    }
    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $delete = mysql_query("DELETE FROM tbl_branchmaster WHERE department_code='$delete_id'");
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
    ?>
   <!-- /.navbar-collapse -->

<!-- Standard Master Design Start-->
<div class="admission">
	   <div class="container">
	  
	   	  <div class="col-md-6 admission_left">
	   	  	<h2>Add New Branch</h2>
	   	  	<form method="post">
             
             <div class="input-group input-group1">
                 <input class="form-control has-dark-background" name="branch_code" 
                 id="slider-name" placeholder="Branch Code" type="text" required=""
                 value="<?php
                    if (isset($_GET['edit'])) {
                        echo $row1['department_code'];
                    }
                    else
                    {
                        echo "";
                    }
                 ?>"
                 ><br><br><br>

                <input class="form-control has-dark-background" name="branch_name" 
                id="slider-name" placeholder="Branch Name" type="text" onkeypress="return onlyAlphabets(event,this);" required=""
                value="<?php
                    if (isset($_GET['edit'])) {
                        echo $row1['department_name'];
                    }
                    else
                    {
                        echo "";
                    }
                ?>"
                 
                >
             </div>
             <?php
                if (isset($_GET['edit'])) {
                    echo "<input type='submit' value='Update' class='course-submit' 
                            name='update_branch'>";                    
                }
                else{
                    echo "<input type='submit' value='Add' class='course-submit' 
                            name='add_branch'>";
                }
             ?>

             <!-- <input type="submit" value="Add" class="course-submit" name="add_branch"> -->
            </form>
          </div>
        </div>
</div>

<div class="container">
	<div class="col-md-9">
		<div class="course_list">
          	<div class="table-header clearfix">
                	<div class="id_col">ID</div>
                	<div class="name_col">Branch Name</div>
                  	
    		</div>
          	<?php

                $sql="SELECT *FROM tbl_branchmaster";

                $result=mysql_query($sql);

                while ($row=mysql_fetch_assoc($result))
                {



                  echo  "<ul class='table-list'>

                            <li class='clearfix'>
                        
                            <div class='id_col'>";?> <?php echo $row["department_code"]; ?></div>

        				    <?php
                              echo "<div class='name_col'><a href='#'>";
                            ?> 
                            <?php echo $row["department_name"]; 
                            ?></a></div>

        				    <?php  
                            echo "<div class='duration_col'>
        						      <a href='branch_master.php?edit=".$row['department_code']."'>Edit</a>
        						      
        						      <a href='branch_master.php?delete=".$row['department_code']."'>Delete</a>
        				            </div>
    			                 </li>
    		                  </ul>";
            
                }
            ?>


    	</div>
	</div>
</div>




<!-- Standard Master Design Stop-->
<?php
    include 'layouts/footer.php';
?>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)|| (charCode == 32))
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>
</body>
</html>	