<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Cliente;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'endereco' =>  $this->faker->address(),
            'cpf' => '155544565585',
            'estado' => 'DF',
            'cidade' => 'Brasília',
            'data_nasc' => $this->faker->date(),
            'sexo' => 'Masculino'
        ];
    }
}
