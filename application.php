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
    <title>ЦДГ РАЛИЦА-КАНДИДАТСТВАНЕ</title>
</head>
<body background="images/fon600.jpg">
    <div id="conteiner">
        <div id="head_a" >
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head">
            <br><h>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</h></div><br>
        <div id="body">
            <p>ПРИЕМ<BR> В детска градина „Ралица” приемаме деца от 3 до 6 години при наличие на свободни места.
                Градината е с капацитет до 30 деца. Всяка от групите - с максимум 10 деца.Децата завършват Подготвителна група с издадени всички неоходими документи по стандартите на МОН.</p>
            <p>ЗАПИСВАНЕ<br>След запознаване на място с условията, организацията и програмата на градината.
                Среща на директора с родителите и попълнени формуляри с информация за детето</p>
            <p>ПОСТЪПВАНЕ</p>
            <p>Сключен договор за настоящата учебна година.</p>
             <p>Медицински документи:</p>
            <li>Здравно-профилактична карта, попълнена от личния лекар</li>
            <li>Имунизационен картон</li>
            <li>Еднократен отрицателен резултат от изследване за патогенни чревни бактерии и чревни паразити, не по-рано от 15 дни преди постъпването</li>
            <li>Медицинска бележка от личния лекар, че детето не е в контакт със заразно болен, не по-рано от 3 дни преди постъпването</li>
            <li>Изследване „Васерман” на един от родителите /за деца до 3 г./</li></p>
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
