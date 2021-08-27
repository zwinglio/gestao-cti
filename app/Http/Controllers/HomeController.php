<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $nome = 'Samuel Zwinglio';
        return Inertia::render('Home', [
            'nome' => $nome,
        ]);
    }

    public function tickets()
    {
        return Inertia::render('Tickets');
    }

    public function createTicket()
    {
        return Inertia::render('Tickets/Create');
    }
}
