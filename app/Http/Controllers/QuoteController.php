<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index(){

        $quotes = Quote::all();

        return view('welcome',['quotes' => $quotes]);
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
        $quotes->autor = $request->autor;
        $quotes->pagina = $request->pagina;
        $quotes->data = $request->data;
        $quotes->quote = $request->quote;

        $quotes -> save();

        return redirect('/');
    }
}
