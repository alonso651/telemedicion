<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FacturasController extends Controller
{
    //

    public function facturacion()
    {
<<<<<<< HEAD
        $conexion = Auth::user()->medidor->conexion;
        // $histolectura = Auth::user()->medidor->lecturas->last();
        $medidor = Auth::user()->medidor;
        $persona = Auth::user()->persona;
        $factura = Auth::user()->medidor->conexion->facturas->last()->paginate(10);
        $suministro = [ ];
        //  $factura = 1;
        // dd($factura);
        return view('facturacion',compact("conexion","medidor","persona","factura", "suministro"));
=======
        // $conexion = Auth::user()->medidor->conexion;
        // // $histolectura = Auth::user()->medidor->lecturas->last();
        // $medidor = Auth::user()->medidor;
        // $persona = Auth::user()->persona;
        //   $factura = Auth::user()->medidor->conexion->facturas->last()->paginate(10);
        // //  $factura = 1;
        // // dd($factura);
        // return view('facturacion',compact("conexion","medidor","persona","factura"));
>>>>>>> main
    }
}
