
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
            jQuery(document).ready(function($) {
                $('.tabset0').pwstabs();
                $('.tabset1').pwstabs({
                    effect: 'scale',
                    defaultTab: 3,
                    containerWidth: '600px'
                });

                // Colors Demo
                $('.pws_demo_colors a').click(function(e) {
                    e.preventDefault();
                    $('.pws_tabs_container').removeClass('pws_theme_grey pws_theme_violet pws_theme_green pws_theme_yellow pws_theme_gold pws_theme_orange pws_theme_red pws_theme_purple').addClass('pws_theme_' + $(this).attr('data-demo-color'));
                });

            });
        </script>
    </head>
    <body>


        <div class="content">
            <div class="tabset0">
                <div data-pws-tab="tab1" data-pws-tab-name="Metodología">
                    <div class="pws_example_mixed_content_block">
                        <div class="pws_example_mixed_content_left">
                            <img width="250px" height="260px" src="imagenes_curso/metodologia.jpg" alt="PWS Tabs jQuery Plugin">
                        </div><!-- pws_example_mixed_content_left -->
                        <div class="pws_example_mixed_content_right">
                            <h3>Metodología</h3>
                            <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">La Universidad ofrece sus diferentes programas a través de la formación a distancia. Esta metodología emplea medios y mediaciones tecnológicas para que el estudiante pueda adelantar sus estudios a cualquier edad, en cualquier momento y desde el sitio en donde se encuentre.
                                <br><br>
                                De igual manera, la formación a distancia le permite al estudiante avanzar en su proceso educativo y desempeñar al mismo tiempo una actividad laboral o cualquier otra ocupación; o dedicase exclusivamente al estudio, si las condiciones se lo permiten.
                            </p>
                        </div><!-- pws_example_mixed_content_right -->
                    </div><!-- pws_example_mixed_content_block -->
                </div>
                <div data-pws-tab="tab2" data-pws-tab-name="Mediaciones">
                    <div class="pws_example_mixed_content_block">
                        <div class="pws_example_mixed_content_left">
                            <img width="250px" height="260px" src="imagenes_curso/mediaciones.jpg" alt="PWS Tabs jQuery Plugin">
                        </div><!-- pws_example_mixed_content_left -->
                        <div class="pws_example_mixed_content_right">
                            <h3>Tipos de mediaciones pedagógicas</h3>
                            <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                La UNAD ofrece dos mediaciones pedagógicas para desarrollar los procesos de aprendizaje:
                                <br>
                            <li style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">Educación a distancia a través del Campus Virtual</li>
                            <li style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">Mediación tradicional (tutorías en el centro de formación)</li>
                            </p>
                            <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                                La diferencia entre ellas radica en el menor o mayor uso de tecnologías. La elección depende de los accesos tecnológicos con los que dispone el usuario.
                            </p>
                        </div><!-- pws_example_mixed_content_right -->
                    </div><!-- pws_example_mixed_content_block -->
                </div>
                <div data-pws-tab="tab3" data-pws-tab-name="Campus Virtual">
                    <div class="pws_example_mixed_content_block">
                        <h3>Campus Virtual</h3>
                        <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">Para esta modalidad, el acceso a los contenidos didácticos, los procesos de aprendizaje en línea y el acompañamiento tutorial se realizan en el Campus Virtual. Muchos estudiantes en Colombia y en el exterior se forman a través de él. Entre los servicios que ofrece, se encuentran:
                            <br><br>
                            Contenidos didácticos con estándares internacionales, que opcionalmente pueden descargarse en formato html y pdf para su tratamiento off line o sin conexión a Internet.
                            <br><br>
                            <img width="800px" height="100px" src="imagenes_curso/campus_virtual.jpg" alt="PWS Tabs jQuery Plugin">
                        </p>

                    </div><!-- pws_example_mixed_content_block -->
                </div>
                <div data-pws-tab="tab4" data-pws-tab-name="Sistema Tradicional">
                    <div class="pws_example_mixed_content_block">
                        <h3>Sistema Tradicional</h3>
                        <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                            Se desarrolla en el centro de formación; allí se realiza el acompañamiento tutorial de manera presencial, según programación académica previa.
                            <br><br>
                            Los estudiantes adquieren, entre otros, los siguientes servicios:
                            <br><br>
                            <img width="800px" height="100px" src="imagenes_curso/sistema_tradicional.jpg" alt="PWS Tabs jQuery Plugin">
                        </p>
                    </div><!-- pws_example_mixed_content_block -->
                </div>
                <div data-pws-tab="tab5" data-pws-tab-name="Consideraciones">
                    <div class="pws_example_mixed_content_block">
                        <div class="pws_example_mixed_content_left">
                            <img width="250px" height="260px" src="imagenes_curso/consideraciones.jpg" alt="PWS Tabs jQuery Plugin">
                        </div><!-- pws_example_mixed_content_left -->
                        <div class="pws_example_mixed_content_right">
                            <h3>Consideraciones para analizar</h3>
                            <p style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">
                            <li style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">El estudiante puede elegir el Campus Virtual para el desarrollo de algunos cursos, y al mismo tiempo, el sistema tradicional, para adelantar otros.</li>
                            <br>
                            <li style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">El acceso a los contenidos didácticos, los procesos de aprendizaje en línea y el acompañamiento tutorial se realizan en el Campus Virtual.</li>
                            <br>
                            <li style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">El desarrollo de cursos, a través de la mediación tradicional, es en el centro de formación. Es allí donde se llevan a cabo procesos de acompañamiento tutorial presenciales que son programados periódicamente.</li>
                            <br>
                            <li style="color: #003956; font-family:Arial; text-align:justify; font-size: 100%">Las prácticas en los laboratorios se realizan exclusivamente en centro de formación facultado por cada programa.</li>
                            </p>
                        </div><!-- pws_example_mixed_content_right -->

                    </div><!-- pws_example_mixed_content_block -->
                </div>
            </div><!-- tabset0 -->
        </div><!-- content -->
    </body>
</html>