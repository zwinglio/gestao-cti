@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
                    
                    Aqui os departamentos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
