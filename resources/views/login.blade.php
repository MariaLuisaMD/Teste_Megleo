@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div class="main">
    <div class="box">
    <h1>Login</h1>
    <p>Bem vindo de volta</p>

    <form>
        <input type="text" id="email_cadastro" placeholder="Email">
        <input type="text" id="senha_cadastro" placeholder="Senha">
        <input type="submit" value="Login" class="submit">
    </form>

    <p>Não é membro? <a href="/">Cadastrar</a></p>
    </div>
    
</div>

@endsection