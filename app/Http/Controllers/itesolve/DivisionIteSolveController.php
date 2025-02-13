<?php

namespace App\Http\Controllers\itesolve;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionIteSolveController extends Controller
{
    private $pasos = []; // Array para guardar los pasos
    private $pasoActual = 0; // Índice del paso actual
    private $cuadricula = [];
    private $posCociente = 0;
    private $filaActual = 1; // Empezar en la fila 1 para el cociente
    private $cantidadDigitosDividendo = 0;
    private $cantidadDigitosDivisor = 0;

    // Mostrar el formulario
    public function index()
    {
        return view('itesolve.division.division');
    }

    // Procesar la división
    public function dividir(Request $request)
    {
        $request->validate([
            'dividendo' => 'required|numeric|min:1',
            'divisor' => 'required|numeric|min:1',
        ]);

        $dividendo = $request->dividendo;
        $divisor = $request->divisor;

        // Reiniciar los pasos
        $this->pasos = [];
        $this->pasoActual = 0;

        // Crear la cuadrícula inicial
        $this->crearCuadriculaInicial($dividendo, $divisor);

        // Realizar la división paso a paso
        $this->realizarDivision($dividendo, $divisor);

        // Guardar los pasos en la sesión
        session(['pasos' => $this->pasos]);
        session(['pasoActual' => $this->pasoActual]);

        return view('itesolve.division.division', [
            'dividendo' => $dividendo,
            'divisor' => $divisor,
            'cuadricula' => $this->pasos[$this->pasoActual],
            'pasoActual' => $this->pasoActual,
            'totalPasos' => count($this->pasos),
        ]);
    }

    // Crear la cuadrícula inicial
    private function crearCuadriculaInicial($dividendo, $divisor)
    {
        $digitosDividendo = str_split((string)$dividendo);
        $this->cantidadDigitosDividendo = count($digitosDividendo);
        $digitosDivisor = str_split((string)$divisor);
        $this->cantidadDigitosDivisor = count($digitosDivisor);
        $numFilas = $this->cantidadDigitosDividendo + 5; // Filas adicionales para los pasos
        $numColumnas = $this->cantidadDigitosDividendo + $this->cantidadDigitosDivisor + 2;

        // Inicializar la cuadrícula
        for ($i = 0; $i < $numFilas; $i++) {
            for ($j = 0; $j < $numColumnas; $j++) {
                $this->cuadricula[$i][$j] = "";
            }
        }

        // Colocar los dígitos del dividendo en la fila 0
        $columnaActual = 0;
        for ($j = 0; $j < $this->cantidadDigitosDividendo; $j++) {
            $this->cuadricula[0][$columnaActual] = $digitosDividendo[$j];
            $columnaActual++;
        }

        // Colocar el símbolo ÷ en la fila 0
        $this->cuadricula[0][$columnaActual] = "÷";
        $columnaActual++;
        $this->posCociente = $columnaActual;

        // Colocar los dígitos del divisor en la fila 0
        for ($k = 0; $k < $this->cantidadDigitosDivisor; $k++) {
            $this->cuadricula[0][$columnaActual] = $digitosDivisor[$k];
            $columnaActual++;
        }

        // Guardar el paso inicial
        $this->pasos[] = $this->cuadricula;
    }

