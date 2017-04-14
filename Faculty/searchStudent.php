<?php
    
    include('db/faculty_session.php');
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
      <h3>Search Student</h3>
      <div class="col-md-6 admission_left"">
        <div class="input-group input-group1">
          <input class="form-control has-dark-background" name="find_en" id="slider-name" placeholder="Enrollmment Number" type="number" ><br>
        </div>
      </div>
      
      <input type="submit" value="Find" class="course-submit" name="findStudent">

    </div>
  </form>
</div>


<?php
  include 'layouts/footer.php';
?>

</body>
</html>