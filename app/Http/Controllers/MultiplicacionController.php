<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NaturalController;
use App\Http\Controllers\DivController;
use App\Http\Requests\MultiplicacionRequest;
use Mpdf\Mpdf;

class MultiplicacionController extends Controller
{
    function Sacudir(&$Vector){
        $CuantasVeces=rand(10,15);
        for ($i=0; $i <$CuantasVeces; $i++) {
            $posx=rand(0,count($Vector)-1);	 
            $posy=rand(0,count($Vector)-1);
            $aux=$Vector[$posx];
            $Vector[$posx]=$Vector[$posy];
            $Vector[$posy]=$aux; 					
        }
    }

    function mostrarVista(){
        return view('multiplicacion.formmultiplicacion');
    }

/**%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% DIVISION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

/**%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  FIN CLASE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
    
    function Imprimir(MultiplicacionRequest $request){
        $UnaDificultadMultiplicando=$request->dificultaddo;
		$UnosDigitosMultiplicando=$request->digitosdo;
		$UnaDificultadMultiplicador=$request->dificultaddor;
		$UnosDigitosMultiplicador=$request->digitosdor;
    
        $imagenURL = public_path('images\logo.png');
        $html = '';
        $html.='<body><div>';
        $html .= '<link rel="stylesheet" href="' . public_path('css/estilosite.css') . '">';
        $encabezado = '<img src="'. $imagenURL .'">';
        $html.='<div>';
        $R=[];
        for ($k=0; $k < 4; $k++) { 
            $html .='<p class="text-right">'.($k+1).').-Una con una linea la respuesta correcta </p>';	
            $html .='<table class="tabla">';
            $html .= '<tr>';	
            for ($i=0; $i < 2; $i++) { 
				$S=new MulController($UnaDificultadMultiplicando,$UnaDificultadMultiplicador,$UnosDigitosMultiplicando,$UnosDigitosMultiplicador);
				
                $Multiplicando=$S->GetMultiplicando();
                $Multiplicador=$S->GetMultiplicador();
                
                $html .= '<td class="mediano derecha">x</td>';
                $html .= '<td class="mediano derecha" colspan="2">';
                
                $html.=$Multiplicando."<br>";
                $html.=$Multiplicador."<br>";
                
                $R[$i]=$S->Respuesta();
                $html .= '<hr></td>';
            }		
            $html .= '</tr></table>';
            $this->Sacudir($R)	;
            $html.= '<div class="respuesta"><table class="tabla"><tr>'.'<td><p>a)'.$R[0].'</p></td><td>b)'.$R[1].'</td></tr></table></div><br>';
        }
        $html.='</div></body>';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->SetMargins(10, 50, 30); 
        $mpdf->SetHeader($encabezado);
        $mpdf->SetFooter('www.ite.com.bo| www.propuestos.ite.com.bo |David Flores');
        $mpdf->WriteHTML($html);
        return $mpdf->output("multiplicaciones generadas ite.pdf","I");
    }
}
