<?php
include 'menuhead.php';
include 'conn.inc';
?>
<html>
    <head>
        <title>ЦДГ РАЛИЦА РЕГИСТРАЦИЯ</title>
    </head>
    <body background="images/fon600.jpg">
        <?php
        if (isset($_POST['submit'])) {
            if (!$_POST['username'] | !$_POST['password']) {
                die('Не сте въвели задължителните полета.');
            }
            if (!get_magic_quotes_gpc()) {
                $_POST['password'] = addslashes($_POST['password']);
                $_POST['username'] = addslashes($_POST['username']);

                $query = "SELECT username FROM user_info WHERE username='" . $_POST['username'] . "'";
                $result = mysql_query($query) or die(mysql_error());
                if (mysql_num_rows($result) != 0) {
                    die('Съжалявам,името вече е заето.');
                }
            }
            $insert = "INSERT INTO user_info(username.password.first_name.last_name.email)
                VALUE ('" . $_POST['username'] . "','" . $_POST['password'] . "')";
            $add_memb = mysql_query($insert);
            ?>
            <h1>ГОТОВО</h1>
            <p><a href="forum/index.php">Благодаря,че се регистрирахте,сега можете да влезете.</a></p>
            <?php
        } else {
            ?>
            <form action='<?php echo $_SERVER['PHP_SELF']; ?>'
                  method="post">
                <table border='0'>
                    <tr><td colspan='2'><br>
                            <h1>Регистрация</h1>
                        </td></tr>
                    <tr><td>Username:</td><td><input type='text' name='username' maxlenght='60'><br></td></tr>
                    <tr><td>Password:</td><td><input type='password' name='password' maxlenght='10'><br></td></tr>
                    <tr><td>First Name:</td><td><input type='text' name='first_name' maxlenght='60'><br></td></tr>
                    <tr><td>Last Name:</td><td><input type='text' name='last_name' maxlenght='60'><br></td></tr>
                    <tr><td>Email:</td><td><input type='text' name='email' maxlenght='60'><br></td></tr>
                    <tr><td colspan='2' align='right'>
                            <input type='submit' name='submit' value='Регистрация'>
                        </td></tr>
                </table>
            </form>
            <?php
        }
        ?>
    </body></html>
