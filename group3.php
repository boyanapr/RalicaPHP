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
<title>ЦДГ РАЛИЦА-ГРУПА 3та</title>
</head>
<body background="images/fon600.jpg">

    <div id="conteiner">
        <div id="head_a" >
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head"><br><h>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</h></div><br>

        <div id="body">
            <audio src="muzic/viatarat.wav" controls="controls" loop="loop"/>Viatarat</audio><br>
            <p><img src="imagegroup/611.jpg" alt="kartina" width="340px" height="270px" /></p>
            <p style="color:lightslategrey">"Кръгла, жълта паричка,
                с бяла на ресни якичка.
                Всеки знае без да пита,
                че се казвам: МАРГАРИТА"</p>
            <p>Девиз: “Ние сме приятели!”</p>
            <p>Любима песен: “Ало, ало, Слънчице” – муз. Доно Цветков, т. Райна Пенева</p>
        </div>
        <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>

            <div id="menu_gl"><br>
                <?php include 'menulinks.php'; ?>
            </div>
        </div>
        <div id="footer">&COPY;2013 Boyana Prodanova
            <?php include 'menufooter.php'; ?>        
        </div>
    </div>
</body></html>