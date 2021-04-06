<?php

namespace Database\Factories;

use App\Models\Cidade;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rua' => $this->faker->address,
            'numero' => $this->faker->randomNumber(3),
            'cod_cidade' => Cidade::factory()
        ];
    }
}
