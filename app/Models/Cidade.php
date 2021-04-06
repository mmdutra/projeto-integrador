<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_cidade';
    protected $fillable = ['nome', 'cod_estado'];
    public $timestamps = false;
}
