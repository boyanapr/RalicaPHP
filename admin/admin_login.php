<?php
session_start();
include 'conn.inc';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//
    DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="shortcut icon" href="http://localhost/saitmaket/images/favicon1.ico">
        <title>ЦДГ РАЛИЦА</title>
    </head>
    <body background="fon600.jpg">
        <?php
        if (isset($_POST['submit'])) {

            $query_adm = "SELECT username,password,admin_level FROM admin 
                WHERE username='" . $_POST['username'] . "' 
                AND password='" . $_POST['password'] . "'";


            $result_adm = mysql_query($query_adm) or die(mysql_error());
            $row_adm = mysql_fetch_array($result_adm);
            if (mysql_num_rows($result_adm) == 1) {
                $_SESSION['admin_logged'] = $_POST['username'];
                $_SESSION['admin_password'] = $_POST['password'];
                $_SESSION['admin_level'] = $_POST['admin_level'];
                header("Refresh:5;URL=" . $_POST['redirect'] . "");
                echo "Вие се пренасочвате към официалната страница!<br>";
                echo "<a href=\"" . $_POST['redirect'] . "\">натиснете тук</a>";
            } else {
                ?>   
                <p>
                    Невалидни потребителско име или парола<br>
                <form action="admin_login.php" method="post">
                    <table border='0'>
                        <tr><td colspan='2'><br>
                                <input type="hidden" name="redirect" value="<?php echo $_POST['redirect']; ?>">
                            </td></tr>
                        <tr><td>  Потребителско име:</td><td><input type="text" name="username"><br>
                        <tr><td>  Парола:</td><td><input type="password" name="password"><br>
                        <tr><td> Ниво на администратора:</td><td><input type="text" name="admin_level"><br>
                            </td></tr>
                        <tr><td colspan='2' align='right'>
                                <input type="Submit" name="submit" value="Влез">
                            </td></tr>
                    </table>
                </form>
            </p>
        </body>
        </html>
        <?php
    }
} else {
    if (isset($_GET['redirect'])) {

        $redirect = $_GET['redirect'];
    } else {
        $redirect = "index.php";
    }
    ?>
    <p>Влезте като запишете потребителското си име и парола...<br>
    <form action="admin_login.php" method="post">
        <table border='0'>
            <tr><td colspan='2'><br>
                    <input type="hidden" name="redirect" value="<?php echo $redirect; ?>">
                </td></tr>
            <tr><td> Потребителско име:</td><td>
                    <input type="text" name="username"><br><br>
            <tr><td>     Парола:</td><td>
                    <input type="password" name="password"><br><br>
            <tr><td>Ниво на администратора:</td><td>
                    <input type="text" name="admin_level"><br><br>
                </td></tr>
            <tr><td colspan='2' align='right'>
                    <input type="submit" name="submit" value="Влез">
                </td></tr>
        </table>
    </form>
    </p>
    </body>
    </html>
    <?php
}
?>

