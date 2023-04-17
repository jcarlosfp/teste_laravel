<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Cliente;
use Illuminate\Support\Facades\Validator;

class ClienteApiController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return $clientes;
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        //Convertendo data 0000-00-00
        $dados['data_nasc'] = date('Y-m-d',strtotime($dados['data_nasc']));

        $validator = Validator::make($request->all(),[
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

        if($validator->fails()){
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $clientes = Cliente::create($dados);
        return $clientes;

    }

    public function update(Request $request, Cliente $cliente)
    {
        $dados = $request->all();

        //Convertendo data 0000-00-00
        $dados['data_nasc'] = date('Y-m-d',strtotime($dados['data_nasc']));

        $validator = Validator::make($request->all(),[
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

        if($validator->fails()){
            return response()->json([
                "error" => 'validation_error',
                "message" => $validator->errors(),
            ], 422);
        }

        $cliente->update($dados);
        return $cliente;
    }

    public function destroy(Request $request, Cliente $cliente)
    {
        $cliente->delete();
        return ['mensagem' => 'O cliente foi removido com sucesso!'];
    }
}
