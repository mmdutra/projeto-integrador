<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Estado;

class StateController extends Controller
{
    public function cities(int $cod_estado)
    {
        $state = Estado::findOrFail($cod_estado);

        $cities = $state->cidades->map(fn ($item) => [
            'id' => $item->cod_cidade,
            'name' => $item->nome
        ]);

        return response()->json($cities);
    }
}
