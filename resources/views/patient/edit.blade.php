@extends('layout')

@section('title', 'Editar Paciente')

@push('scripts')
    <script src="https://unpkg.com/imask"></script>
    <script type="text/javascript" src="{{ app('url')->asset('js/selectCityByState.js') }}"></script>
    <script type="text/javascript" src="{{ app('url')->asset('js/createMask.js') }}"></script>
    <script>;
        createMask(document.getElementById('cpf'), '000.000.000-00')
        createMask(document.getElementById('telefone'), '(00) 00000-0000')
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="section-title">@yield('title')</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('paciente.salvar') }}" method="POST">
                <fieldset>
                    <legend>Dados de paciente</legend>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" required min="3" max="255" value="{{ $patient->nome }}">
                        </div>
                        <div class="col">
                            <label for="dt_nascimento">Data de nascimento</label>
                            <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" required min="3" max="255" value="{{ date('Y-m-d', strtotime($patient->dt_nascimento))}}">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="rg">RG</label>
                            <input type="text" id="rg" name="rg" class="form-control" required min="3" max="11" value="{{ $patient->rg }}">
                        </div>
                        <div class="col">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control" required min="11" max="14" value="{{ $patient->cpf }}">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="peso">Peso</label>
                            <input type="number" id="peso" name="peso" class="form-control" required min="35" max="230" step="any" value="{{ $patient->peso }}">
                        </div>
                        <div class="col">
                            <label for="altura">Altura</label>
                            <input type="number" id="altura" name="altura" class="form-control" step="any" value="{{ $patient->altura }}" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="sexo">Sexo</label><br>
                            <div class="form-check form-check-inline">
                                @if($patient->sexo == 'M')
                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="M" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="M">
                                @endif

                                <label class="form-check-label" for="flexRadioDefault1">
                                    M
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                @if($patient->sexo == 'F')
                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="F" checked>
                                @else
                                    <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="F">
                                @endif

                                <label class="form-check-label" for="flexRadioDefault1">
                                    F
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" class="form-control" required min="8" max="15" value="{{ $patient->telefone }}">
                        </div>
                    </div>
                </fieldset>
                <fieldset id="fieldset-endereco">
                    <legend>Endereço</legend>
                    <div class="form-group row mt-3">
                        <div class="col-md-8">
                            <label for="rua">Rua</label>
                            <input type="text" id="rua" name="rua" class="form-control" required min="3" max="255" value="{{ $patient->endereco->rua }}">
                        </div>
                        <div class="col-md-4">
                            <label for="numero">Número</label>
                            <input type="text" id="numero" name="numero" class="form-control" required min="1" max="10" value="{{ $patient->endereco->numero }}">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="Estado">Estado</label>
                            <select name="cod_estado" id="cod_estado" class="form-control">
                                <option value="0" selected disabled>Selecione uma opção</option>
                                @foreach($states as $state)
                                    @if($patient->endereco->cidade->cod_estado == $state->cod_estado)
                                        <option value="{{ $state->cod_estado }}" selected>{{ $state->nome }}</option>
                                    @else
                                        <option value="{{ $state->cod_estado }}">{{ $state->nome }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="cod_cidade">Cidade</label>
                            <select name="cod_cidade" id="cod_cidade" class="form-control">
                                <option value="0" disabled>Selecione uma opção</option>
                                <option value="{{ $patient->endereco->cidade->cod_cidade }}" selected>{{ $patient->endereco->cidade->nome }}</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <a href="{{ route('paciente.index') }}" type="reset" class="btn btn-danger">cancelar</a>
                    <button type="submit" class="btn btn-success">salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
