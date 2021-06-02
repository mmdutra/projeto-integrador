<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_paciente';
    protected $fillable = ['rg', 'cpf', 'sexo', 'nome', 'telefone', 'peso', 'altura', 'dt_nascimento', 'dt_cadastro', 'cod_endereco'];
    public $timestamps = false;

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'cod_endereco', 'cod_endereco');
    }
}
