<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //Visualizar clientes.
    public function index()
    {
        return view('clientes.index-clientes');
    }

    //Visualização da tela de cadastro de cliente.
    public function cadastrarCliente()
    {
        return view('clientes.cadastrar-cliente');
    }

    public function getCliente(){
       return view('clientes.editar-cliente');
    }
}