    // Realizar la división paso a paso
    private function realizarDivision($dividendo, $divisor)
    {
        $digitosDividendo = str_split((string)$dividendo);
        $digitosDivisor = str_split((string)$divisor);
        $residuo = 0;
        $indiceDividendo = 0;
        $cociente = "";
    
        // Fila y columna para el cociente
        $fila_cociente = 1; // Fila constante debajo del divisor
        $columna_cociente = $this->posCociente; // Columna inicial del cociente
    
        // Fila para el proceso (producto, residuo y cifra bajada)
        $fila_proceso = 1; // Fila debajo del cociente
    
        while ($indiceDividendo < $this->cantidadDigitosDividendo) {
            // Tomar el siguiente dígito del dividendo
            $residuo = $residuo * 10 + (int)$digitosDividendo[$indiceDividendo];
            $indiceDividendo++;
    
        // Si el residuo es menor que el divisor, continuar
        if ($residuo < $divisor) {
            // Solo agregar un cero al cociente si ya hay dígitos en él
            if ($cociente !== "") {
                $cociente .= "0";
                $this->cuadricula[$fila_cociente][$columna_cociente] = "0"; // Mostrar 0 en el cociente
                $columna_cociente++; // Mover a la siguiente columna para el cociente
            }
            continue;
        }
    
            // Calcular el dígito del cociente
            $digitoCociente = floor($residuo / $divisor);
            $cociente .= $digitoCociente;
    
            // Mostrar el dígito del cociente en la fila y columna correcta
            $this->cuadricula[$fila_cociente][$columna_cociente] = $digitoCociente;
            $columna_cociente++; // Mover a la siguiente columna para el cociente
    
            // Calcular el producto
            $producto = $divisor * $digitoCociente;
            $productoDigitos = str_split((string)$producto);
    
            // Colocar el producto en la cuadrícula
            $columnaProducto = $indiceDividendo - count($productoDigitos);
            for ($k = 0; $k < count($productoDigitos); $k++) {
                $this->cuadricula[$fila_proceso][$columnaProducto + $k] = $productoDigitos[$k];
            }
    
            // Calcular el nuevo residuo
            $residuo = $residuo - $producto;
            $residuoDigitos = str_split((string)$residuo);
    
            // Colocar el residuo en la cuadrícula
            $columnaResiduo = $indiceDividendo - count($residuoDigitos);
            for ($k = 0; $k < count($residuoDigitos); $k++) {
                $this->cuadricula[$fila_proceso + 1][$columnaResiduo + $k] = $residuoDigitos[$k];
            }
    
            // Bajar la siguiente cifra del dividendo
            if ($indiceDividendo < $this->cantidadDigitosDividendo) {
                $this->cuadricula[$fila_proceso + 1][$columnaResiduo + count($residuoDigitos)] = $digitosDividendo[$indiceDividendo];
            }
    
            // Guardar el paso
            $this->pasos[] = $this->cuadricula;
            $fila_proceso += 2; // Avanzar a la siguiente fila para el siguiente paso
        }
    }
    // Navegar entre los pasos
    public function navegar(Request $request)
    {
        $accion = $request->accion;
        $pasos = session('pasos', []);
        $pasoActual = session('pasoActual', 0);

        switch ($accion) {
            case 'reiniciar':
                $pasoActual = 0;
                break;
            case 'atras':
                if ($pasoActual > 0) $pasoActual--;
                break;
            case 'siguiente':
                if ($pasoActual < count($pasos) - 1) $pasoActual++;
                break;
            case 'resolver':
                $pasoActual = count($pasos) - 1;
                break;
        }

        // Guardar el paso actual en la sesión
        session(['pasoActual' => $pasoActual]);

        return view('itesolve.division.division', [
            'cuadricula' => $pasos[$pasoActual],
            'pasoActual' => $pasoActual,
            'totalPasos' => count($pasos),
        ]);
    }
}
// class DivisionIteSolveController extends Controller
// {
//     private $pasos = []; // Array para guardar los pasos
//     private $pasoActual = 0; // Índice del paso actual
//     private  $cuadricula = [];
//     private  $posCociente = 0;
//     private  $filaActual = 0;
//     private  $columnaActual = 0;
//     private $cantidadDigitosDividendo=0;
//     private $cantidadDigitosDivisor=0;

//     // Mostrar el formulario
//     public function index()
//     {
//         return view('itesolve.division.division');
//     }

//     // Procesar la división
//     public function dividir(Request $request)
//     {
//         $request->validate([
//             'dividendo' => 'required|numeric|min:1',
//             'divisor' => 'required|numeric|min:1',
//         ]);

//         $dividendo = $request->dividendo;
//         $divisor = $request->divisor;

//         // Reiniciar los pasos
//         $this->pasos = [];
//         $this->pasoActual = 0;

//         // Crear la cuadrícula inicial
//         $this->crearCuadriculaInicial($dividendo, $divisor);

//         // Realizar la división paso a paso
//         $this->realizarDivision($dividendo, $divisor);

