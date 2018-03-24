<?php
$year = $_GET['year'];
include 'dbconfig.php';
    $query = "Select enroll_no,branch from exam_cell.$year order by branch,enroll_no";
    $res = mysql_query($query);
   while($row = mysql_fetch_array($res))
       echo $row[0].",";
?>
