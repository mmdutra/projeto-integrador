<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamento extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_tratamento';
    protected $fillable = ['cod_paciente', 'cod_profissional', 'qtd_sessoes', 'tipo_tratamento', 'dt_inicio', 'dt_fim'];
    public $timestamps = false;
}
