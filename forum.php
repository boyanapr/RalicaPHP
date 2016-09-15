<?php
include 'menuhead.php';
include 'conn.inc';
?>
<html>
    <head>
        <title>ЦДГ РАЛИЦА ФОРУМ</title>
    </head>
    <body background="images/fon600.jpg">

        <?php
        if (isset($_POST['submit'])) {
            if (!$_POST['username'] | !$_POST['pass']) {
                die('Не сте попълнили нужните полета');
            }
            $check = mysql_query('SELECT*FROM user_info 
                              WHERE username="' . $_POST['username'] . '"') or die(mysql_error());
            $check2 = mysql_num_rows($check);
            if ($check2 == 0) {
                die('<h1>Няма такъв потребител.</h1><a href=registration.php><h1>Натиснете тук,за да се регистрирате</h1></a>');
            }
            while ($into = mysql_fetch_array($check)) {
                $_POST['pass'] = stripslashes($_POST['pass']);
                $into['password'] = stripslashes($into['password']);
                $_POST['pass'] = md5($_POST['pass']);
                if ($_POST['pass'] != $into['password']) {
                    die('Грешна парола');
                } else {
                    $_POST['username'] = stripslashes($_POST['username']);
                    $hour = time() + 3600;
                }
            }
        } else {
            ?>
            <form action='<?php echo $_SERVER['PHP_SELF'] ?>'
                  method='post'>
                <table border='0'>

                    <tr><td colspan='2'><br><a href="index.php"><img src="images/log-out.gif" width="100px" height="40px"></a>
                            <a href="registration.php"><h1>Регистрация</h1></a>
                            <a href="admin/index.php"><h1>Администраторско меню</h1></a>
                            <h1>ВХОД </h1> 
                        </td></tr>
                    <tr><td>ИМЕ:</td><td>
                            <input type='text' name='username' maxlenght='60'>
                        </td></tr>
                    <tr><td>ПАРОЛА:</td><td>
                            <input type='password' name='pass' maxlenght='10'>
                        </td></tr>
                    <tr><td colspan='2' align='right'>
                            <input type='submit' name='submit' value='ВХОД'>
                        </td></tr>
                </table></form>
    <?php
}
?>
    </body></html>