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
        <div id="head_a" >
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head"><br>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</div><br>
        <div id="body">
            <iframe width="340" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
                    src="https://maps.google.com/maps?hl=bg&amp;q=%D0%B2%D0%BE%D0%B9%D0%B2%D0%BE%D0%B4%D0%B8%D0%BD%D0%BE%D0%B2%D0%BE+%D0%BF%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%92%D0%BE%D0%B9%D0%B2%D0%BE%D0%B4%D0%B8%D0%BD%D0%BE%D0%B2%D0%BE,+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2,+%D0%91%D1%8A%D0%BB%D0%B3%D0%B0%D1%80%D0%B8%D1%8F&amp;ll=42.198812,24.793463&amp;spn=0.017008,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed">
            </iframe><br />
            <small><a href="https://maps.google.com/maps?hl=bg&amp;q=%D0%B2%D0%BE%D0%B9%D0%B2%D0%BE%D0%B4%D0%B8%D0%BD%D0%BE%D0%B2%D0%BE+%D0%BF%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%92%D0%BE%D0%B9%D0%B2%D0%BE%D0%B4%D0%B8%D0%BD%D0%BE%D0%B2%D0%BE,+%D0%9F%D0%BB%D0%BE%D0%B2%D0%B4%D0%B8%D0%B2,+%D0%91%D1%8A%D0%BB%D0%B3%D0%B0%D1%80%D0%B8%D1%8F&amp;ll=42.198812,24.793463&amp;spn=0.017008,0.042272&amp;t=m&amp;z=14&amp;iwloc=A&amp;source=embed" 
                      style="color:#0000FF;text-align:left">Вижте по-голяма карта</a>
            </small><br />
            <p>Адрес:</p>
            <p>с.Войводиново
            ул.Хр.Ботев 56
            тел.031 01 2240
            email: <a href="mailto:boiana@abv.bg">ralica1962@gmail.bg</a>
            </p>
        </div><br>
        <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>

            <div id="menu_gl">
                <?php include 'menulinks.php'; ?>

            </div>
        </div>
        <div id="footer" class="sladow">
            <?php include 'menufooter.php'; ?> &COPY;2013 Boyana Prodanova   
        </div>
    </div>
</body></html>




