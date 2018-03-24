<?php
session_start();
include 'dbconfig.php';
$username = mysql_real_escape_string($_POST['name']);
$password = mysql_real_escape_string($_POST['pwd']);
$rs = mysql_query("SELECT * FROM exam_cell.login WHERE username = '" . $username . "'");
$num = mysql_num_rows($rs);
if ($num > 0) {
    $row = mysql_fetch_array($rs);
    if($row['recordtime']==0 || $row['recordtime']<=time()){
    if ($password == $row['password']) {
        // Successful login, set session or whatever you need
        // Reset failed logins
        $_SESSION['name'] = $username;
        $sql1 = "SELECT * FROM exam_cell.profile WHERE username = '" . $username . "'";
        $res = mysql_query($sql1);
        $rows = mysql_fetch_array($res);
        $_SESSION['user'] = $rows[1];
        mysql_query("UPDATE exam_cell.login SET failed_logins = 0, recordtime = 0 WHERE username = '" . $row['username'] . "'");
        header('location: home.php');
    } else {
        // Failed password check
        if ($row['failed_logins'] >= 2) {
            $time=time()+60;
            mysql_query("UPDATE exam_cell.login SET recordtime = $time WHERE username = '" . $row['username'] . "'");
            header('location: login.php?msg=Retries over...Try after one minute.');
        } else {
             // Increment failed logins
                $failed_logins = $row['failed_logins'] + 1;
            mysql_query("UPDATE exam_cell.login SET failed_logins = '" . $failed_logins . "' WHERE username = '" . $row['username'] . "'");
            header("location: login.php?msg=Either username or Password is incorrect");
        } 
    }
    }
    else  header('location: login.php?msg=Your Retries attempt are already Over..');
} else {
    // No such Username found in database
    header('location: login.php?msg=No Such user Exists...');
} // End username check from database
?>
