<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller

{

    public function comeco(){
        return redirect('/register');
    }

    public function index(){

        $quotes = Quote::all();

        $user = auth()->user();

        return view('dashboard',['quotes' => $quotes, 'user'=>$user]);
    }


    public function show($id){

        $quotes = Quote::findOrFail($id);

        return view('produtos.show',['quotes' => $quotes]);
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

        $user = auth()->user();
        $quotes->user_id = $user->id;

        $quotes -> save();

        return redirect('/dashboard');
    }

    public function deletar($id){
        Quote::findOrFail($id)->delete();
        return redirect('/dashboard');
    }

    public function editar($id){
        $quotes = Quote::findOrFail($id);

        return view('produtos.edit', ['quotes' => $quotes]);
    }

    public function upd(Request $request){
        Quote::findOrFail($request->id)->update($request->all());
        return redirect('/dashboard');
    }
        
    


}
