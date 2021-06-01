@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h1">Tela principal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pacientes</h5>
                        <p class="card-text">Controle de pacientes</p>
                        <a href="{{ url('/paciente') }}" class="btn btn-primary text-uppercase">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
