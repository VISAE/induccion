<?php

//Clase para las transacciones del SIVISAE
//Autor: Ing. Andres Camilo Mendez Aguirre
//Fecha: 25/03/2015

include_once "Bd.php";

class consultas_induccion extends Bd {

    function validar_numero($campo) {

        if ($campo == '') {
            $mensaje = "Por favor digite los valores requeridos";
            $this->mensaje($mensaje);
        }

//obtengo la longitud del campo

        $lon = strlen($campo);

//recorro el campo

        for ($i = 0; $i < $lon; $i++) {

            if (is_numeric($campo[$i])) {

                print $documento[$i];
            } else {

                $mensaje = "Por favor digite solo números o verifique que no haya espacios";

                $this->mensaje($mensaje);
            }
        }
    }

    //Metodo que retorna la fecha del servidor
    function obtenerFechaServer() {
        //Se valida si el usuario existe
        $sqlC = "select now()";
        $resultado = mysql_query($sqlC);
        // Se obtiene el conteo 
        while ($row = mysql_fetch_array($resultado)) {
            $fecha_serv = $row[0];
        }
        return $fecha_serv;
    }

    /*     * **
     * Inicio Metodos Induccion
     * *** */

    function darPreguntasEvaluacionInduccion($t_ind) {
        $sql = "SELECT id_pregunta, descripcion FROM induccion.induccion_evaluacion_pregunta where estado=1 and perfil=$t_ind";
        $resultado = mysql_query($sql);
        $cadena = '<resultado>';
        while ($row = mysql_fetch_array($resultado)) {
            $id = $row[0];
            $descripcion = $row[1];

            $cadena .= '<pregunta>';
            $cadena .= '<id>';
            $cadena .= $id;
            $cadena .= '</id>';
            $cadena .= '<descripcion>';
            $cadena .= $descripcion;
            $cadena .= '</descripcion>';
            $cadena .= '</pregunta>';
        }
        $cadena .= '</resultado>';
        return $cadena;
    }

    function darRespuestasEvaluacionInduccion($pregunta) {
        $sql = "SELECT id_respuesta, descripcion FROM induccion.induccion_evaluacion_respuesta
                WHERE induccion_evaluacion_pregunta_id_pregunta = $pregunta";

        $resultado = mysql_query($sql);
        $cadena = '<resultado>';
        while ($row = mysql_fetch_array($resultado)) {
            $id = $row[0];
            $descripcion = $row[1];

            $cadena .= '<respuesta>';
            $cadena .= '<id>';
            $cadena .= $id;
            $cadena .= '</id>';
            $cadena .= '<descripcion>';
            $cadena .= $descripcion;
            $cadena .= '</descripcion>';
            $cadena .= '</respuesta>';
        }
        $cadena .= '</resultado>';
        return $cadena;
    }

    function validarEstudianteEvaluacion($documento) {
        $sql = "SELECT pa.`codigo_peraca` FROM SIVISAE.`matricula` m, SIVISAE.`estudiante` e, SIVISAE.`periodo_academico` pa "
                . "WHERE m.`estudiante_estudiante_id`=e.`estudiante_id` AND e.`cedula`=$documento AND pa.`periodo_academico_id`=m.`periodo_academico_periodo_academico_id` ORDER BY pa.`codigo_peraca` DESC LIMIT 1";

        $resultado = mysql_query($sql);
        $periodo = 0;
        while ($row = mysql_fetch_array($resultado)) {
            $periodo = $row[0];
        }
        return $periodo;
    }

    function registrarInduccion($documento, $tipo_eval, $per_aca_est, $part) {
        //se inserta la induccion
        $sql = "insert into induccion.induccion_estudiante (estudiante,fecha,tipo_induccion,periodo, participacion) values ($documento,CURRENT_TIMESTAMP,$tipo_eval,$per_aca_est, $part)";
        mysql_query($sql);
        $id_induccion = mysql_insert_id();

        if ($id_induccion != 0) {
            // Se inserta en el sistema
            $sql = "INSERT INTO SIVISAE.`induccion_estudiante` (`estudiante_id`,`fecha`,`tipo_induccion`,`periodo_academico_id`, participacion)
                    SELECT 
                    e.`estudiante_id`, ie.`fecha`, ie.`tipo_induccion`, pa.`periodo_academico_id`, ie.participacion
                    FROM induccion.`induccion_estudiante` ie, `SIVISAE`.`estudiante` e, SIVISAE.periodo_academico pa 
                    WHERE ie.`estudiante`=e.`cedula`
                    AND pa.`codigo_peraca`=ie.`periodo`
                    AND id_induccion=$id_induccion";
        }
        mysql_query($sql);

        return $id_induccion;
    }

    function registrarEvaluacionInduccion($documento, $id_respuesta, $observacion, $sugerencias, $id_induccion, $t_ind) {
        if ($t_ind == 1) {//Presencial
            $sql = "INSERT INTO induccion.induccion_evaluacion_presencial_resultados (fecha, estudiante, id_respuesta, observacion, sugerencias, id_induccion)
                VALUES (CURRENT_DATE, '$documento', $id_respuesta, '$observacion', '$sugerencias',$id_induccion)";
        } else {
            $sql = "INSERT INTO induccion.induccion_evaluacion_virtual_resultados (fecha, estudiante, id_respuesta, observacion, sugerencias, id_induccion)
                VALUES (CURRENT_DATE, '$documento', $id_respuesta, '$observacion', '$sugerencias',$id_induccion)";
        }
        
        mysql_query($sql);
        $resultado = mysql_affected_rows();
        return $resultado;
    }

    function validarEstudianteEvaluacionRealizada($documento, $tipo, $participa_induccion) {
        $sql = "SELECT COUNT(ie.`estudiante_id`) AS conteo
                FROM SIVISAE.induccion_estudiante ie, SIVISAE.estudiante e
                WHERE ie.`estudiante_id`=e.`estudiante_id`
                AND e.`cedula`= '$documento' AND ie.`tipo_induccion`=$tipo and ie.participacion=$participa_induccion";
        $resultado = mysql_query($sql);
        $conteo = 0;
        while ($row = mysql_fetch_array($resultado)) {
            $conteo = $row[0];
        }
        return $conteo;
    }
	
	// Metodos Momentos induccion
    //Metodo que retorna el listado de los programas
    function consultarProgramas() {
        $sql = "SELECT c_programas, pro_descripcion FROM induccion.induccion_programas WHERE nivel IN (1,2,7,5) ORDER BY pro_descripcion ASC";
        $resultado = mysql_query($sql);
        return $resultado;
    }

    //Metodo que retorna el video de escuelas a consultar
    function consultarVideoEscuela($cod_programa) {
        //Consultar la escuela segun el programa
        $sql = "select codigo_escuela from induccion.induccion_videos_programas where c_programas=$cod_programa";
        $resultado = mysql_query($sql);
        while ($row = mysql_fetch_array($resultado)) {
            $codigoEscuela = $row[0];
        }

        //Consultar el video de la escuela
        $sql = "select url_video,titulo,url_detalle from induccion.induccion_videos_escuelas where codigo_escuela=$codigoEscuela";
        $resultado = mysql_query($sql);
        return $resultado;
    }
    
    //Metodo que retorna el video de escuelas a consultar
    function consultarVideoPrograma($cod_programa) {
        //Consultar la escuela segun el programa
        //Consultar el video de la escuela
        $sql = "select url_video,titulo,url_detalle from induccion.induccion_videos_programas where c_programas=$cod_programa";
        $resultado = mysql_query($sql);
        return $resultado;
    }

    // Fin - Metodos de Induccion
}

//fin clase
?>
