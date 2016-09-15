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
            <p>КОЛЕДЕН КОНЦЕРТ  21.12.2012</p>
            <p><img src="imagegroup/55.jpg" alt="kartina" width="200px" height="270px" />
                <img src="imagegroup/56.jpg" alt="kartina" width="200px" height="270px" />
                <img src="imagegroup/57.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/58.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/59.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/60.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/61.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/62.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/63.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/64.jpg" alt="kartina" width="270px" height="200px" />
            </p>
                        </div>
             <div id="menu"> 
            <div class="horizontal">
                <?php include 'menu.php'; ?>
            </div>

            <div id="menu_gl">
                <?php include 'menulinks.php'; ?>
                
            </div><br>
        </div><br>
        <div id="footer" class="sladow">&COPY;2013 Boyana Prodanova
            <?php include 'menufooter.php'; ?> </div>
    </div>
</body></html>


