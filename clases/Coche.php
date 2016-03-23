<?php

// Interface iCoche

include "interfaces/iCoche.php";

// Clase Coche implementa la interface iCoche

class Coche implements iCoche {
	// Encapsulamiento
	public $color 		= "Negro"; 
	private $modelo	 	= 2012; // Solo se puede ver dentro de la misma clase (aunque existe excepciones)
	static $tipo 		= "Sedán"; // Se mantiene estático. Solo se puede alterar usando self:$tipo en el constructor
	private $puertas 	= 4;
	protected $llaves 	= true; // se pueden acceder solo dentro de la clase o en una clase heredada
	const LLANTAS		= 4; // Constante. Solo se visualiza con self:$LLANTAS

	// Para construir el objeto con sus atributos específicos
	
	public function __construct($color = null, $modelo = null, $tipo = null , $puertas = null, $llaves = null)	{ 
		$this->color 	= is_null($color) 	? $this->color 		: $color; 
		$this->modelo 	= is_null($modelo) 	? $this->modelo 	: $modelo;
		$this->tipo 	= is_null($tipo) 	? $this->tipo 		: $tipo;
		$this->puertas  = is_null($puertas) ? $this->puertas 	: $puertas; 
		$this->llaves	= is_null($llaves)  ? $this->llaves 	: $llaves; 
	}
	
	// Se crea este método para poder acceder a un atributo privado
	
	public function getModelo()	{
		 echo nl2br("$this->modelo\n");		 	
	}
	// Se crea este método para poder acceder a un atributo static que no varía
	
	public function getTipo() {
		return self::$tipo;
	}

	public function encender() {
		if($this->llaves) {
			echo nl2br("Carro encendido y tiene " . self::LLANTAS . " llantas\n");
		} else {
			echo nl2br("No se puede encender el carro sin las llaves\n");
		} 
	}	 

	// Se crea el método __destruct() para liberar memoria
	public function __destruct() {
		unset($this->color);
		unset($this->modelo);
		unset($this->tipo);
		unset($this->puertas);
		unset($this->llaves);
	}
}