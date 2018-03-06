<?php
//Clase interfaz de los metodos
//Autor: Ing. Andres Camilo Mendez Aguirre
//Fecha: 25/03/2015


//define('RUTA_PPAL', 'http://consejeria.unad.edu.co/induccion/');
define('RUTA_PPAL', 'http://192.168.4.25/induccion/');
//define('RUTA_PPAL', 'http://localhost/induccion/');
define('URL_PAGES', RUTA_PPAL.'pages/');
define('SIN_TILDES', '/tion\b/,/cion\b/,/ingenieria/,/metodo/,/sintesis/,/economia/,/calculo/,/tecnologia/,/logia\b/,/regimen/,/ergonomia/,/razon/,/academico/,/autonomo/,/dinamica/,/exito/,/politic/,/catedra/,/matematic/,/logic/,/rectoria/,/dia/');
define('TILDES', 'tión,ción,ingeniería,método,síntesis,economía,cálculo,tecnología,logía,régimen,ergonomía,razón,académico,autónomo,dinámica,éxito,polític,cátedra,matemátic,lógic,rectoría,día');
    include_once("Bd.php");
    include_once('consultas_induccion.php');
?>