//         // Guardar los pasos en la sesión
//         session(['pasos' => $this->pasos]);
//         session(['pasoActual' => $this->pasoActual]);

//         return view('itesolve.division.division', [
//             'dividendo' => $dividendo,
//             'divisor' => $divisor,
//             'cuadricula' => $this->pasos[$this->pasoActual],
//             'pasoActual' => $this->pasoActual,
//             'totalPasos' => count($this->pasos),
//         ]);
//     }

//     // Crear la cuadrícula inicial
//     private function crearCuadriculaInicial($dividendo, $divisor)
//     {
//         $digitosDividendo = str_split((string)$dividendo);
//         $this->cantidadDigitosDividendo=count($digitosDividendo);
//         $digitosDivisor = str_split((string)$divisor);
//         $this->cantidadDigitosDivisor=count($digitosDivisor);
//         $numFilas = count($digitosDividendo) + 2;
//         $numColumnas = count($digitosDividendo) + count($digitosDivisor) + 2;

//         // Inicializar la cuadrícula
       
//         for ($i = 0; $i < $numFilas; $i++) {
//             for ($j = 0; $j < $numColumnas; $j++) {
//                 $this->cuadricula[$i][$j] = "";
//             }
//         }

//         // Colocar los dígitos del dividendo en la fila 0
//         $columnaActual = 0;
//         for ($j = 0; $j < count($digitosDividendo); $j++) {
//             $this->cuadricula[0][$columnaActual] = $digitosDividendo[$j];
//             $columnaActual++;
//         }

//         // Colocar el símbolo ÷ en la fila 0
//         $this->cuadricula[0][$columnaActual] = "÷";
//         $columnaActual++;
//         $this->posCociente=$columnaActual;
//         // Colocar los dígitos del divisor en la fila 0
//         for ($k = 0; $k < count($digitosDivisor); $k++) {
//             $this->cuadricula[0][$columnaActual] = $digitosDivisor[$k];
//             $columnaActual++;
//         }

//         $this->filaActual++;
//         // Guardar el paso inicial
//         $this->pasos[] = $this->cuadricula;
//     }

//     // Realizar la división paso a paso
//     private function realizarDivision($dividendo, $divisor)
//     {
//         $digitosDividendo = str_split((string)$dividendo);
//         $digitosDivisor = str_split((string)$divisor);
//         $numFilas = count($digitosDividendo) + 2;
//         $numColumnas = count($digitosDividendo) + count($digitosDivisor) + 2;

//         // Inicializar variables
//         $cociente = "";
//         $residuo = 0;
//         $indiceDividendo = 0;
//         $cantidadDigitos=$this->calcularDigitos($digitosDividendo, $divisor);
//         $this->columnaActual=$cantidadDigitos;

//         // Recorrer los dígitos del dividendo
//         while ($indiceDividendo < count($digitosDividendo)) {
          
//             //dd($cantidadDigitos);
//             // Tomar el siguiente dígito del dividendo
//             $residuo = $residuo * 10 + (int)$digitosDividendo[$indiceDividendo];
//             $indiceDividendo++;

//             // Si el residuo es menor que el divisor, continuar
//             if ($residuo < $divisor) {
//                 $cociente .= "0";
//                 continue;
//             }

//             // Calcular el dígito del cociente
//             $digitoCociente = floor($residuo / $divisor);
//             $cociente .= $digitoCociente;

//             // Calcular el producto
//             $producto = $divisor * $digitoCociente;

//             // Calcular el nuevo residuo
//             $residuo = $residuo - $producto;

//             $cuadricula = $this->pasos[count($this->pasos) - 1];
//             $cuadricula[1][$this->posCociente] = $digitoCociente; // Cociente



            
//             //dd($digitosDivisor);
//             $digitosTomados=$this->DigitosTomados($digitosDividendo,$divisor);
            
//             $CantidadDigitosTomados=$cantidadDigitos-1;
//             for ($i = count($digitosDivisor) - 1; $i >= 0; $i--) {
                
//                 $producto=$digitosDivisor[$i]*$digitoCociente;
//                 if($digitosTomados[$CantidadDigitosTomados]<$producto){
//                     $numeroAAlcanzar=$this->encontrarNumero($producto,$digitosTomados[$CantidadDigitosTomados]);
//                     $residuo=$numeroAAlcanzar-$producto;
//                 }else{
//                     $residuo=$digitosTomados[$CantidadDigitosTomados]-$producto;
//                 }

//                 $cuadricula[$CantidadDigitosTomados][$this->filaActual] = $residuo; // Residuo
                
//             }
//             //dd($this->columnaActual++);
//             // Guardar el paso
//             $this->pasos[] = $cuadricula;
//             $this->bajarCifra($this->filaActual,$this->columnaActual);
//             $this->filaActual++;
//             $this->columnaActual++;
//             $this->pasos[] = $cuadricula;
//         }
//     }
//     function mostrarMatriz(){
//         echo "<pre>";
//         print_r($this->cuadricula);
//         echo "</pre>";
//     }

//     function bajarCifra($fila,$columna){
//         if($fila<$this->cantidadDigitosDividendo){
//             $cifraParaBajar=$this->cuadricula[$columna][0];
//             $this->cuadricula[$columna][$fila]="x";
//             $this->mostrarMatriz();
//             echo $cifraParaBajar;
//         }else{
//             echo "no entre al if";
//         }
//         echo "f=".$fila."c=".$columna;

//     }

//     function encontrarNumero($numeroBase, $digitoFinal) {
//         // Asegurar que Z está entre 0 y 9
//         if ($digitoFinal < 0 || $digitoFinal > 9) {
//             return "El dígito final debe estar entre 0 y 9.";
//         }
    
//         // Si Y ya termina en Z y es válido, retornarlo
//         if ($numeroBase % 10 == $digitoFinal) {
//             return $numeroBase;
//         }
    
//         // Si no, encontrar el siguiente número que termine en Z
//         $resto = $numeroBase % 10;
//         $incremento = ($resto <= $digitoFinal) ? ($digitoFinal - $resto) : (10 - $resto + $digitoFinal);
        
//         return $numeroBase + $incremento;
//     }

    
//     private function calcularDigitos($digitosDividendo, $divisor)
//     {
//         $numDigitos = 0;
//         $numeroActual = 0;
    
//         // Recorrer los dígitos del dividendo
//         foreach ($digitosDividendo as $digito) {
//             $numeroActual = $numeroActual * 10 + (int)$digito;
//             $numDigitos++;

    
//             // Si el número actual es mayor o igual al divisor, detenerse
//             if ($numeroActual >= $divisor) {
//                 break;
//             }
//         }
    
//         return $numDigitos;
//     }

//     private function DigitosTomados($digitosDividendo, $divisor)
//     {
//         $digitos=[];
//         $numeroActual = 0;
    
//         // Recorrer los dígitos del dividendo
//         foreach ($digitosDividendo as $digito) {
//             $numeroActual = $numeroActual * 10 + (int)$digito;
//             $digitos[]=$digito;
//             // Si el número actual es mayor o igual al divisor, detenerse
//             if ($numeroActual >= $divisor) {
//                 break;
//             }
//         }
    
//         return $digitos;
//     }

//     // Navegar entre los pasos
//     public function navegar(Request $request)
//     {
//         $accion = $request->accion;
//         $pasos = session('pasos', []);
//         $pasoActual = session('pasoActual', 0);

//         switch ($accion) {
//             case 'reiniciar':
//                 $pasoActual = 0;
//                 break;
//             case 'atras':
//                 if ($pasoActual > 0) $pasoActual--;
//                 break;
//             case 'siguiente':
//                 if ($pasoActual < count($pasos) - 1) $pasoActual++;
//                 break;
//             case 'resolver':
//                 $pasoActual = count($pasos) - 1;
//                 break;
//         }

//         // Guardar el paso actual en la sesión
//         session(['pasoActual' => $pasoActual]);

//         return view('itesolve.division.division', [
//             'cuadricula' => $pasos[$pasoActual],
//             'pasoActual' => $pasoActual,
//             'totalPasos' => count($pasos),
//         ]);
//     }
// }

