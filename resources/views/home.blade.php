@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="section-title">Tela principal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Pacientes</h2>
                        <p class="card-text">Controle de pacientes</p>
                        <div class="buttons">
                            <a href="{{ url('/paciente') }}" class="btn btn-primary">Acessar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card disabled">
                    <div class="card-body">
                        <h2 class="card-title">Consultas</h2>
                        <p class="card-text">Controle de consultas</p>
                        <div class="buttons">
                            <button class="btn btn-primary" disabled>Acessar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card disabled">
                    <div class="card-body">
                        <h2 class="card-title">Relatórios</h2>
                        <p class="card-text">Relatórios gerais</p>
                        <div class="buttons">
                            <button class="btn btn-primary" disabled>Acessar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
