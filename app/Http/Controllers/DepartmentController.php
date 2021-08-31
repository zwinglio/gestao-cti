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
        $departments = Department::all();

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
    public function store(Request $request)
    {
        // Cria a entendidade
        $department = new Department;

        // Pega os dados do request
        $department->nome = $request->nome;
        $department->tipo = $request->tipo;
        $department->responsavel = $request->responsavel;
        $department->telefone = $request->telefone;
        $department->ramal = $request->ramal;
        $department->email = $request->email;

        // Salva do banco de dados
        $department->save();

        return Redirect::route('departments.index');
        // $this->index();
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
            'departments' => $department,
        ]);
    }

    // Armazena alterações no banco de dados
    public function update($id)
    {
    }

    public function destroy($id)
    {
        Department::destroy($id);
        return Redirect::route('departments.index');
    }
}
