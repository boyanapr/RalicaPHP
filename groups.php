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
<title>ЦДГ РАЛИЦА-ГРУПИ</title>
</head>
<body background="images/fon600.jpg">

    <div id="conteiner">
        <div id="head_a" >
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head"><br><h>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</h></div><br>
        <div id="body">
            <br>
            <table width="90%" border="1" cellpadding="2"
                   cellspasing="2" align="center">
                <tr>
                    <th><a href="group1.php"><img src="images/miki.jpg" width="50px" height="50px">ГРУПА 1-ВА</a></th>
                    <th><a href="group2.php"><img src="images/miki1.jpg" width="50px" height="50px">ГРУПА 2-РА</a></th>
                    <th><a href="group3.php"><img src="images/mini2.jpg" width="50px" height="50px">ГРУПА 3-ТА</a></th>
                    <th><a href="group4.php"><img src="images/mini1.jpg" width="50px" height="50px">ГРУПА 4-ТА</a></th>
                </tr>
            </table>
            <p>СЕДМИЧНО МЕНЮ</p>
            <p>Понеделник</p>
            <p> Закускa: макарони
                Подкрепяща закуска: ябълка
                Обяд: доматена супа, агнешко с картофи, натурален сок от праскова
                Следобедна закуска: сандвич с лютеница, масло и сирене, айрян</p><br>
            <p>Вторник</p>
            <p> Закускa: сандвич със зеленчуков пастет, билков чай
                Подкрепяща закуска: банан
                Обяд: таратор, мусака от тиквички, компот от кайсии
                Следобедна закуска: сандвич с масло и халва, айрян</p><br>
            <p>Сряда</p>
            <p> Закуска: топъл сандвич с кашкавал, млако с какао
                Подкрепяща закуска: ягоди
                Обяд: супа от спанак, печена бяла риба , бобена салата, зелена салата, банан
                Следобедна закуска: бисквитена торта, сок</p>
            <p>Четвъртък</p>
            <p> Закуска: качамак със сирене и кисело мляко
                Подкрепяща закуска: ягоди
                Обяд : крем-супа от картофи, свинско със зеле, ябълка
                Следобедна закуска: сандвич с топено сирене, краставица, айрян</p>
            <p>Петък</p>
            <p> Закуска: милинка, домат, билков чай
                Подкрепяща закуска: ябълка
                Обяд: таратор, пиле с грах, компот от праскови
                Следобедна закуска: мляко с грис</p>
        </div><br><br>
        <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>

            <div id="menu_gl"><br>
                <?php include 'menulinks.php'; ?>
            </div>
        </div>
        <div id="footer" class="sladow">
            <?php include 'menufooter.php'; ?> &COPY;2013 Boyana Prodanova
        </div>
    </div>
</body></html>