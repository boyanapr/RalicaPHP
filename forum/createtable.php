<?php

$connect = mysql_connect("localhost", "root", "123456") or die(mysql_error());
$create = mysql_query("CREATE DATABASE IF NOT EXISTS forumm") or die(mysql_error());
mysql_select_db("forumm");
$table = "CREATE TABLE forumtutorial_posts (
          postid bigint(20) NOT NULL auto_increment,
          author varchar(255) NOT NULL default '',
          title varchar(255) NOT NULL default '',
          post mediumtext NOT NULL,
          showtime varchar(255) NOT NULL default '',
          realtime bigint(20) NOT NULL default '0',
          lastposter varchar(255) NOT NULL default '',
          numreplies bigint(20) NOT NULL default '0',
          parentid bigint(20) NOT NULL default '0',
          lastrepliedto bigint(20) NOT NULL default '0',
         PRIMARY KEY (postid)  ) ";
$results = mysql_query($table) or die(mysql_error());
echo 'Database successfully created';
?>
