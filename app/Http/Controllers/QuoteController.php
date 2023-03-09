<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        return view('welcome');
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
}
