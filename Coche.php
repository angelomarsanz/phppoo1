<?php
class Coche
{
	public $color = "Negro";
	private $modelo = "2012";
	private $tipo = "Sedán";
	private $puertas = 4;
	
	public function __construct($color = NULL, $modelo = NULL, $tipo = NULL , $puertas = NULL)
	{ 
		$this->color 	= is_null($color) 	? $this->color 		: $color;
		$this->modelo 	= is_null($modelo) 	? $this->modelo 	: $modelo;
		$this->tipo 	= is_null($tipo) 	? $this->tipo 		: $tipo;
		$this->puertas  = is_null($puertas) ? $this->puertas 	: $puertas; 		
	}

	public function getModelo()
	{
		 echo nl2br("$this->modelo\n");		 	
	}
	
	
	public function __destruct()
	{
		unset($this->color);
		unset($this->modelo);
		unset($this->tipo);
		unset($this->puertas);
	}
}

$miCoche = new Coche($color = "Verde", $modelo="2015", $puertas=2);

echo nl2br("$miCoche->color\n");

$miCoche->getModelo();		