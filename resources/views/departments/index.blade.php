@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        @if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">

                    {{ __('Lista de Departamentos') }}

                    <a href="{{ route('departments.create') }}" class="btn btn-sm btn-success text-white">Criar novo departamento</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Departamento</th>
                                <th>Responsável</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($departments as $department)
                             <tr>
                                 <td>{{ $department->id }}</td>
                                 <td>{{ $department->name }}</td>
                                 <td>{{ $department->responsible }}</td>
                             </tr>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
