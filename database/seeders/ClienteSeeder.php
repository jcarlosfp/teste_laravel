<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(
            [
                'nome' => 'José Carlos',
                'endereco' =>  'Endereço teste',
                'cpf' => '69210349172',
                'estado' => 'DF',
                'cidade' => 'Brasília',
                'data_nasc' => '1980-05-06',
                'sexo' => 'Masculino'
            ]
        );
    }
}
