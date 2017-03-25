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
    ?>
   <!-- /.navbar-collapse -->
   </div>
</nav>
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
                id="slider-name" placeholder="Branch Name" type="text" required=""
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

<!--     		<ul class="table-list">
            	<li class="clearfix">
    					<div class="id_col">002</div>

        				<div class="name_col"><a href="#">B2 Branch</a></div>

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

        				<div class="name_col"><a href="#">C3 Branch</a></div>

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