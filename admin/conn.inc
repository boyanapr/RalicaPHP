<?php
$conn = mysql_connect("localhost", "root", "123456")
        or die(mysql_error());
$dbadm = mysql_select_db("registration") or die(mysql_error());
?>
