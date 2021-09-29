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
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th class="col-lg-1" scope="col">#</th>
                                <th class="col-lg-6" scope="col">Departamento</th>
                                <th class="col-lg-3 d-none d-lg-table-cell" scope="col">Responsável</th>
                                <th class="col-lg-2" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($departments as $department)
                             <tr>
                                 <th scope="row">{{ $department->id }}</th>
                                 <td>{{ $department->name }}</td>
                                 <td class="d-none d-lg-table-cell">{{ $department->responsible }}</td>
                                 <td class="d-flex justify-content-end">
                                     <a href="#" class="btn btn-sm btn-primary text-white me-2">
                                         <i class="bi bi-pencil-square"></i>
                                     </a>
                                     <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
                                         @csrf
                                         @method('DELETE')
                                         <button class="btn btn-sm btn-danger text-white">
                                             <i class="bi bi-trash"></i>
                                         </button>
                                     </form>
                                 </td>
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
