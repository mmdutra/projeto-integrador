<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Endereco;
use App\Models\Estado;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        $fakerPtBr = \Faker\Factory::create('pt_BR');

        $gender = $this->faker->randomElement(['M', 'F']);

        return [
            'nome' => $this->faker->name($gender),
            'sexo' => $gender,
            'telefone' => $fakerPtBr->phoneNumber,
            'peso' => $this->faker->randomFloat(2, 0, 200),
            'altura' => $this->faker->randomFloat(2, 0, 3),
            'rg' => $this->faker->randomNumber(8),
            'cpf' => $fakerPtBr->cpf,
            'dt_nascimento' => $this->faker->dateTime,
            'dt_cadastro' => $this->faker->dateTimeThisYear,
            'cod_endereco' => Endereco::factory()
        ];
    }
}
