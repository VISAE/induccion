<?php
session_start();

$manteniemiento = 0;

if ($manteniemiento == 1) {
    ?>
    <div align="center">
        <img src="http://sivisae.unad.edu.co/sie/template/imagenes/generales/mantenimiento_induccion.jpg" width="70%" height="80%"/>
    </div>
    <div align="center">
        <p style="font-weight:normal;color:#000000;letter-spacing:1pt;word-spacing:2pt;font-size:21px;text-align:center;font-family:verdana, sans-serif;line-height:1;">
            Volveremos a las 12:00:01 del 26-Ago-2015.
        </p>
    </div>
    <?php
    exit;
}



if (empty($_POST['accion'])) {
    $accion = "";
} else {
    $accion = $_POST['accion'];
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
        <script src="js/sweetalert-master/dist/sweetalert-dev.js" type="text/javascript" languaje="javascript"></script>
        <link rel="stylesheet" href="js/sweetalert-master/dist/sweetalert.css">

        <script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $(document).on('contextmenu', function (e) {
            swal({
                title: '¡Cuidado!',
                text: 'El clic derecho esta deshabilitado en esta página',
                type: 'error',
                confirmButtonColor: '#004669',
                confirmButtonText: 'Aceptar'
            });
            return false;
        });

    });
        </script>

        <!--bloqueo hacia atrás-->
        <script>
            function nobackbutton() {
                window.location.hash = "no-back-button";
                window.location.hash = "Again-No-back-button" //chrome
                window.onhashchange = function () {
                    window.location.hash = "no-back-button";
                }
            }
        </script>

        <script>
            function validateRadioButtonList(preguntas) {
                var contador = 0;
                var observaciones = 0;
                for (var i = 92; i <= preguntas + 9; i++) {
                    var ok = 0;
                    for (var j = 0; j < document.getElementsByName("respuesta" + i).length; j++) {
                        if (document.getElementsByName("respuesta" + i)[j].checked) {
                            if (j == 1 && i < 100) {
                               // if (document.getElementById("observacion" + i).value == "") {
                                //    observaciones++;
                               // }
                            }
                            ok = 1;
                            break;
                        }

                    }

                    if (ok == 0) {
                        contador++;
                    }
                }

                if (contador > 0) {
                    swal({
                        title: '¡Atención!',
                        text: 'Hay ' + contador + ' preguntas sin responder. Debe dar respuesta a la totalidad de preguntas para continuar.',
                        type: 'error',
                        confirmButtonColor: '#004669',
                        confirmButtonText: 'Aceptar'
                    });
                } else if (observaciones > 0) {
                    swal({
                        title: '¡Atención!',
                        text: 'Debe indicar el por qué en las respuestas en desacuerdo.',
                        type: 'error',
                        confirmButtonColor: '#004669',
                        confirmButtonText: 'Aceptar'
                    });
                } else if (document.getElementById("identificacion_estudiante").value == "") {
                    swal({
                        title: '¡Atención!',
                        text: 'Debe ingresar su número de documento.',
                        type: 'error',
                        confirmButtonColor: '#004669',
                        confirmButtonText: 'Aceptar'
                    });
                    document.form1.identificacion_estudiante.focus();
                } else {
                    document.form1.submit();
                }

            }

            function cambiar(id) {
                txtObservacion = document.getElementById("observacion" + id);
                if (document.getElementsByName("respuesta" + id)[1].checked) {
                    txtObservacion.style.display = 'block';
                } else {
                    txtObservacion.style.display = 'none';
                }

            }


            function validar(preguntas) {
                for (var i = 92; i <= preguntas + 8; i++) {
                    txtObservacion = document.getElementById("observacion" + id);
                    if (txtObservacion.style.display == 'block' && txtObservacion.value == "") {
                        alert("debe indicar el por qué para las respuestas en desacuerdo");
                        return false;
                    }
                }
            }


        </script>

        <script type="text/javascript">
            function validar(e) { // 1
                tecla = (document.all) ? e.keyCode : e.which; // 2
                if (tecla == 8)
                    return true; // 3
                patron = /\d/;
                te = String.fromCharCode(tecla); // 5
                return patron.test(te); // 6
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
                        ENCUESTA DE SATISFACCIÓN INDUCCIÓN VIRTUAL
                    </h2>
                </div>

                <div class="art-postcontent">
                    <div align="center">

                        <?php
                        if ($accion == '') {
                            ?>
                            <div align="center">
                                <table width="970">
                                    <tr>
                                        <td>
                                            <p align="justify" class="Estilo2">
                                                <i>Objetivo: Reconocer la comunidad unadista, su modelo y su proyecto institucional</i>
                                            </p>  
                                            <p align="justify" class="Estilo2">
                                                Para la VISAE es muy importante evaluar el nivel de satisfacción de los estudiantes <strong>Unadistas</strong> en su jornada de inducción, razón por lo cual lo(a) invitamos a evaluar los ítems que se plantean a continuación.
                                            </p>
                                            <br>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <?php
                            // put your code here
                            $data = $consulta->darPreguntasEvaluacionInduccion(2);
                            $xml = @simplexml_load_string($data);
                            ?>
                            <div align="center">
                                <form name="form1" method="post" action="">
                                    <div align="center" style="font-size: 25; font-weight: bold;">
                                        Documento del Estudiante
                                        <input style="font-size: 25; font-weight: bold;" name="identificacion_estudiante" autocomplete="off" maxlength="15" onkeypress="return validar(event)" id="identificacion_estudiante" type="text" value=""></input>

                                    </div>
                                    <br></br>
                                    <div align="center" style="font-size: 25; font-weight: bold;">
                                        ¿Usted participó en la jornada de inducción?
                                        <select id="participa_induccion" name="participa_induccion">                      
                                            <option value="0">--Seleccionar--</option>
                                            <option value="1">Por Primera Vez</option>
                                            <option value="2">Reinducción</option>
                                        </select>
                                    </div>
                                    <br></br>                                    
                                    <table width="970" border="1">
                                        <tr>
                                            <th rowspan="2" colspan="3">
                                                Ítems a evaluar
                                            </th>
                                        </tr>
                                        <th colspan="6">
                                                Opciones de Respuesta
                                            </th>
                                                                                      
                                       <?php
                                        $index = 91;
                                        foreach ($xml->pregunta as $pregunta) {
                                            $id_pregunta = $pregunta->id;
                                            $index++;
                                            if ($index == 92) {
                                                ?>
                                                <tr>
                                                    <th colspan="3">
                                                        1. Indique la razón por la cuál realiza la inducción virtual y no en el centro, dónde se encuentra matriculado
                                                    </th>
                                                    <th width="150">
                                                        a. Todos los horarios del centro, 
                                                        se cruzan con el horario laboral.
                                                    </th>
                                           
                                            <th width="150">
                                                        b. Reside en el exterior o en 
                                                        un lugar muy distante al centro. 
                                            </th>
                                            <th width="150">
                                                        c. Desconoce los horarios 
                                                        de inducción in situ.
                                           </th>
                                           
                                            <th class="Estilo5" width="10%">d. Otro.  Cual?</th>
                                            <td colspan="2" class="Estilo5" width="90%"><textarea  maxlength="150"  name="observacion" id="observacion" maxlength="250" rows="6" cols="40" style="WIDTH:150px;"  ></textarea></td>
                                        </tr>
                                                <?php
                                                
                                            }                                  
                                            else if ($index == 93) {
                                                ?>
                                                <tr>
                                                    <th colspan="7">
                                                       2. Satisfacción, inducción y manejo del curso de entrenamiento. 
                                                    </th>
                                                    <th width="47">
                                                        Si
                                                    </th>
                                                    <th width="47">
                                                        No
                                                    </th>
                                                 </tr>
                                                <?php
                                            
                                            }else if ($index == 96) {
                                                ?>
                                                <tr>
                                                    <th colspan="7">
                                                        3. Temática y objetivo del curso
                                                    </th>
                                                    <th width="47">
                                                        Si
                                                    </th>
                                                    <th width="47">
                                                        No
                                                    </th>
                                                 </tr>
                                                <?php
                                            }                                                                                                          
                                            
                                            
                                            
                                            /*else if ($index == 80) {
                                                ?>
                                                <tr>
                                                    <th colspan="3" rowspan="2">
                                                        Responda la siguiente pregunta marcando con una escala de 1 a 5 donde 1 es totalmente insatisfecho y 5 es totalmente satisfecho
                                                    </th>
                                                    <th colspan="5">
                                                        Marque de acuerdo a su experiencia
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        1
                                                    </th>
                                                    <th>
                                                        2
                                                    </th>
                                                    <th>
                                                        3
                                                    </th>
                                                    <th>
                                                        4
                                                    </th>
                                                    <th>
                                                        5
                                                    </th>
                                                </tr>
                                                <?php
                                            }*/


                                            if ($index <= 100) {
                                                if ($index >= 93) {
                                                    $colspan = 7;
                                                    $mostrar = 0;
                                                } else {
                                                    $colspan = 3;
                                                    $mostrar = 0;
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="<?php echo $colspan; ?>">
                                                        <?php echo $index - 91 . '. ' . $pregunta->descripcion; ?>
                                                    </td> 
                                                    <?php
                                                    $data = $consulta->darRespuestasEvaluacionInduccion($id_pregunta);
                                                    $xml2 = @simplexml_load_string($data);
                                                    foreach ($xml2->respuesta as $respuesta) {
                                                        $id_respuesta = $respuesta->id;
                                                        ?>
                                                        <td>
                                                            <div align="center">
                                                                <input name="respuesta<?php echo $id_pregunta; ?>" type="radio" id="respuesta<?php echo $id_pregunta; ?>" value="<?php echo $id_respuesta; ?>" onchange="cambiar(<?php echo $id_pregunta; ?>)"></input>
                                                            </div>
                                                        </td>                    
                                                        <?php
                                                    }

                                                    /*if ($mostrar == 1) {
                                                        ?>
                                                        <td>
                                                            <div align="center" id="opcion<?php echo $id_pregunta; ?>">hola
                                                                <input name="observacion<?php echo $id_pregunta; ?>" type="text" maxlength="100" id="observacion<?php echo $id_pregunta; ?>" value="" style="display: none"></input>
                                                            </div>
                                                        </td>
                                                        <?php
                                                    }*/
                                                    ?>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>    
                                        <tr> 
                                            <td colspan="2" class="Estilo5" width="10%">Observaciónes y Recomendaciones</td>
                                            <td colspan="6" class="Estilo5" width="90%"><textarea  maxlength="150"  name="sugerencias" id="sugerencias" maxlength="250" rows="6" cols="40" style="WIDTH:840px;"  ></textarea></td>
                                        </tr>
                                    </table>
                                    <input name="preguntas" id="preguntas" type="hidden" value="<?php echo $index; ?>"></input>
                                    <input name="accion" id="accion" type="hidden" value="registrar"></input>
                                    <br>
                                    <input name="registrar" id="registrar" type="button" value="Registrar Asistencia Virtual" class="art-button" onclick="validateRadioButtonList(<?php echo $index - 9; ?>)"></input>
                                </form>
                            </div>

                            <?php
                        } else if ($accion == 'registrar') {
                            ?>
                            <div align="center">
                                <?php
                                // Se valida que el documento ingresado sea el de un estudiante matriculado y se trae el ultimo peraca del mismo
                                $documento = $_POST["identificacion_estudiante"];
                                $sugerencias = $_POST["sugerencias"];
                                $observacion = $_POST["observacion"];
                                
                                $perEst = $consulta->validarEstudianteEvaluacion($documento);
                                if ($perEst != 0) {

                                    // Se valida que el estudiante no haya diligenciado la induccion
                                    $conteoInd = $consulta->validarEstudianteEvaluacionRealizada($documento, 2, 1);

                                    if ($conteoInd <= 0) {
                                        //Se guarda la induccion
                                        $idInduccion = $consulta->registrarInduccion($documento, 2, $perEst, 1);
                                        // Se guardan las respuestas
                                        $preguntas = $_POST["preguntas"];

                                        $resultado = 0;
                                        for ($i = 92; $i <= $preguntas; $i++) {
                                            $nombre_elemento = "respuesta" . $i;

                                            /*if ($i <= 100) {
                                                $nombre_elemento_2 = "observacion" . $i;
                                                $observacion = $_POST[$nombre_elemento_2];
                                            }*/

                                            $id_respuesta = $_POST[$nombre_elemento];
                                            $resultado += $consulta->registrarEvaluacionInduccion($documento, $id_respuesta, $observacion, $sugerencias, $idInduccion, 2);
                                        }

                                        echo '<script type="text/javascript" language="javascript">
                                                $(document).ready(function () {
                                                            swal({
                                                        title: "Inducción Registrada",
                                                        text: "La Información Ha Sido Registrada Correctamente.",
                                                        type: "success",
                                                        confirmButtonColor: "#004669",
                                                        confirmButtonText: "Aceptar"
                                                    },
                                                    function () {
                                                         window.location="https://www.unad.edu.co/"
                                                    });
                                                    });
                                                </script>';
                                    } else {
                                        
                                         echo '<script type="text/javascript" language="javascript">
                                                $(document).ready(function () {
                                                            swal({
                                                        title: "¡Su Inducción YA fue Registrada!",
                                                        text: "Estimado estudiante usted ya registró la evaluación a su inducción virtual.",
                                                        type: "error",
                                                        confirmButtonColor: "#004669",
                                                        confirmButtonText: "Aceptar"
                                                    },
                                                    function () {
                                                         window.location="https://www.unad.edu.co/"
                                                    });
                                                    });
                                                </script>';
                                    }
                                } else {
                                    
                                    echo '<script type="text/javascript" language="javascript">
                                                $(document).ready(function () {
                                                            swal({
                                                        title: "¡Atención!",
                                                        text: "El documento ingresado: ' . $documento . ', no existe. Por favor verifíquelo e intente nuevamente. Si persiste el inconveniente contacte al consejero de su centro.",
                                                        type: "error",
                                                        confirmButtonColor: "#004669",
                                                        confirmButtonText: "Aceptar"
                                                    },
                                                    function () {
                                                         window.location="http://sivisae.unad.edu.co/induccion/induccion_evaluacion_virtual.php#no-back-button"
                                                    });
                                                    });
                                                </script>';
                                }
                                ?>
                            </div>
                            <?php
                            session_destroy();
                        }
                        $consulta->destruir();
                        ?>


                    </div>
                </div>
            </div>
            <!--aqui contenido fin-->
        </main>

        <?php
        //Pie de pagina
        include "./template/sie_footer_home.php";
        ?>
    </body>
    <?php
}

//$consulta->destruir();
?>
