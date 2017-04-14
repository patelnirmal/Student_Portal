<?php
include('db/config.php');
class StudentEntry{

    function AllList() {
        $qry = mysql_query("SELECT * 
                FROM `tbl_student_admission`");
        return $qry;
    }
    
}

?>