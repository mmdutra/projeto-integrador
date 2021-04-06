<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CidadeFactory extends Factory
{
    use HasFactory;

    protected $model = Cidade::class;

    public function definition()
    {
        $estado = Estado::all()->random(1)->first();

        return [
            'nome' => $this->faker->city,
            'cod_estado' => $estado
        ];
    }
}
