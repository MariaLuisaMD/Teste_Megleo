@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div class="main">
    
    <div class="box">
    <h1>Cadastro</h1>
    <p>Crie seu cadastro para adicionar suas anotações literárias favoritas</p>
    

    <form>
        <input type="text" id="nome_cadastro" placeholder="Nome">
        <input type="text" id="email_cadastro" placeholder="Email">
        <input type="text" id="senha_cadastro" placeholder="Senha">
        <input type="submit" value="Cadastrar" class="submit">
    </form>

    <p>Já é membro? <a href="/login">Login</a></p>
    </div>


    
</div>

@endsection