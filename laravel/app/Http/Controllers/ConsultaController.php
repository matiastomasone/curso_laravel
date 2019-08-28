<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get(Request $request)
    {
        return view('formulario_consulta');
    }

        public function post(Request $request)
    {
        request()->validate([
            'cuit' => 'required|numeric|min:10000000000|max:99999999999'
        ] ,[
            'cuit.min'  => 'El cuit debe tener 11 caracteres',
            'cuit.max'  => 'El cuit debe tener 11 caracteres'
        ]);

        return view('consulta', ['cuit' => $request->get('cuit') ]);
    }
}
