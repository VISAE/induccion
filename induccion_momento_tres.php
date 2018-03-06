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
                        INDUCCIÓN MOMENTO 3 - AFIANZANDO ANDO
                    </h2>
                </div>

                <div class="art-postcontent">
                    <div align="center">
                        <!--aqui inicio del contenido-->
                        <img src="imagenes_curso/banner_momento3.jpg" alt="Momento 3" width="100%" height="450" />
                        <table width="100%">
                            <tr>
                                <td>
                                    <form name="form1" method="post" target="_self" enctype="multipart/form-data" action="induccion_momento_tres_contenido.php">
                                        <p align="center">
                                            <input type="submit" name="Submit2" value="Comenzar" class="boton_m1" >
                                        </p>
                                    </form>
                                </td>
                            </tr>
                        </table>
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
    </body>
    <?php
    mysql_close();
}

//$consulta->destruir();
?>
