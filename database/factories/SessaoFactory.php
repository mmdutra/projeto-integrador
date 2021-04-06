<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Sessao;
use App\Models\Tratamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessaoFactory extends Factory
{
    protected $model = Sessao::class;

    public function definition()
    {
        return [
            'horario' => $this->faker->dateTime->format('H:i'),
            'dt_sessao' => $this->faker->dateTime,
            'cod_tratamento' => Tratamento::factory()
        ];
    }
}
