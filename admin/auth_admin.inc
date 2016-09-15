<?php

if ((isset($_SESSION['admin_logged']) &&
        $_SESSION['admin_logged']) != "" ||
        (isset($_SESSION['admin_password']) &&
        $_SESSION['admin_password'] != "")) {
    
} else {
    $redirect = $_SERVER['PHP_SELF'];
    header("Refrech:5; URL=admin_login.php?redirect=$redirect");
    echo "Когато влезете в профила си ние ще ви пренасочим!<br>";
    echo "<a href=\"admin_login.php?redirect=$redirect\">натиснете тук</a>";
    die();
}
?>
