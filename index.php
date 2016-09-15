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
<title>ЦДГ РАЛИЦА</title>
</head>
<body background="images/fon600.jpg">
    <div id="conteiner">
        <div id="head_a">
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head" ><br><h>Целодневна Детска Градина РАЛИЦА - официален сайт</h></div><br>

        <div id="body" class="sladow">
            <p><img src="images/ralica.jpg" alt="kartina" width="300px" height="300px" 
                    style="float: left;margin-right: 10px"/><br> ЦДГ “РАЛИЦА” се намира в с.Войводиново,на 5км от гр.Пловдив, в екологически чист район с естествена растителност, облагородена и подредена. Същата се поддържа ежедневно. Всяка година се прави ново залесяване, съобразено с предназначението на детското заведение.
                Детската градина е разположена върху 4 дка, като разгънатата площ на сградата е 1 850 дка, а дворът обхваща 2 150 дка.
                ЦДГ “РАЛИЦА” отваря врати през март 1962 г.. Оттогава функционират 4 групи, отговарящи на европейските стандарти за качествено и пълноценно отглеждане, възпитание и обучение на деца от 3 до 7 години, разпределени в 4 възрастови групи, в това число и ПОДГОТВИТЕЛНА  
                ДГ разполага с административна част, медицински кабинет, голям кухненски блок, самостоятелна парна инсталация и</p>
            <p><img src="images/kartina2.jpg" alt="kartina" width="300px" height="300px" 
                    style="float: left;margin-right: 10px"/>Капацитетът на градината е 132 деца, разпределени в шест възрастови групи. Персоналът се състои от висококвалифицирани педагогически специалисти- директор, дванадесет учители, учител по музика.
                Те, заедно с непедагогическия персонал са многодобри професионалисти, обичащи децата. В градината е създадена ефективна организация за осъществяване на образователно-възпитателния процес.</p>
            <a href="prodaljenie.php"><img src="images/continue.gif" width="100px" height="40px"></a>
        </div><br> 
        <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>

            <div id="menu_gl">
                <br>
                <?php include 'menulinks.php'; ?>
            </div><br>
        </div><br>
        <div id="footer" class="sladow">
            <?php include 'menufooter.php'; ?> 
            &COPY;2013 Boyana Prodanova
            </div>
    </div>
</body></html>



