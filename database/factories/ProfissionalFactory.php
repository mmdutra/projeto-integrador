<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Profissional;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfissionalFactory extends Factory
{
    protected $model = Profissional::class;

    public function definition()
    {
        $especialidade = $this->faker->randomElement(['oftalmologista', 'pediatra', 'cardiologista', 'urologista']);

        return [
            'nome' => $this->faker->name,
            'especialidade' => $especialidade,
            'crm' => "MG-". $this->faker->randomNumber(4)
        ];
    }
}
