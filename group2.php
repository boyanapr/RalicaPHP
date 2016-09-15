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
<title>ЦДГ РАЛИЦА-ГРУПА 2ра</title>
</head>
<body background="images/fon600.jpg">

    <div id="conteiner">
        <div id="head_a" >
            <?php include 'menuhead_a.php'; ?>
        </div><br>
        <div id="head"><br><h>Добре дошли в официалния сайт на ЦДГ РАЛИЦА!!!</h></div><br>

        <div id="body">
            <audio src="muzic/chelo_kote.wav" controls="controls" loop="loop"/>Chelo Kote</audio><br>  
        <p><img src="imagegroup/610.jpg" alt="kartina" width="340px" height="270px" /></p>
            <p style="color:lightslategrey">"Синьо пламъче в тревата!
                Теменужка е това!
                Скромно вдигнала глава,
                пие мълком светлина.
                Що се в образа й крие?
                - Нежност! Доброта! Любов!
                Тя не цвете е, а зов,
                като нея да сме ние!"</p>
            <p>Девиз: “Живеем ние дружно и в сговор – деца, родители, учители – с усмивки и без спор!”</p>
            <p>Любима песен: “Детски лудории”</p>
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