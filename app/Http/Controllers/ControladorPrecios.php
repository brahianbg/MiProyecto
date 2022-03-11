<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function precio($precio){
            //se recomienda inicializar las variables
            $precioTotal = 0;
            $precioTfinal=0;
            if($precio > 0){
                if(is_numeric($precio)){
                    if ($precio < 100000){
                        return 'este producto no tiene descuento';
                      }
                      //programo la opcion uno chocolate
                      if($precio >= 100000 && $precio <= 150000){
                          $precioTotal = $precio * 0.02;
                          $precioTfinal = $precio - $precioTotal;
                          return 'El descuento del producto es del 2%, y el total a
                          pagar es: ' .$precioTfinal;
                      }
                      elseif($precio >150000 && $precio <= 300000){
                          $precioTotal = $precio * 0.03;
                          $precioTfinal = $precio - $precioTotal;
                          return 'El descuento del producto es del 3%, y el total a
                          pagar es: ' .$precioTfinal;
                      }
                      elseif($precio >300000 && $precio <= 500000){
                          $precioTotal = $precio * 0.04;
                          $precioTfinal = $precio - $precioTotal;
                          return 'El descuento del producto es del 4%, y el total a
                          pagar es: ' .$precioTfinal;
                      }
                      elseif($precio >500000){
                          $precioTotal = $precio * 0.05;
                          $precioTfinal = $precio - $precioTotal;
                          return 'El descuento del producto es del 5%, y el total a
                          pagar es: ' .$precioTfinal;
                      }
                }
                else{
                    return 'El valor ingresado es incorrecto. Inténtelo nuevamente.';
                }
        }


    }
    public function getIVA($NombreP,$precio){
        $IVA = 1.19;
        $precioT = 0;
        $Psiniva = 0;
        $precioT = $precio * $IVA;
        $Psiniva = $precioT - $precio;

        return 'El articulo es: ' . $NombreP. ' EL producto sin iva cuesta: ' . $precio. ' el precio del iva es: ' .$Psiniva. ' El total a pagar por el articulo es: ' . $precioT;
    }
}
