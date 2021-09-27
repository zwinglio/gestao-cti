@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">

                    {{ __('Criar departamentos') }}

                </div>

                <div class="card-body">
                    <form action="{{ route('departments.store') }}" method="post" enctype="multipart/form">
                        @csrf
                        <label for="name" class="form-label mt-2">Nome do departamento:</label>
                        <input class="form-control" name="name"></input>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="responsible" class="form-label mt-2">Responsavel:</label>
                                <input class="form-control" name="responsible"></input>
                            </div>
                            <div class="col-lg-6">
                                <label for="email" class="form-label mt-2">Email do setor:</label>
                                <input class="form-control" name="email"></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="ramal" class="form-label mt-2">Ramal:</label>
                                <input class="form-control" name="ramal"></input>
                            </div>
                            <div class="col-lg-6">
                                <label for="type" class="form-label mt-2">Tipo do setor</label>
                                <select class="form-select" aria-label="Selecione o tipo do setor" name="type">
                                    <option selected>Gabinete</option>
                                    <option value="1">Administrativo</option>
                                    <option value="2">Externo</option>
                                  </select>
                            </div>
                        </div>

                        <label for="notes" class="form-label mt-2">Anotações</label>
                        <textarea name="notes" id="notes" cols="30" rows="10" class="form-control"></textarea>
                        <hr />
                        <div class="d-flex">
                            <button type="submit" class="ms-auto btn btn-success btn-sm text-white">Cadastrar
                                departamento</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection