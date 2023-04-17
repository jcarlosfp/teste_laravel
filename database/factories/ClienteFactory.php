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
        $sexo = ['Masculino','Feminino','Masculino','Feminino','Masculino','Feminino'];
        shuffle($sexo);

        return [
            'nome' => $this->faker->name(),
            'endereco' =>  $this->faker->address(),
            'cpf' => $this->faker->cpf(),
            'estado' => 'SP',
            'cidade' => self::cidadesSaoPaulo(),
            'data_nasc' => $this->faker->date(),
            'sexo' => $sexo[0]
        ];
    }


    //Algumas cidades de São Paulo.
    public function cidadesSaoPaulo()
    {
        $cidades =
        [ 
        "Adamantina",
        "Adolfo",
        "Aguaí",
        "Águas da Prata",
        "Águas de Lindóia",
        "Águas de Santa Bárbara",
        "Águas de São Pedro",
        "Agudos",
        "Alambari",
        "Alfredo Marcondes",
        "Altair",
        "Altinópolis",
        "Alto Alegre",
        "Alumínio",
        "Álvares Florence",
        "Álvares Machado",
        "Álvaro de Carvalho",
        "Alvinlândia",
        "Americana",
        "Américo Brasiliense",
        "Américo de Campos",
        "Amparo",
        "Analândia",
        "Andradina",
        "Angatuba",
        "Anhembi",
        "Anhumas",
        "Aparecida",
        "Aparecida d'Oeste",
        "Apiaí",
        "Araçariguama",
        "Araçatuba",
        "Araçoiaba da Serra",
        "Aramina",
        "Arandu",
        "Arapeí",
        "Araraquara",
        "Araras",
        "Arco-Íris",
        "Arealva",
        "Areias",
        "Areiópolis",
        "Ariranha",
        "Artur Nogueira",
        "Arujá",
        "Aspásia",
        "Assis",
        "Atibaia",
        "Auriflama",
        "Avaí",
        "Avanhandava",
        "Avaré",
        "Bady Bassitt",
        "Balbinos",
        "Bálsamo",
        "Bananal",
        "Barão de Antonina",
        "Barbosa",
        "Bariri",
        "Barra Bonita",
        "Barra do Chapéu",
        "Barra do Turvo",
        "Barretos",
        "Barrinha",
        "Barueri",
        "Bastos",
        "Batatais",
        "Bauru",
        "Bebedouro",
        "Bento de Abreu",
        "Bernardino de Campos",
        "Bertioga",
        "Bilac",
        "Birigui",
        "Biritiba Mirim",
        "Boa Esperança do Sul",
        "Bocaina",
        "Bofete",
        "Boituva",
        "Bom Jesus dos Perdões",
        "Bom Sucesso de Itararé",
        "Borá",
        "Boracéia",
        "Borborema",
        "Borebi",
        "Botucatu",
        "Bragança Paulista",
        "Braúna",
        "Brejo Alegre",
        "Brodowski",
        "Brotas",
        "Buri",
        "Buritama",
        "Buritizal",
        "Cabrália Paulista",
        "Cabreúva",
        "Caçapava",
        "Cachoeira Paulista",
        "Caconde",
        "Cafelândia",
        "Caiabu",
        "Caieiras",
        "Caiuá",
        "Cajamar",
        "Cajati",
        "Cajobi",
        "Cajuru",
        "Campina do Monte Alegre",
        "Campinas",
        "Campo Limpo Paulista",
        "Campos do Jordão",
        "Campos Novos Paulista",
        "Cananéia",
        "Canas",
        "Cândido Mota",
        "Cândido Rodrigues",
        "Canitar",
        ];
        shuffle($cidades);

        return $cidades[0];
    }
}
