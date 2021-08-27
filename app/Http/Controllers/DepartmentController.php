<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
    }
    
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
    }
}
