<?php

namespace App\Http\Livewire\Clientes;
use Illuminate\Http\Request;

use Livewire\Component;
use \App\Models\Cliente;

class ListClientes extends Component
{
    public $delete;
    public $pesquisar;
    public $clientes;


    public function mount(Request $request){
        $this->clientes = Cliente::orderBy('id','DESC')->where('nome','like','%'.$request->pesquisar.'%')
        ->orWhere('cpf','like','%'.$request->pesquisar.'%')
        ->orWhere('data_nasc','like','%'.$request->pesquisar.'%')
        ->orWhere('estado','like','%'.$request->pesquisar.'%')
        ->orWhere('cidade','like','%'.$request->pesquisar.'%')
        ->orWhere('sexo','like','%'.$request->pesquisar.'%')
        ->paginate(10)->all();
    }

    /*public function hydrate()
    {
        $this->clientes = Cliente::where('nome','like','%'.$this->pesquisar.'%')->paginate(10)->all();
    }*/

    /*public function hydratePesquisar($value)
    {
        //
        $this->clientes = Cliente::where('nome','like','%'.$this->pesquisar.'%')->paginate(10)->all();
    }*/

    public function render()
    {
        return view('livewire.clientes.list-clientes');
    }

    public function delete($id){
        Cliente::findOrFail($id)->delete();
        $this->clientes = Cliente::orderBy('id','DESC')->paginate(10)->all();
    }
}
