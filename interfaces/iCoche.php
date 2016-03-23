<?php

// Interface icoche. Solo se definen los métodos a utilizar es para tener un esqueleto de la clase

interface iCoche {
	public function __construct($color = null, $modelo = null, $tipo = null , $puertas = null, $llaves = null);
    public function getModelo();
    public function getTipo();
    public function encender();
    public function __destruct();
}