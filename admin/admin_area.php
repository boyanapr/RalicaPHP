<?php
session_start();
include 'auth_admin.inc';
include 'conn.inc';

?>
<!DOCTYPE HTML PUBLIC "-//W3C//
    DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="shortcut icon" href="http://localhost/saitmaket/images/favicon1.ico">
        <title>ЦДГ РАЛИЦА  Администраторско меню</title>
    </head>
    <body background="fon600.jpg">
        <h1>Администраторско меню</h1>
        <p>По-долу е даден списък на потребителите и наличните ви администраторски права.<br><br>
            <?php
            if (isset($_SESSION['admin_level']) &&
                    $_SESSION['admin_level'] != "1") {
                $query_adm = "SELECT first_name,last_name, id FROM user_info
                        ORDER BY last_name";
                $result_adm = mysql_query($query_adm) or die(mysql_error());
                
                while ($row_adm = mysql_fetch_array($result_adm)) {
                    echo $row_adm['first_name'] . "" . $row_adm['last_name'];
                    ?>
                    &nbsp;&nbsp;<a href="update_user.php?id=<?php 
                    echo $row_adm['id']; ?>">Update User</a><br>
                    <?php
                }
            } else {
                $query_adm = "SELECT first_name,last_name,id FROM user_info 
                        ORDER BY last_name";
                $result_adm = mysql_query($query_adm) or die(mysql_error());
                
                while ($row_adm = mysql_fetch_array($result_adm)) {
                    echo $row_adm['first_name'] . "" . $row_adm['last_name'];
                    ?>
                    &nbsp;&nbsp;<a href="update_user.php?id=<?php echo $row_adm['id']; ?>">Update user</a> |
                    <a href="delete_user.php?id=<?php echo $row_adm['id']; ?>">Delete User</a><br>
                    <?php
                }
            }
            ?>
    </body>
</html>