<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';
    protected $fillable = ['nome', 'sigla'];
    protected $primaryKey = 'cod_estado';
    public $timestamps = false;

    public function cidades()
    {
        return $this->hasMany(Cidade::class, 'cod_estado', 'cod_estado');
    }
}
