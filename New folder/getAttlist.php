
<?php 
    include('db/config.php');
  
    if(isset($_POST['take']))
    {
        echo "asnjk";
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
$result = array();
while ($row = mysql_fetch_assoc($sql)) {
        $result[] = $row;
    }

echo "<form method='post'><table>
<tr>
<th>Enrollment Number</th>
<th>Name</th>
<th>Department</th>
<th>Semester</th>
<th>Attendance</th>
</tr>";

foreach ($result as $item) {
    ?>
    <tr>
        <td><input type="text" name="stuen[]" value="<?php echo $item['enrollment_number'] ?>"></td>
        <td><input type="text" name="stuname[]" value="<?php echo $item['first_name']." ".$item['last_name'] ?>"></td>
        <td><input type="text" name="studept[]" value="<?php echo $item['department'] ?>"></td>
        <td><input type="text" name="stusem[]" value="<?php echo $item['semester'] ?>"></td>
        <td>
            <select name='attndc[]' class='selectstyle'>
                <option value='Present'>Present</option>
                <option value='Absent'>Absent</option>
            </select>
        </td>
    </tr>
    <?php
    }
?>


</body>
</html>