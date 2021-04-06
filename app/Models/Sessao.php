<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    use HasFactory;

    protected $table = 'sessoes';
    protected $primaryKey = 'cod_sessao';
    protected $fillable = ['horario', 'dt_sessao'];
    public $timestamps = false;
}
