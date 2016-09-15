<!DOCTYPE HTML PUBLIC "-//W3C//
    DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "connect.php";
        print "<link rel='stylesheet' href='style.css' type='text/css'>";
        print "<table class='maintables'>";
        print "<tr class='headline'><td>Отговори</td></tr>";
        print "<tr class='maintables'><td>";
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $yourpost = $_POST['yourpost'];
            $subject = $_POST['subject'];
            $id = $_POST['id'];
            if (strlen($name) < 1) {
                print "Не сте въвели име.";
            } else if (strlen($yourpost) < 1) {
                print "Не сте въвели мнение.";
            } else {
                $thedate = date("U");
                $displaytime = date("F j, Y, g:i a");
                $subject = strip_tags($subject);
                $name = strip_tags($name);
                $yourpost = strip_tags($yourpost);
                $insertpost = "INSERT INTO forumtutorial_posts(author,title,post,showtime,realtime,lastposter,parentid) 
                               values('$name','$subject','$yourpost','$displaytime','$thedate','$name','$id')";
                mysql_query($insertpost) or die("Could not insert post");
                $updatepost = "Update forumtutorial_posts set numreplies=numreplies+'1', lastposter='$name',
                    showtime='$displaytime', lastrepliedto='$thedate' where postid='$id'";
                mysql_query($updatepost) or die("Could not update post");
                print "Съобщението е изпратено,върнете се към <A href='message.php?id=$id'>Съобщение</a>.";
            }
        } else {
            $id = $_GET['id'];
            print "<form action='reply.php' method='post'>";
            print "<input type='hidden' name='id' value='$id'>";
            print "ИМЕ:<br>";
            print "<input type='text' name='name' size='20'><br>";
            print "Съобщение:<br>";
            print "<textarea name='yourpost' rows='5' cols='40'></textarea><br>";
            print "<input type='submit' name='submit' value='Пусни'></form>";
        }
        print "</td></tr></table>";
        ?>
    </body>
</html>