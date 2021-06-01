<?php

declare(strict_types=1);

namespace App\Http\Controllers;

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

    }

    /**
     *
     * Retorna o formulário de edição de um paciente
     */
    public function edit(Paciente $paciente)
    {
        return view('patient.edit');
    }

    /**
     *
     * Realiza a edição dos dados de um paciente
     * @param Paciente $paciente
     * @param Request $request
     */
    public function update(Paciente $paciente, Request $request)
    {

    }

    /**
     *
     * Realiza a exclusão de um paciente
     * @param Paciente $paciente
     */
    public function destroy(Paciente $paciente)
    {

    }
}
