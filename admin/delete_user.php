<?php
session_start();
include 'auth_admin.inc';
include 'conn.inc';
if ($_SESSION['admin_level'] == "1") {
    if (isset($_POST['submit']) && $_POST['submit'] == "Yes") {
        $query_delete = "DELETE FROM user_info" .
                "WHERE id='" . $_POST['id'] . "'";
        $result_delete = mysql_query($query_delete) or die(mysql_error());

        $_SESSION['user_logged'] = "";
        $_SESSION['user_password'] = "";

        header("Refresh: 5; URL=admin_area.php");
        echo 'Профилът е изтрит!<br>';
        echo '(Прехвърляте се в администраторското меню.' .
        '<a href=\"admin_area.php\">натиснете тук</a>';
        die();
    } else {
        ?>
        <html>
            <head>
                <meta http-equiv = "Content-Type" content = "text/html" charset = "UTF-8">
                <link rel = "shortcut icon" href = "http://localhost/saitmaket/images/favicon1.ico">
                <title>ЦДГ РАЛИЦА  Администраторско меню</title>
            </head>
            <body>
                <h1>Администраторско меню</h1>
                <p> 
                    Сигурни ли сте,че искате да изтриете този потребителски акаунт?<br>
                <form action="delete_user.php" metho="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <input type="submit" name="submit" value="Yes">&nbsp;
                    <input type="button" value="No" onclick="history.go(-1);">
                </form>
            </p>
        </body>
        </html>
        <?php
    }
} else {
    ?>
    Не е нужно достатъчно висока привилегия да изтриете даден потребител.<br>
    <a href="admin_area.php">натиснете тук</a> за да се върнете.
    <?php
}
?>
