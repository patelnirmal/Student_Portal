<?php
require 'Classes/PHPExcel/IOFactory.php';
	include('db/faculty_session.php');
  if (isset($_POST['enter'])) {
    //$inputfilename = 'example_file.xlsx';
        $inputfilename = $_FILES['file']['name'];
        $exceldata = array();

        try
        {
            $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
            $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
            $objPHPExcel = $objReader->load($inputfilename);
        }
        catch(Exception $e)
        {
            die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
        }

        //  Get worksheet dimensions
        $sheet = $objPHPExcel->getSheet(0); 
        $highestRow = $sheet->getHighestRow(); 
        $highestColumn = $sheet->getHighestColumn();

        //  Loop through each row of the worksheet in turn
        for ($row = 1; $row <= $highestRow; $row++)
        { 
            //  Read a row of data into an array
            $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
          
            //  Insert row data array into your database of choice here
          $sql = mysql_query("INSERT INTO tbl_examresults (EnrollMentNumber,Student_Name, Department,Semester,AJAVA,NMA,MCAD,Total)
              VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."',
              '".$rowData[0][3]."','".$rowData[0][4]."','".$rowData[0][5]."','".$rowData[0][6]."','".$rowData[0][7]."')");
          
          if ($sql) {
            $exceldata[] = $rowData[0];
            
          } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn);
          }
        }
        echo "<script>alert('Marks Upload Successfully')</script>";
        // Print excel data
        /*echo "<table>";
        foreach ($exceldata as $index => $excelraw)
        {
          echo "<tr>";
          foreach ($excelraw as $excelcolumn)
          {
            echo "<td>".$excelcolumn."</td>";
          }
          echo "</tr>";
        }
        echo "</table>";*/
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
   </div>
</nav>
<div class="admission">
	<div class="container">
      <div class="col-md-6 admission_left">
          <h2>Exam Results</h2>
          <form method="post" enctype="multipart/form-data">
            <input type="file" name="file" class="col-md-7 photo">
            <input type="submit" name="enter" value="Upload Marks" class="course-submit">
          </form>
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