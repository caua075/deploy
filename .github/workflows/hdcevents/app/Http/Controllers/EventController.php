<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = 'Cauã';
    $idade = 20;
    $arr = [1, 2, 3, 4, 5];
    $nomes = ['Cauã', 'João', 'Maria', 'José'];

    return view('welcome', ['nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
}