<?php

// Clase Ford (heredada)

class Ford extends Coche {
	// Se crea este método para acceder a un atributo privado de la clase padre 
	
	public function getModeloford() {
		return parent::getModelo();
	}
	// Se crea este método para acceder a un atributo static de la clase padre
	
	public function getTipoford() {
		return parent::$tipo;
	}
	// Se crea este método para visualizar el valor de un atributo protected de la clase padre
	
	public function getLlavesford() {
		echo (var_dump($this->llaves));
	}
}