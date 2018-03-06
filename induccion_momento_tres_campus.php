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

                    <div data-pws-tab="tab1" data-pws-tab-name="Inicial">
                        <div class="pws_example_mixed_content_block">
                            <div class="pws_example_mixed_content_left">
                                <img width="250px" height="240px" src="imagenes_curso/entorno_inicial.jpg" alt="PWS Tabs jQuery Plugin">
                            </div><!-- pws_example_mixed_content_left -->
                            <div class="pws_example_mixed_content_right">
                                <h3>Entorno Información Inicial</h3>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    Apreciado estudiante en este espacio usualmente encontrará los acuerdos iniciales del curso que orientarán su proceso formativo, así como el foro general, foro de noticias y agenda que le permitirán organizar su cronograma de estudio y así cumplir con las actividades propuestas.
                                </p>
                            </div><!-- pws_example_mixed_content_right -->
                        </div><!-- pws_example_mixed_content_block -->
                    </div>


                    <div data-pws-tab="tab2" data-pws-tab-name="Conocimiento">
                        <div class="pws_example_mixed_content_block">
                            <div class="pws_example_mixed_content_left">
                                <img width="250px" height="240px" src="imagenes_curso/entorno_conocimiento.jpg" alt="PWS Tabs jQuery Plugin">
                            </div><!-- pws_example_mixed_content_left -->
                            <div class="pws_example_mixed_content_right">
                                <h3>Entorno de Conocimiento</h3>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    En el Entorno de Conocimiento, podrá encontrar los contenidos y material de estudio que le permitirán desarrollar las actividades propuestas en el entorno de aprendizaje colaborativo. El material generalmente se puede descargar en formato pdf o en word para sus lecturas. 
                                </p>
        <!--                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                        <a href="http://66.165.175.203/entrenamiento2x_2015/mod/url/view.php?id=10&redirect=1" target="_blank" >Pagina Inicial Campus Virtual. "Campus 0" URL</a>
                                    </p>-->
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="http://datateca.unad.edu.co/contenidos/3/induccion/2014_2/perfil/" target="_blank" >Actualizar el perfil URL</a>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <strong>Cursos en Estandar CORE</strong>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="http://datateca.unad.edu.co/contenidos/3/induccion/2014_2/core/" target="_blank" >Manejo de cursos en Estandar CORE URL</a>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="http://datateca.unad.edu.co/contenidos/3/entrenamiento/ind/enero/contenidoenlinea/" target="_blank" >Ejemplo Contendió en linea URL</a>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="http://datateca.unad.edu.co/contenidos/3/entrenamiento/ind/enero/trabcolab/" target="_blank" >Ejemplo Ova Trabajo Colaborativo URL</a>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <strong>Cursos en AVA</strong>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="https://www.youtube.com/watch?v=UI9byJst-FU&feature=youtu.be" target="_blank" >Video manejo de cursos en AVA URL</a>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="http://datateca.unad.edu.co/contenidos/3/induccion/2014_2/ava/" target="_blank" >Manejo de cursos en AVA URL</a>
                                </p>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    <a href="http://66.165.175.236/entrenamiento2015/course/view.php?id=3" target="_blank" >Curso de Inducción Virtual en AVA</a>
                                </p>

                            </div><!-- pws_example_mixed_content_right -->
                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab3" data-pws-tab-name="Colaborativo">
                        <div class="pws_example_mixed_content_block">
                            <div class="pws_example_mixed_content_left">
                                <img width="250px" height="240px" src="imagenes_curso/entorno_colaborativo.jpg" alt="PWS Tabs jQuery Plugin">
                            </div><!-- pws_example_mixed_content_left -->
                            <div class="pws_example_mixed_content_right">
                                <h3>Entorno de Aprendizaje Colaborativo</h3>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    En el entorno de Aprendizaje Colaborativo podrá interactuar con sus compañeros de grupo y socializar los aportes, puntos de vista y opiniones que contribuirán a la consolidación del trabajo final y al aprendizaje de nuevos conocimientos que aportaran a su vida personal. Siendo este un espacio para que realice ejercicios prácticos.
                                </p>
                            </div><!-- pws_example_mixed_content_right -->
                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab4" data-pws-tab-name="Práctico">
                        <div class="pws_example_mixed_content_block">
                            <div class="pws_example_mixed_content_left">
                                <img width="250px" height="240px" src="imagenes_curso/entorno_practico.jpg" alt="PWS Tabs jQuery Plugin">
                            </div><!-- pws_example_mixed_content_left -->
                            <div class="pws_example_mixed_content_right">
                                <h3>Entorno de Aprendizaje Práctico</h3>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    En el Entorno de Aprendizaje Practico podrá poner en práctica todos los conocimientos que ha adquirido con el desarrollo de cada una de las actividades propuestas, por medio de actividades interactivas y dinámicas. Para sus cursos es importante que consulte con su tutor, si estas actividades cuentan con peso evaluativo. Ya que del esfuerzo y la dedicación que tenga depende el éxito de sus actividades y de sus procesos de formación. 
                                </p>
                            </div><!-- pws_example_mixed_content_right -->
                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab5" data-pws-tab-name="Evaluación">
                        <div class="pws_example_mixed_content_block">
                            <div class="pws_example_mixed_content_left">
                                <img width="250px" height="240px" src="imagenes_curso/entorno_evaluacion.jpg" alt="PWS Tabs jQuery Plugin">
                            </div><!-- pws_example_mixed_content_left -->
                            <div class="pws_example_mixed_content_right">
                                <h3>Entorno de Evaluación y Seguimiento</h3>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    En el Entorno de Evaluación y Seguimiento podrá hacer envío de sus aportes individuales y grupales finales de cada una de las unidades estudiadas, aquí podrá evidenciar el resultado de la consolidación de sus actividades. De igual forma, en este espacio podrá revisar la calificación y retroalimentación de cada una de las actividades.
                                </p>
                            </div><!-- pws_example_mixed_content_right -->
                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab6" data-pws-tab-name="Gestión">
                        <div class="pws_example_mixed_content_block">
                            <div class="pws_example_mixed_content_left">
                                <img width="250px" height="240px" src="imagenes_curso/entorno_gestion.jpg" alt="PWS Tabs jQuery Plugin">
                            </div><!-- pws_example_mixed_content_left -->
                            <div class="pws_example_mixed_content_right">
                                <h3>Entorno de Gestión</h3>
                                <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                    En este espacio podrá encontrar enlaces de interés que le permitirán profundizar en algunas temáticas propuestas a lo largo del curso, además de encontrar sitios de apoyo para su proceso formativo como lo son la biblioteca, bienestar institucional, registro y control y auditoria de servicios a estudiantes, por lo cual es importante que revise detalladamente los servicios a los cuales puede acceder como estudiante.
                                </p>
                            </div><!-- pws_example_mixed_content_right -->
                        </div><!-- pws_example_mixed_content_block -->
                    </div>

                    <div data-pws-tab="tab7" data-pws-tab-name="Tutoriales">
                        <div class="pws_example_mixed_content_block">
                            <div align="center">
                                <h3>Explorando el Campus</h3>
                            </div>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/jem3pfYoRO0?rel=0" frameborder="0" allowfullscreen></iframe>
                            </p>

                            <div align="center">
                                <h3>Inscripción en línea Laboratorios UNAD</h3>
                            </div>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/Es6o82clHUU" frameborder="0" allowfullscreen></iframe>
                            </p>

                            <div align="center">
                                <h3>Estrategia B- Learning</h3>
                            </div>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/fPG2byJp9k0" frameborder="0" allowfullscreen></iframe>
                            </p>
                            <div align="center">
                                <h3>Bienvenida al estudiante Unadista</h3>
                            </div>
                            <p style="color: #003956; font-family:Arial; text-align:center; font-size: 100%">
                                <iframe width="550" height="350" src="https://www.youtube.com/embed/Am4x3Y-Wiyw" frameborder="0" allowfullscreen></iframe>
                            </p>
                        </div><!-- pws_example_mixed_content_block -->
                    </div>
                </div><!-- tabset0 -->
            </div><!-- content -->
        </body>
    </html>
    <?php
}
?>