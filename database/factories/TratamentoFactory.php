<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\Profissional;
use App\Models\Tratamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class TratamentoFactory extends Factory
{
    protected $model = Tratamento::class;

    public function definition()
    {
        $tipoTratamento = $this->faker->randomElement(['eletroterapia', 'massoterapia', 'fototerapia', 'crioterapia']);

        $thisMonth = $this->faker->dateTimeThisMonth;
        return [
            'cod_paciente' => Paciente::factory(),
            'cod_profissional' => Profissional::factory(),
            'qtd_sessoes' => $this->faker->randomNumber(1),
            'tipo_tratamento' => $tipoTratamento,
            'dt_inicio' => $thisMonth,
            'dt_fim' => $thisMonth->modify('+2 month')
        ];
    }
}
