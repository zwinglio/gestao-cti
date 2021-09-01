<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Prophecy\Promise\ReturnPromise;

class DepartmentController extends Controller
{
    // Lista dos departamentos
    public function index()
    {
        $departments = Department::latest()->get();

        return Inertia::render('Departments', [
            'departments' => $departments,
        ]);
    }

    // Formulário de criação de departamentos
    public function create()
    {
        return Inertia::render('Departments/Create');
    }
    
    // Armazena o departamento no banco dedados
    public function store()
    {
        // Cria a entendidade
        $department = new Department;

        // Pega os dados do request
        $department->nome = request('nome');
        $department->tipo = request('tipo');
        $department->responsavel = request('responsavel');
        $department->telefone = request('telefone');
        $department->ramal = request('ramal');
        $department->email = request('email');

        // Salva do banco de dados
        $department->save();

        return Redirect::route('departments.index')->with('success', 'Departamento criado!');
    }

    // Detalhes dos departamentos
    public function show($id)
    {
    }

    // Formulário de edição de departamentos
    public function edit($id)
    {
        $department = Department::findOrFail($id);

        return Inertia::render('Departments/Edit', [
            'department' => $department,
        ]);
    }

    // Armazena alterações no banco de dados
    public function update(int $id)
    {
        $department = Department::findOrFail($id);

        // Pega os dados do request
        $department->nome = request('nome');
        $department->tipo = request('tipo');
        $department->responsavel = request('responsavel');
        $department->telefone = request('telefone');
        $department->ramal = request('ramal');
        $department->email = request('email');

        // Salva as alterações
        $department->save();

        return Redirect::route('departments.index');
    }

    public function destroy($id)
    {
        Department::destroy($id);
        return Redirect::route('departments.index');
    }
}
