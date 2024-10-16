<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginaVendedor extends Controller
{
    public function PaginaVendedor()
    {
        // Aqui você pode passar dados para a view, se necessário.
        return view('pagina_do_vendedor');
    }

    public function teste(){
        $teste =  DB::table('produtos')->get();

        if(!empty($teste)){
            return response()->json($teste);
        }
        return [];
    }

}