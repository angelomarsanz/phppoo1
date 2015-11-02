<?php
header('Content-Type: text/html; charset=UTF-8'); 

include "autoload.php"; // Para que incluya automáticamente todas las clases

// Instancia miCoche

$miCoche = new Coche();

echo nl2br("Intancia miCoche\n");

echo nl2br("$miCoche->color\n");

$miCoche->getModelo();

echo $miCoche->getTipo();

echo nl2br("\n");

$miCoche->encender();

echo nl2br("\n");

// Instancia otroCoche

$otroCoche = new Coche("Blanco", 2015, "Pick-up", 2, false);

echo nl2br("Intancia otroCoche\n");

echo nl2br("$otroCoche->color\n");

$otroCoche->getModelo();

echo $otroCoche->getTipo();

echo nl2br("\n");

$otroCoche->encender();

echo nl2br("\n");

// Instancia miFord (heredada)

$miFord = new Ford();

echo nl2br("Intancia miFord heredada\n");

echo nl2br("$miFord->color\n");

$miFord->getmodeloford();

echo $miFord->getTipoford();

$miFord->getLlavesford();

$miFord->encender();

echo nl2br("\n");

// Instancia otroFord (heredada)

$otroFord = new Ford("Azul", 2014, "Camión", 2, false);

echo nl2br("Intancia otroFord heredada\n");

echo nl2br("$otroFord->color\n");

$otroFord->getmodeloford();

echo $otroFord->getTipoford();

$otroFord->getLlavesford();

$otroFord->encender();

echo nl2br("\n");