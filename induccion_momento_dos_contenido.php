<?php
session_start();
$_SESSION['programaSel'] = $_POST['programa'];
$manteniemiento = 1;

if ($manteniemiento == 0) {
    ?>
    <div align="center">
        <img src="http://consejeria.unad.edu.co/sie/template/imagenes/generales/mantenimiento_induccion.jpg" width="70%" height="80%"/>
    </div>
    <div align="center">
        <p style="font-weight:normal;color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:21px;text-align:center;font-family:verdana, sans-serif;line-height:1;">
            Volveremos a las 12:00:01 del 26-Ago-2015.
        </p>
    </div>
    <?php
    exit;
}

include_once '../induccion/config/induccion_class.php';
$consulta = new consultas_induccion();
?>
<head>
    <?php
    $browser = getenv("HTTP_USER_AGENT");
    if (preg_match("/MSIE/i", "$browser")) {
        //Navegadores no compatibles
        ?>
        <script language="JavaScript" type="text/JavaScript">
            window.location = "sie_notifica.php?e=X01";
        </script>

        <?php
    } else {
        //Navegadores compatibles
        // Se valida inicio de sesion


        include "./template/sie_link_home.php";
        ?>

        <!--contenedor-->
        <link rel="stylesheet" type="text/css" href="template/css/estilo_index.css">

        <!--bloqueo hacia atrás-->
        <script >
            function nobackbutton() {
                window.location.hash = "no-back-button";
                window.location.hash = "Again-No-back-button" //chrome
                window.onhashchange = function () {
                    window.location.hash = "no-back-button";
                }
            }

        </script>



    </head>

    <body onload="nobackbutton();">
        <!--Encabezado - Inicio-->
        <?php include "./template/sie_head_home.php"; ?>
        <!--Encabezado - Fin-->



        <main>
            <!--aqui contenido incio-->
            <div >
                <div align="center">
                    <h2 id='p_fieldset_autenticacion'>
                        INDUCCIÓN MOMENTO 2 - INDAGANDO ANDO
                    </h2>
                </div>

                <div class="art-postcontent">
                    <div align="center">
                        <!--aqui inicio del contenido-->
                        <div>
                            <iframe width="100%" height="70%" src="induccion_momento_dos_videos.php" frameborder="0"></iframe>                        
                        </div>
                        <!--aqui fin del contenido-->
                    </div>
                </div>
            </div>
            <!--aqui contenido fin-->
        </main>



        <?php
        //Pie de pagina
        include "./template/sie_footer_home.php";
        ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script>
        <script src="slide_uno/js/vertical.news.slider.js"></script>
        <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1965499-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
        </script>
    </body>
    <?php
}

//$consulta->destruir();
?>
