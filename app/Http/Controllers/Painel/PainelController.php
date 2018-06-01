<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index()
    {
        return view('Painel.index');
    }

    public function create()
    {
        $title = 'Cadastro de Produto';
        return view('Painel.cadastro',compact('title'));
    }

}
