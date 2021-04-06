<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    public function run()
    {
        Paciente::factory()->create();
    }
}
