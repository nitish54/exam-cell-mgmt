<?php
$year = $_GET['year'];
$temp=0;
include 'dbconfig.php';
$sql1 = "Show tables";
$result = mysql_query($sql1);
while($row = mysql_fetch_array($result)){
    if($row[0]==$year) $temp=1;
}
if($temp==0){
$sql = "CREATE TABLE exam_cell.$year
(
enroll_no varchar(13) NOT NULL,
branch varchar(45),
primary key(enroll_no)
)";
// Execute query
    mysql_query($sql);
    echo "<font color='green' size='4'><center>New Session Successfully Created...";
}
else echo "<font color='red' size='4'><center>Table already exists...<br><div align='right'>Add Details directly...";
    mysql_close();
?>
