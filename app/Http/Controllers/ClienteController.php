<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;

class ClienteController extends Controller
{
    //Visualizar clientes.
    public function index(Request $request)
    {
        $clientes = Cliente::where('nome','like','%'.$request->pesquisar.'%')
            ->orWhere('cpf','like','%'.$request->pesquisar.'%')
            ->orWhere('data_nasc','like','%'.$request->pesquisar.'%')
            ->orWhere('estado','like','%'.$request->pesquisar.'%')
            ->orWhere('cidade','like','%'.$request->pesquisar.'%')
            ->orWhere('sexo','like','%'.$request->pesquisar.'%')
            ->paginate(10);
        return view('clientes.index-clientes',compact('clientes'));
    }

    //Visualização da tela de cadastro de cliente.
    public function cadastrarCliente()
    {
        return view('clientes.cadastrar-cliente');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        //Convertendo data 0000-00-00
        $dados['data_nasc'] = date('Y-m-d',strtotime($dados['data_nasc']));

        $request->validate([
            'cpf'       => 'required|cpf',
            'nome'      => 'required',
            'sexo'      => 'required',
            'data_nasc' => 'required',
            'endereco'  => 'required',
            'estado'    => 'required',
            'cidade'    => 'required'
        ],
        [
            'required' => 'O campo :attribute é obrigatório!'
        ]);

        $clientes = Cliente::create($dados);
        
        return redirect(route('clientes'))->with('mensagens',['type' => 'success', 'title' => 'Sucesso!','msg' => 'Cadastro realizado com sucesso!']);
    }


    //Update
    public function update(Request $request)
    {
        $dados = $request->all();

        $request->validate([
            'cpf'       => 'required|cpf',
            'nome'      => 'required',
            'sexo'      => 'required',
            'data_nasc' => 'required',
            'endereco'  => 'required',
            'estado'    => 'required',
            'cidade'    => 'required'
        ],
        [
            'required' => 'O campo :attribute é obrigatório!'
        ]);

         //Convertendo data 0000-00-00
         $dados['data_nasc'] = date('Y-m-d',strtotime($dados['data_nasc']));

        $clientes = Cliente::findOrFail($request->id)->update($dados);
        
        return redirect('/clientes/'.$request->id)->with('mensagens',['type' => 'success', 'title' => 'Sucesso!','msg' => 'Dados atualizados com sucesso!']);
    }

    public function getCliente($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.editar-cliente',compact('cliente'));
    }

}
