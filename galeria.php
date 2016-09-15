<?php
include 'menuhead.php';
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/bg_BG/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<title>ЦДГ РАЛИЦА-ГАЛЕРИЯ</title>
</head>
<body background="images/fon600.jpg">
    <div id="conteiner">
        <div id="head_a">
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head" ><br><h>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</h></div><br>
        <div id="body" class="sladow">
            <br><br>
            <a href="galeria1.php">Коледен концерт</a><br>
            <a href="galeria2.php">Проект Какво направих с мама</a><br>
            <a href="galeria3.php">Празник на есента</a><br>
            <a href="galeria4.php">Проект Кукли - 4та група</a><br>
            <a href="galeria5.php">Проект Великденски курабийки</a><br>
        </div>
        <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>

            <div id="menu_gl">
                <?php include 'menulinks.php'; ?>

            </div><br>
        </div><br>
        <div id="footer" class="sladow">
            <?php include 'menufooter.php'; ?>&COPY;2013 Boyana Prodanova </div>
    </div>
</body></html>

