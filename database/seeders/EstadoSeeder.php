<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            ['nome' => 'Acre', 'sigla' => 'AC'],
            ['nome' => 'Alagoas', 'sigla' => 'AL'],
            ['nome' => 'Amapa', 'sigla' => 'AP'],
	        ['nome' => 'Amazonas', 'sigla' => 'AM'],
            ['nome' => 'Bahia', 'sigla' => 'BA'],
            ['nome' => 'Ceara', 'sigla' => 'CE'],
	        ['nome' => 'Distrito Federal', 'sigla' => 'DF'],
            ['nome' => 'Espírito santo', 'sigla' => 'ES'],
            ['nome' => 'Goias', 'sigla' => 'GO'],
	        ['nome' => 'Maranhao', 'sigla' => 'MA'],
            ['nome' => 'Mato Grosso do Sul', 'sigla' => 'MS'],
            ['nome' => 'Minas Gerais', 'sigla' => 'MG'],
            ['nome' => 'Para', 'sigla' => 'PA'],
            ['nome' => 'Paraiba', 'sigla' => 'PB'],
	        ['nome' => 'Parana', 'sigla' => 'PR'],
            ['nome' => 'Pernambuco', 'sigla' => 'PE'],
            ['nome' => 'Piaui', 'sigla' => 'PI'],
            ['nome' => 'Rio de Janeiro', 'sigla' => 'RJ'],
            ['nome' => 'Rio Grande do Norte', 'sigla' => 'RN'],
	        ['nome' => 'Rio Grande do Sul', 'sigla' => 'RS'],
            ['nome' => 'Rondonia', 'sigla' => 'RO'],
            ['nome' => 'Roraima', 'sigla' => 'RR'],
            ['nome' => 'Santa Catarina', 'sigla' => 'SC'],
            ['nome' => 'Sao Paulo', 'sigla' => 'SP'],
            ['nome' => 'Sergipe', 'sigla' => 'SE'],
	        ['nome' => 'Tocantins', 'sigla' => 'TO'],
        ];

        foreach ($estados as $estado) {
            Estado::create($estado);
        }
    }
}
