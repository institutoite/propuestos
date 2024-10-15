<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResController extends Controller
{
        private $Minuendo;
		private $Dificultad;
		private $Sustraendo;
		private $Digitos;


	function __construct($dificultad, $digitos)
{ 
    // Inicializar el minuendo y el sustraendo
    $this->Minuendo = -1;
    $this->Sustraendo = 0;

    // Generar el minuendo y el sustraendo hasta que el minuendo sea mayor que el sustraendo
    while ($this->Minuendo <= $this->Sustraendo) {
        $this->Minuendo = new NaturalController($dificultad, $digitos);
        $this->Sustraendo = new NaturalController($dificultad, $digitos);
    }
    
    $this->Digitos = $digitos;
    $this->Dificultad = $dificultad;
}
	
	function GetMinuendo(){
		return $this->Minuendo->getValor();
	}

	function GetSustraendo(){
		return $this->Sustraendo->getValor();
	}

	function Respuesta(){
		return $this->Minuendo->getValor()-$this->Sustraendo->getValor();	
	}
}
