<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index(){

        $quotes = Quote::all();

        return view('dashboard',['quotes' => $quotes]);
    }

    public function create(){
        return view('produtos.add-quote');
    }

    public function login(){
        return view('login');
    }

    public function perfil(){
        return view('perfil.perfil-usuario');
    }

    public function store(Request $request){
        $quotes = new Quote;


        $quotes->titulo = $request->titulo;
        $quotes->tipo = $request->tipo;
        $quotes->valor = $request->valor;
        $quotes->data = $request->data;
        $quotes->mensal = $request->mensal;

        $quotes -> save();

        return redirect('/dashboard');
    }
}
