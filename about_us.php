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
<title>ЦДГ РАЛИЦА-ЗА НАС</title>
</head>
<body background="images/fon600.jpg">
    <div id="conteiner">
        <div id="head_a" >
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head">
            <br><h>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</h></div><br>
        <div id="body">
            <p><img src="images/ekip.jpg" alt="kartina" width="300px" height="230px" 
                    style="float: left;margin-right: 10px"/><br>Директор:Теодора  Тодорова</p>
            <p>Учителки:Маргарита Георгиева, Тони Вранчева, Татяна Варадинова, Силвия Стоянчева, Катя Иванова, Венета Плачкова, Стоянка Карадонева-Ангелова,Лидия Горинова</p>
            <p> Възпитателно-образователната система от първа до трета група в детското заведение се осъществява по програмна система „Здравей училище”, издателство „Булвест-2000” - за ПГ-а и ПГ-б групи и програмна система „Приказни пътечки”, 
                издателство „Булвест 2000” - 1а, 1б, 2а, 2б, 3 групи. ЦДГ ”Ралица” разшири номенклатурата на своите дейности - предлага дейности, извън ДОИ със заплащане от родителите, като специализирани курсове по изучаване на английски език, 
                модерни и народни танци, бойни изкуства. Детското заведение предлага и развлечения и забавления извън влизащите в дневния режим, театрални, куклени и циркови представления от външни професионални актьори. 
                <img src="images/kartina6.jpg" alt="kartina" width="300px" height="380px" 
                     style="float: left;margin-right: 10px"/></p>
            <p>През учебната 2012/2013г. детското заведение работи с шест групи. Обстановката в детската градина се организира така, че да създава свободни и достъпни зони за дейност, за самостоятелност в избора на информация,
                играчки и материали, игри и занимания.Дворът на детското заведение е озеленен с различни дървета, храсти и цветя и представлява естествен филтър за здравето на децата.
                Оборудван е и има обособени площадки за всички групи, както и външна сцена, стимулираща творческите и артистични изяви на децата.</p>
        </div>
        <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>
            <div id="menu_gl">
                <?php include 'menulinks.php'; ?>
            </div>
        </div>
        <div id="footer" class="sladow">
            <?php include 'menufooter.php'; ?>   
            &COPY;2013 Boyana Prodanova
        </div>
    </div>
</body></html>