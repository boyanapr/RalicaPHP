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
        include 'connect.php';
        $id = $_GET['id'];
        print "<link rel='stylesheet' href='style.css' type='text/css'>";
        print "<A href='index.php'><h1>Върни се във форума</a>-<A href='post.php'>Нова тема</a>-<A href='reply.php?id=$id'>Отговори</h1><br>";
        print "<table class='maintable'>";
        print "<tr class='headline'>
               <td width=20%>Автор</td>
               <td width=80%>Заглавие</td></tr>";
        $gettopic = "SELECT * FROM forumtutorial_posts WHERE postid='$id'";
        $gettopic2 = mysql_query($gettopic) or die("Could not get topic");
        $gettopic3 = mysql_fetch_array($gettopic2);
        print "<tr class='mainrow'>
                  <td valign='top'>$gettopic3[author]</td>
                  <td vakign='top'>$gettopic3[showtime]<br><hr>";
        $message = strip_tags($gettopic3['post']);
        $message = nl2br($message);
        print "$message<hr><br>";
        print "</td></tr>";
        $getreplies = "SELECT * FROM forumtutorial_posts where parentid='$id' 
                       ORDER BY postid DESC"; //getting replies
        $getreplies2 = mysql_query($getreplies) or die("Could not get replies");
        while ($getreplies3 = mysql_fetch_array($getreplies2)) {
            print "<tr class='mainrow'>
                    <td valign='top'>$getreplies3[author]</td>
                    <td vakign='top'>$getreplies3[showtime]<br><hr>";
            $message = strip_tags($getreplies3['post']);
            $message = nl2br($message);
            print "$message<hr><br>";
            print "</td></tr>";
        }
        print "</table>";
        ?>
    </body>
</html>
