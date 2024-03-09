<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResController extends Controller
{
        private $Minuendo;
		private $Dificultad;
		private $Sustraendo;
		private $Digitos;

	function __construct($dificultad,$digitos)
	{ 
		$A=0;
		$B=0;
		while ($A==$B) {
			$A=new NaturalController($dificultad,$digitos);
			$B=new NaturalController($dificultad,$digitos);
		}
		
		if($A>$B){ 
			$this->Minuendo = new NaturalController($dificultad,$digitos);
			$this->Sustraendo= new NaturalController($dificultad,$digitos);;
		}else{
			$this->Minuendo=new NaturalController($dificultad,$digitos);;
			$this->Sustraendo=new NaturalController($dificultad,$digitos);;
		}
		$this->Digitos=$digitos;
		$this->Dificultad=$dificultad;
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
