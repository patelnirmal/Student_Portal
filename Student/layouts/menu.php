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
            <li><a href="HomeStudent.php">Home</a></li>
            <li><a href="about.html">Faculty</a></li>
    		<li><a href="faculty.html">Attendance</a></li>
            <li class="dropdown">
            	<a href="services.html" class="dropdown-toggle" data-toggle="dropdown">Exams<span class="caret"></span></a>
            	<ul class="dropdown-menu" role="menu">
                	<li><a href="viewExamTimeTable.php">Exam Time-Table</a></li>
                	<li><a href="shortcodes.html">Exam Results</a></li>
                	
              </ul>
            </li>
            <li><a href="submissions.php">Submissions</a></li>
            
            <li class="last"><a href="noticeBoard.php">E-Notice Board</a></li>

            <!-- <li class="last"><a href="contact.html">Contacts</a></li> -->
            
        </ul>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>