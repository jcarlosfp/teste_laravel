<?php

namespace App\Http\Livewire\Clientes;
use Illuminate\Support\Facades\Http;


use Livewire\Component;

class Estados extends Component
{
    public $estado;
    public $municipio;
    public $estados;
    public $municipios = [];

    public function mount()
    {   
        $this->estados = self::getEstados();

        if($this->estado)
        {
            $this->municipios = self::getMunicipios($this->estado);
        }
    } 

    
    public function updated()
    {
        $this->municipios = self::getMunicipios($this->estado);
        $this->estados = self::getEstados();
    }

    public function getEstados(){
        return Http::get(
            'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
            ['orderBy' => 'nome']
        )->object();
    }

    public function getMunicipios($estado){

        return Http::get(
            "https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$estado}/municipios",
            ['orderBy' => 'nome']
        )->object();
    }

    public function render()
    { 
        return view('livewire.clientes.estados');
    }
   
}
