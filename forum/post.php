<!DOCTYPE HTML PUBLIC "-//W3C//
        DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body background="img/fon600.jpg">
        <?php

include "connect.php"; 
print "<link rel='stylesheet' href='style.css' type='text/css'>";
print "<table class='maintables'>";
print "<tr class='headline'><td>Нова тема</td></tr>";
print "<tr class='maintables'><td>";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $yourpost = $_POST['yourpost'];
    $subject = $_POST['subject'];
    if (strlen($name) < 1) {
        print "Не е въведено име."; 
    } else if (strlen($yourpost) < 1) {
        print "Не сте въвели мение."; 
    } else if (strlen($subject) < 1) {
        print "Не сте въвели тема."; 
    } else {
        $thedate = date("U"); 
        $displaytime = date("F j, Y, g:i a");
        $subject = strip_tags($subject);
        $name = strip_tags($name);
        $yourpost = strip_tags($yourpost);
        $insertpost = "INSERT INTO forumtutorial_posts(author,title,post,showtime,realtime,lastposter) 
                       VALUES('$name','$subject','$yourpost','$displaytime','$thedate','$name')";
        mysql_query($insertpost) or die("Не може да въведете мнение."); 
        print "Съобщението е изпратено върни се във <A href='index.php'>ФОРУМ</a>.";
    }
} else {
    print "<form action='post.php' method='post'>";
    print "ИМЕ:<br>";
    print "<input type='text' name='name' size='20'><br>";
    print "ЗАГЛАВИЕ:<br>";
    print "<input type='text' name='subject' size='20'><br>";
    print "СЪОБЩЕНИЕ:<br>";
    print "<textarea name='yourpost' rows='5' cols='40'></textarea><br>";
    print "<input type='submit' name='submit' value='Пусни '></form>";
}
print "</td></tr></table>";
?>
        <div id="footer" class="sladow">&COPY;2013 Boyana Prodanova
            <form action="http://www.google.com/custom" method="get" style="margin-bottom: 0">
                <table bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td nowrap><a href="http://www.google.com/"><img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="Google search" align="absmiddle"></a></td>
                        <td nowrap><input type="text" name="q" size="25" maxlength="255" value="">
                            <input type="submit" name="btnG" value="Google Търсене">
                            <input type="hidden" name="cof" value="GL:0;">
                            <input type="hidden" name="domains" value="www.yoursite.com">
                            <br>
                            <input type="radio" name="sitesearch" value="" checked>
                            WWW
                            <input type="radio" name="sitesearch" value="www.yoursite.com" >
                            localhost/saitmaket<br>
                        </td>
                    </tr>
                </table>
            </form></div>
</body>
</html>