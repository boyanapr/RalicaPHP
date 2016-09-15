<!DOCTYPE HTML PUBLIC "-//W3C//
    DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv = "Content-Type" content = "text/html" charset = "UTF-8">
<link rel = "shortcut icon" href = "http://localhost/saitmaket/images/favicon1.ico">
    </head>
    <body background="fon600.jpg">
<?php

session_start();
if ((isset($_SESSION['admin_logged']) &&
        $_SESSION['admin_logged'] != "") ||
        (isset($_SESSION['admin_password']) &&
        $_SESSION['admin_password'] != "")) {
    include 'logged_admin.php';
} else {
    include 'unlogged_admin.php';
}
?>
</body>
</html>