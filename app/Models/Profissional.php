<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;

    protected $table = 'profissionais';
    protected $primaryKey = 'cod_profissional';
    protected $fillable = ['crm', 'nome', 'especialidade'];
    public $timestamps = false;
}
