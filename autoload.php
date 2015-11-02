<?php
	// Para que incluya automáticamente todas las clases
	function __autoload($class_name) {
			include "clases/" . $class_name . ".php";
		}