<!DOCTYPE HTML PUBLIC "-//W3C//
        DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="shortcut icon" href="http://localhost/saitmaket/images/favicon1.ico">
        <title>ЦДГ РАЛИЦА ФОРУМ</title>
    </head>
    <body background="img/fon600.jpg">
        <div id="contforum">
           <marquee direction="left"  
         behavior="alternate">ВАЖНО!!!НА 3 МАРТ ЩЕ ИМА ТЕАТЪР СНЕЖАНКА И СЕДЕМТЕ ДЖУДЖЕТА</marquee>
        </div><br>
        <div id="headforum"><br><h>Целодневна Детска Градина РАЛИЦА - официален сайт</h></div>
        <?php
        include "connect.php"; //mysql db connection here
        print "<link rel='stylesheet' href='style.css' type='text/css'>";
        print "<A href='post.php'>НОВА ТЕМА</a><br>";
        print "<A href='../index.php'>НАЧАЛО</a><br>";
        print "<table class='maintable'>";
        print "<tr class='headline'>
            <td width=50%>ТЕМА</td>
            <td width=20%>Начало на темата</td>
            <td>Отговори</td>
            <td>Последно мнение</td></tr>";
        $getthreads = "SELECT * FROM forumtutorial_posts where parentid='0' ORDER BY lastrepliedto DESC";
        $getthreads2 = mysql_query($getthreads) or die("Could not get threads");
        while ($getthreads3 = mysql_fetch_array($getthreads2)) {
            $getthreads3['title'] = strip_tags($getthreads3['title']);
            $getthreads3['author'] = strip_tags($getthreads3['author']);
            print "<tr class='mainrow'>
                    <td><A href='message.php?id=$getthreads3[postid]'>$getthreads3[title]</a></td>
                    <td>$getthreads3[author]</td>
                    <td>$getthreads3[numreplies]</td>
                    <td>$getthreads3[showtime]<br>Последно мнение<b>$getthreads3[lastposter]</b>
                    </td></tr>";
        }
        print "</table>";
        ?>
        
    </body>
</html>

