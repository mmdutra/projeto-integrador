@extends('layout')

@section('title', 'Pacientes')

@push('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
            $('#patient-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
                }
            }
            );
        });
</script>
@endpush

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="section-title">Pacientes</h1>
        </div>
    </div>

    <div class="buttons">
        <a href="{{ route('index') }}" class="btn btn-danger">Voltar</a>
        <a href="{{ route('paciente.novo') }}" class="btn btn-success">Novo</a>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table id="patient-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Sexo</td>
                            <td>CPF</td>
                            <td>Telefone</td>
                            <td>Opções</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->nome }}</td>
                            <td>{{ $patient->sexo }}</td>
                            <td>{{ $patient->cpf }}</td>
                            <td>{{ $patient->telefone }}</td>
                            <td class="buttons">
                                <a href="{{ route('paciente.editar', ['id' => $patient->cod_paciente]) }}"
                                    class="btn btn-primary">Editar</a>
                                <a href="{{ route('paciente.deletar', ['id' => $patient->cod_paciente]) }}"
                                    class="btn btn-danger">Excluir</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection