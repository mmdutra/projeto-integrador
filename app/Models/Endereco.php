<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_endereco';
    protected $fillable = ['cod_cidade', 'rua', 'numero'];
    public $timestamps = false;

    public function cidade()
    {
        return $this->hasOne(Cidade::class, 'cod_cidade', 'cod_cidade');
    }
}
