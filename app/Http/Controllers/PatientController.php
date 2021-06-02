<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Estado;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Retorna a tela principal do CRUD
     */
    public function index()
    {
        $patients = Paciente::all();

        return view('patient.index', compact('patients'));
    }

    /**
     *
     * Retorna o formulário de cadastro de paciente
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function create()
    {
        $states = Estado::all();

        return view('patient.create', compact('states'));
    }

    /**
     *
     * Realiza o cadastro de um paciente
     * @param Request $request
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'nome' => 'required|string|min:3|max:255',
            'rg' => 'required|string',
            'cpf' => 'required|string|min:11|max:14',
            'sexo' => 'required|in:M,F',
            'telefone' => 'required|string|min:8|max:15',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'dt_nascimento' => 'required|date',
            'rua' => 'required|string|min:3|max:255',
            'numero' => 'required|string|min:1|max:10',
            'cod_estado' => 'required|integer|exists:estados,cod_estado',
            'cod_cidade' => 'required|integer|exists:cidades,cod_cidade'
        ]);

        $patient = new Paciente($validated);
        $address = Endereco::create([
            'rua' => $validated['rua'],
            'numero' => $validated['numero'],
            'cod_cidade' => $validated['cod_cidade']
        ]);
        $patient->cod_endereco = $address->cod_endereco;
        $patient->dt_cadastro = new \DateTimeImmutable();
        $patient->save();

        return redirect()->route('paciente.index');
    }

    /**
     *
     * Retorna o formulário de edição de um paciente
     */
    public function edit($id)
    {

        $patient = Paciente::findOrFail($id);
        $states = Estado::all();

        return view('patient.edit', compact('states', 'patient'));
    }

    /**
     *
     * Realiza a edição dos dados de um paciente
     * @param Paciente $paciente
     * @param Request $request
     */
    public function update(Request $request, $id)
    {
        $patient = Paciente::findOrFail($id);

        $validated = $this->validate($request, [
            'nome' => 'required|string|min:3|max:255',
            'rg' => 'required|string',
            'cpf' => 'required|string|min:11|max:14',
            'sexo' => 'required|in:M,F',
            'telefone' => 'required|string|min:8|max:15',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'dt_nascimento' => 'required|date',
            'rua' => 'required|string|min:3|max:255',
            'numero' => 'required|string|min:1|max:10',
            'cod_estado' => 'required|integer|exists:estados,cod_estado',
            'cod_cidade' => 'required|integer|exists:cidades,cod_cidade'
        ]);

        $patient->fill($validated);

        $patient->save();

        return redirect()->route('paciente.index');
    }

    /**
     *
     * Realiza a exclusão de um paciente
     * @param Paciente $paciente
     */
    public function destroy($id)
    {
        $patient = Paciente::findOrFail($id);

        $patient->delete();

        return redirect()->route('paciente.index');
    }
}
