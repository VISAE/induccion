<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "Bd.php";

$a = new Bd();
$a->setCredenciales();

//print_r($a->getCredenciales());

?>