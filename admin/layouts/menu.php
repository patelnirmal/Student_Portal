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
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a href="Homeadmin.php">Home</a></li>
            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Faculty<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="faculty_add.php">Add Faculty</a></li>
                    <li><a href="faculty_report.php">Faculty Report</a></li>
                    <!-- <li><a href="shortcodes.html">Faculty Master</a></li> -->
              </ul>
            </li>

            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Student<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="admission.php">Add Student</a></li>
                    <li><a href="student_report.php">Student Report</a></li>
                    <!-- <li><a href="shortcodes.html">Student Master</a></li> -->
              </ul>
            </li>   
            
            <li class="dropdown">
                <a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="branch_master.php">Branch Master</a></li>
                    <li><a href="semester_master.php">Semester Master</a></li>
                    <li><a href="exam_master.php">Exam Master</a></li>
              </ul>
            </li>
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>