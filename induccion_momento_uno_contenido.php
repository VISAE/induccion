<?php
session_start();

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

if (empty($_GET['opc'])) {
    $opc = "1";
} else {
    $opc = $_GET['opc'];
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
                        INDUCCIÓN MOMENTO 1 - EXPLORANDO ANDO
                    </h2>
                </div>

                <div class="art-postcontent">
                    <div align="center">
                        <!--aqui inicio del contenido-->
                        <table width="100%">
                            <tr>
                                <td width="20%">
                                    <img id="Image-Maps-Com-image-maps-2015-09-28-161142" src="imagenes_curso/menu.jpg" border="0" width="100%" height="40%" orgWidth="70%" orgHeight="40%" usemap="#image-maps-2015-09-28-161142" alt="" />
                                    <map name="image-maps-2015-09-28-161142" id="ImageMapsCom-image-maps-2015-09-28-161142">
                                        <area id="Mision" href="induccion_momento_uno_contenido.php?opc=1" alt="Misión" title="Misión" shape="rect" coords="48,362,477,446" style="outline:none;" target="_self"     />
                                        <area id="Vision" alt="Visión" title="Visión" href="induccion_momento_uno_contenido.php?opc=2" shape="rect" coords="48,481,474,560" style="outline:none;" target="_self"     />
                                        <area id="Himno" alt="Himno" title="Himno" href="induccion_momento_uno_contenido.php?opc=3" shape="rect" coords="50,605,476,684" style="outline:none;" target="_self"     />
                                        <area id="Logo" alt="Logo" title="Logo" href="induccion_momento_uno_contenido.php?opc=4" shape="rect" coords="50,726,477,809" style="outline:none;" target="_self"     />
                                        <area id="Bandera" alt="Bandera" title="Bandera" href="induccion_momento_uno_contenido.php?opc=5" shape="rect" coords="51,839,478,922" style="outline:none;" target="_self"     />
                                        <area id="Resena" alt="Resena" title="Resena" href="induccion_momento_uno_contenido.php?opc=6" shape="rect" coords="48,960,475,1043" style="outline:none;" target="_self"     />
                                        <area id="estudiar_unad" alt="estudiar_unad" title="estudiar_unad" href="induccion_momento_uno_contenido.php?opc=7" shape="rect" coords="49,1074,476,1157" style="outline:none;" target="_self"     />
                                        <area id="redest" alt="redest" title="redest" href="induccion_momento_uno_contenido.php?opc=8" shape="rect" coords="49,1195,476,1278" style="outline:none;" target="_self"     />
                                        <area id="Mediaciones" alt="Mediaciones" title="Mediaciones" href="induccion_momento_uno_contenido.php?opc=9" shape="rect" coords="50,1305,477,1429" style="outline:none;" target="_self"     />
                                        <area id="Caracterizacion" alt="Caracterización" title="Caracterización" href="induccion_momento_uno_contenido.php?opc=10" shape="rect" coords="50,1458,477,1539" style="outline:none;" target="_self"     />
                                        <area id="Evaluacion" alt="Evaluación" title="Evaluación" href="induccion_momento_uno_contenido.php?opc=11" shape="rect" coords="48,1585,475,1666" style="outline:none;" target="_self"     />
                                    </map>
                                </td>
                                <td width="80%">

                                    <?php
                                    switch ($opc) {
                                        case 1:
                                            ?>
                                            <div class="news-content top-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Misión</strong></p>
                                                <div align="center">
                                                    <iframe width="550" height="350" src="https://www.youtube.com/embed/CO0FMXG5d_8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;

                                        case 2:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Visión</strong></p>
                                                <div align="center">
                                                    <iframe width="550" height="350" src="https://www.youtube.com/embed/doPTWgjP_vU?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;

                                        case 3:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Himno</strong></p>
                                                <div align="center">
                                                    <iframe width="550" height="350" src="https://www.youtube.com/embed/aTqX3drX1C8?rel=0" frameborder="0" allowfullscreen></iframe>
                                                    <br></br>
                                                    <a href="contenidos_curso/himnoUnad.pdf" target="_blank">
                                                        <img width="280" height="50" src="imagenes_curso/descargar_himno.jpg"/>
                                                    </a>
                                                </div>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 4:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Logo</strong></p>
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%">
                                                    <img width="400" height="300" src="imagenes_curso/logo_unad.jpg"/>      
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 150%">
                                                    Representa el imaginario colectivo acerca de la contribución de nuestra universidad a la conformación del proyecto ético-político de nación, de ser humano y de sociedad multicultural, plural, equitativa, justa y solidaria que como Unadistas soñamos construir y contribuir.
                                                </p>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 5:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Bandera</strong>
                                                    <br></br>
                                                    <img src="imagenes_curso/Bandera_Unad.jpg"/>  
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 150%">
                                                    Los colores de la bandera tienen una vinculación visual de la gama cromática del azul con el concepto de tecnología. El amarillo con calidez, la cercanía y la esperanza. El naranja como representación del progreso, la evolución y el fluir armónico.
                                                </p>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 6:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Reseña Histórica</strong></p>
                                                <iframe width="100%" height="400" src="induccion_momento_uno_resena.php" frameborder="0"></iframe>
                                                <br></br>
                                                <div align="center">
                                                    <a href="induccion_momento_uno_resena.php" target="_blank">
                                                        <img width="280" height="50" src="imagenes_curso/resena.jpg"/>
                                                    </a>
                                                </div>

                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 7:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>¿Cómo estudiar en la UNAD?</strong></p>
                                                <div align="center">
                                                    <iframe width="550" height="350" src="https://www.youtube.com/embed/fiPZL6LP1lo?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 8:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Red de Estudiantes</strong></p>
                                                <div align="center">
                                                    <iframe width="550" height="350" src="https://www.youtube.com/embed/0vCTrChWRdY?rel=0" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 9:
                                            ?>
                                            <div class="news-content">
                                                <iframe width="100%" height="410" src="induccion_momento_uno_metodologia.php" frameborder="0"></iframe>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 10:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Prueba de Caracterización</strong>
                                                    <br></br>
                                                    <img src="imagenes_curso/caracterizacion.jpg"/>  
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 120%">
                                                    La prueba de caracterización es un medio que permite a la Universidad conocer aspectos sociodemográficos, académicos, familiares, laborales y psicológicos de los estudiantes,  que son valiosos para identificar con precisión las potencialidades y necesidades de mejoramiento con las que inicia el proceso de formación profesional. 
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 120%">
                                                    La prueba de caracterización se realiza con el fin de ofrecerle al estudiante de manera oportuna los programas y servicios que más le aporten a su adaptación, permanencia y graduación en la Universidad. La prueba es de <strong><i>carácter obligatorio</i></strong> y debe ser diligenciada completamente por los estudiantes antes de iniciar sus actividades para continuar con su proceso formativo. 
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 120%">
                                                    Se puede acceder a la prueba desde el campus virtual dando clic en el <strong><i>botón verde</i></strong>, similar al de la imagen del encabezado. Si presenta dudas o inquietudes comuníquese con el Auditor de Servicios a los Estudiantes de su centro o al correo <strong><i>visae@unad.edu.co</i></strong>  
                                                </p>
                                                <div align="center">
                                                    <a href="contenidos_curso/instructivo_prueba_caracterizacion.pdf" target="_blank">
                                                        <img width="280" height="50" src="imagenes_curso/descargar_instructivo_caracterizacion.jpg"/>
                                                    </a>
                                                </div>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                        case 11:
                                            ?>
                                            <div class="news-content">
                                                <p style="color: #003956; font-family:Arial; text-align:center; font-size: 200%"><strong>Evaluación a la Inducción</strong> 
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 120%">
                                                    La evaluación a la inducción es una encuesta que se les realiza a los estudiantes para poder recopilar su opinión y sugerencias sobre la jornada de inducción.
                                                </p>
                                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 120%">
                                                    Es muy importante que la evaluación sea diligenciada al terminar la jornada de inducción ya que con el diligenciamiento de la misma, se confirma la asisitencia por parte del estudiante.
                                                </p>
                                            </div><!-- .news-content -->
                                            <?php
                                            break;
                                    }
                                    ?>

                                </td>

                            </tr>
                        </table>
                        <!--aqui fin del contenido-->
                    </div>
                </div>
            </div>
            <!--aqui contenido fin-->
        </main>

        <script src="http://chatvisae.unad.edu.co/js_nodos/jquery.min.js" type="text/javascript"></script>
        <script src="http://chatvisae.unad.edu.co/js_nodos/imageMapResizer.min.js" type="text/javascript"></script>
        <script type="text/javascript">// <![CDATA[
        $('map').imageMapResize();
        // ]]></script>

        <?php
        //Pie de pagina
        include "./template/sie_footer_home.php";
        ?>
    </body>
    <?php
}

//$consulta->destruir();
?>
