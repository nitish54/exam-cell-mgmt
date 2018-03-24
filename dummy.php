<?php

$who = $_GET['who'];
$id = $_GET['id'];
$dwho= $_POST['who'];
$did = $_POST['id'];
$ditem = $_POST['item'];
$did = strtoupper($did);
include 'dbconfig.php';
if($did!=""){
$queryitem = "SELECT id FROM exam_cell.idcard WHERE id='$did'";
$result = mysql_query($queryitem);
$row = mysql_fetch_array($result);
if(!$row[0]){
header("location: idForm.php?msg=ID card doesn\'t exist...Please create!!!");
}
else{
if($did!="" && $ditem!="select"){
    if($did==$ditem)
    $id=$did;
    else{
header("location: duplicateId.php?msg=Plz select either of the values...");
}
    send($id,$who,$dwho);
}
else if($ditem=="select" && $did!="" ){
      $id=$did;
      send($id,$who,$dwho);
}
}
}
else{
    if($ditem!="select" && $did=="" && $ditem!="") {
      $id=$ditem;
send($id,$who,$dwho);
}
}
if($who!="")
    send($id,$who,$dwho);
function send($id,$who,$dwho){   
if($id!=null){
if($who=="student" || $dwho=="student")
    header("location: idPrintStudent.php?id=$id");
if($who=="teacher" || $dwho=="teacher")
    header("location: idPrintTeacher.php?id=$id");
} 
}
?>
