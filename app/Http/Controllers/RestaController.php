<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RestaRequest;
use App\Http\Controllers\ResController;
use Mpdf\Mpdf;

class RestaController extends Controller
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
        return view('resta.formresta');
    }

/**%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% DIVISION %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

/**%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%  FIN CLASE  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%*/
    
    function Imprimir(RestaRequest $request){
        $UnaDificultad=$request->dificultad;
        $UnosSumandos=$request->sumandos;
        $UnosDigitos=$request->digitos;
        $imagenURL = public_path('images\logo.png');
        $html = '';
        $html.='<body><div>';
        $html .= '<link rel="stylesheet" href="' . public_path('css/estilosite.css') . '">';
        $encabezado = '<img src="'. $imagenURL .'">';
        $html.='<div>';
        $R=[];
   
        for ($k=0; $k < 6; $k++) { 
            $html .='<p class="text-right">'.($k+1).').-Una con una linea la respuesta correcta </p>';	
            $html .='<table class="tabla">';
            $html .= '<tr>';
            for ($i=0; $i < 2; $i++) { 
                $S=new ResController($UnaDificultad,$UnosDigitos);
                $Minuendo=$S->GetMinuendo();
                $Sustraendo=$S->GetSustraendo();
                
                $html .= '<td class="mediano derecha"> ─ </td>';
                $html .= '<td class="mediano centrar" colspan="2">';
                
                $html.=$Minuendo."<br>";
                $html.=$Sustraendo."<br>";
                
                $R[$i]=$S->Respuesta();
                $html .= '<hr></td>';
            } 				
                $html .= '</tr></table><br>';
                $this->Sacudir($R)	;
                $html.= '<div class="respuestasuma"><table class="tabla"><tr>'.'<td class="pequenio">Cociente:'.$R[0].'</td>
                        <td class="pequenio">Cociente:'.$R[1].'</td>
                        </tr></table></div>';
        }
            $html.='</div></body>';
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->SetMargins(10, 50, 30);
            $mpdf->SetHeader($encabezado);
            $mpdf->SetFooter('www.ite.com.bo| www.tools.ite.com.bo |David Flores');
            $mpdf->WriteHTML($html);
            return $mpdf->output("resta.pdf","I");

    }
}
