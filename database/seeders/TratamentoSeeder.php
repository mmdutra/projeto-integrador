<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Sessao;
use App\Models\Tratamento;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TratamentoSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');

        for ($i = 0; $i < 50; $i++) {
            $tratamento = Tratamento::factory()->create();

            for ($j = 0; $j < $tratamento->qtd_sessoes; $j++) {

                DB::table('sessoes')->insert([
                    'horario' => $faker->dateTime->format('H:i'),
                    'dt_sessao' => $faker->dateTime,
                    'cod_tratamento' => $tratamento->cod_tratamento
                ]);
            }
        }
    }
}
