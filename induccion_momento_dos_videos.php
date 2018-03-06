<?php
session_start();
$browser = getenv("HTTP_USER_AGENT");
if (preg_match("/MSIE/i", "$browser")) {
//Navegadores no compatibles
    ?>
    <script language="JavaScript" type="text/JavaScript">
        window.location = "vpc_error.php?e=X01";
    </script>
    <?php
} else {
//Navegadores compatibles
    include_once '../induccion/config/induccion_class.php';
    $consulta = new consultas_induccion();
//Consulto los videos de la escuela segun programa
    $resultadoEscuela = $consulta->consultarVideoEscuela($_SESSION['programaSel']);
    while ($row = mysql_fetch_array($resultadoEscuela)) {
        $url_videoE = $row[0];
        $tituloE = $row[1];
        $url_detalleE = $row[2];
    }

    if ($url_videoE == "") {
        $tituloE = "Contenido no disponible";
    }

    //Consulto los videos del programa
    $resultadoPrograma = $consulta->consultarVideoPrograma($_SESSION['programaSel']);
    while ($row = mysql_fetch_array($resultadoPrograma)) {
        $url_videoP = $row[0];
        $tituloP = $row[1];
        $url_detalleP = $row[2];
    }

    if ($url_videoP == "") {
        $tituloP = "Contenido no disponible";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <link type="text/css" rel="stylesheet" href="assets/jquery.pwstabs-1.2.1.css">
            <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
            <script src="assets/jquery.pwstabs-1.2.1.js"></script>
            <link type="text/css" rel="stylesheet" href="assets/styles.css">
            <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
            <link type="text/css" rel="stylesheet" href="assets/font-awesome-4.2.0/css/font-awesome.min.css">

            <script>
    jQuery(document).ready(function ($) {
        $('.tabset0').pwstabs();
        $('.tabset1').pwstabs({
            effect: 'scale',
            defaultTab: 3,
            containerWidth: '600px'
        });

        // Colors Demo
        $('.pws_demo_colors a').click(function (e) {
            e.preventDefault();
            $('.pws_tabs_container').removeClass('pws_theme_grey pws_theme_violet pws_theme_green pws_theme_yellow pws_theme_gold pws_theme_orange pws_theme_red pws_theme_purple').addClass('pws_theme_' + $(this).attr('data-demo-color'));
        });

    });
            </script>
        </head>
        <body>


            <div class="content">
                <div class="tabset0">

                    <div data-pws-tab="tab1" data-pws-tab-name="Rector">
                        <div class="pws_example_mixed_content_block">
                            <h3>Rector de la UNAD, Dr. Jaime Alberto Leal Afanador</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/keJz3eN0qA0?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab2" data-pws-tab-name="Visae">
                        <div class="pws_example_mixed_content_block">
                            <h3>Vicerrectora de Servicios a Aspirantes, Estudiantes y Egresados, Dra. Martha Lucía Duque</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/S-Y7ess3Or0?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab3" data-pws-tab-name="Viaci">
                        <div class="pws_example_mixed_content_block">
                            <h3>Vicerrectora Académica y de Investigación, Constanza Abadía</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/eWN3UIe9PjI?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab4" data-pws-tab-name="Virel">
                        <div class="pws_example_mixed_content_block">
                            <h3>Vicerrector de Relaciones Internacionales, Dr. Luigi López</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/bg9RtD1tDY4?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab5" data-pws-tab-name="Vider">
                        <div class="pws_example_mixed_content_block">
                            <h3>Vicerrector de Desarrollo Regional y Proyección Comunitaria, el Doctor Edgar Guillermo Rodríguez</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/KIcamcVNskc?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab6" data-pws-tab-name="Redest">
                        <div class="pws_example_mixed_content_block">
                            <h3>Representante Nacional de los Estudiantes Unadistas, Dra. Carolina Calle</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/I6UmA9kyBZc?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab7" data-pws-tab-name="PAP">
                        <div class="pws_example_mixed_content_block">
                            <h3>Proyecto Académico Pedagógico</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/g8rqqVgu-60?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab8" data-pws-tab-name="Modelo">
                        <div class="pws_example_mixed_content_block">
                            <h3>Modelo Pedagógico de la Universidad</h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/r98EsRF5Qc4?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab9" data-pws-tab-name="Escuela">
                        <div class="pws_example_mixed_content_block">
                            <h3><?php echo $tituloE; ?></h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="<?php echo $url_videoE; ?>" frameborder="0" allowfullscreen></iframe>
                                <br></br>
                                <a href="<?php echo $url_detalleE; ?>" target="_blank">
                                    <img width="280" height="50" src="imagenes_curso/mayores_informes.jpg"/>
                                </a>
                            </p>

                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab10" data-pws-tab-name="Programa">
                        <div class="pws_example_mixed_content_block">
                            <h3><?php echo $tituloP; ?></h3>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="<?php echo $url_videoP; ?>" frameborder="0" allowfullscreen></iframe>
                                <br></br>
                                <a href="<?php echo $url_detalleP; ?>" target="_blank">
                                    <img width="280" height="50" src="imagenes_curso/mayores_informes.jpg"/>
                                </a>
                            </p>


                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                </div><!-- tabset0 -->
            </div><!-- content -->
        </body>
    </html>
    <?php
    mysql_close();
}
?>