<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;

class HomeController extends Controller
{
    //home
    public function index()
    {
        $clientes = Cliente::limit(10)->get();
        $totalClientes = Cliente::all()->count();
        $totalHomens = Cliente::where('sexo','Masculino')->count();
        $totalMulheres = Cliente::where('sexo','Feminino')->count();
        return view('index-site',compact('clientes','totalClientes','totalHomens','totalMulheres'));
    }
}
