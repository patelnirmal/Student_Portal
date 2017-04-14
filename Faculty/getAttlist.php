
<?php 
    include('db/config.php');
  
    if(isset($_POST['btnsave']))
    {
        echo "<pre>";
        print_r($_POST);
        die;
    }
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include('db/config.php');

$q = intval($_GET['q']);

$sql=mysql_query("SELECT * FROM tbl_student_admission WHERE semester = '$q'");

echo "<form method='post'><table>
<tr>
<th>Enrollment Number</th>
<th>Name</th>
<th>Department</th>
<th>Semester</th>
<th>Attendance</th>
</tr>";
while($row = mysql_fetch_array($sql)) {
    echo "<tr>";
    echo "<td>" . $row['enrollment_number'] ."</td>";
    echo "<td>" . $row['first_name'] ."</td>";
    echo "<td>" . $row['department']  ."</td>";
    echo "<td>" . $row['semester']  ."</td>";
    echo "<td>
                <select name='Attendance' class='selectstyle'>
                    <option value='Present'>Present</option>
                    <option value='Absent'>Absent</option>
                </select>
            </td>";
    echo "</tr>";
    /*echo "<tr>";
    echo "<td>" . $row['enrollment_number'] ."<input type='text' name='eno' value='".$row['enrollment_number']."'>" ."</td>";
    echo "<td>" . $row['first_name'] ."<input type='text' name='fname' value='".$row['first_name']."'>" ."</td>";
    echo "<td>" . $row['department']  ."<input type='text' name='dept' value='".$row['department']."'>" ."</td>";
    echo "<td>" . $row['semester']  ."<input type='text' name='sem' value='".$row['semester']."'>" ."</td>";
    echo "<td>
                <select name='Attendance' class='selectstyle'>
                    <option value='Present'>Present</option>
                    <option value='Absent'>Absent</option>
                </select>
            </td>";
    echo "</tr>";*/
}
echo "</table></form>";
//echo "<input type='submit' value='submit' name='btnsave'>";

?>
</body>
</html>