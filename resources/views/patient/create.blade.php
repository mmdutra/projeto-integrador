@extends('layout')

@section('title', 'Cadastrar Paciente')

@push('scripts')
    <script type="text/javascript" src="{{ app('url')->asset('js/selectCityByState.js') }}"></script>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h1">@yield('title')</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('paciente.salvar') }}" method="POST">
                <fieldset>
                    <legend>Dados de paciente</legend>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" required min="3" max="255" >
                        </div>
                        <div class="col">
                            <label for="dt_nascimento">Data de nascimento</label>
                            <input type="date" id="dt_nascimento" name="dt_nascimento" class="form-control" required min="3" max="255">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="rg">RG</label>
                            <input type="text" id="rg" name="rg" class="form-control" required min="3" max="11">
                        </div>
                        <div class="col">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control" required min="11" max="14">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="peso">Peso</label>
                            <input type="number" id="peso" name="peso" class="form-control" required min="35" max="230">
                        </div>
                        <div class="col">
                            <label for="altura">Altura</label>
                            <input type="number" id="altura" name="altura" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="sexo">Sexo</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="M">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    M
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="F">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    F
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" class="form-control" required min="8" max="15">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Endereço</legend>
                    <div class="form-group row mt-3">
                        <div class="col-md-8">
                            <label for="rua">Rua</label>
                            <input type="text" id="rua" name="rua" class="form-control" required min="3" max="255">
                        </div>
                        <div class="col-md-4">
                            <label for="numero">Número</label>
                            <input type="text" id="numero" name="numero" class="form-control" required min="1" max="10">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col">
                            <label for="Estado">Estado</label>
                            <select name="cod_estado" id="cod_estado" class="form-control">
                                <option value="0" selected disabled>Selecione uma opção</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->cod_estado }}">{{ $state->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="cod_cidade">Cidade</label>
                            <select name="cod_cidade" id="cod_cidade" class="form-control">
                                <option value="0" selected disabled>Selecione uma opção</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-between mt-3 mb-5">
                    <a href="{{ route('paciente.index') }}" type="reset" class="btn btn-danger">cancelar</a>
                    <button type="submit" class="btn btn-success">salvar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
