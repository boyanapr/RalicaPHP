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
            <p>Проект Великденски курабийки</p>
             <p><img src="imagegroup/500.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/501.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/502.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/503.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/504.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/505.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/506.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/507.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/508.jpg" alt="kartina" width="200px" height="270px" />
                <img src="imagegroup/509.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/510.jpg" alt="kartina" width="200px" height="270px" />
                <img src="imagegroup/511.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/512.jpg" alt="kartina" width="270px" height="200px" />
                <img src="imagegroup/513.jpg" alt="kartina" width="270px" height="200px" />
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