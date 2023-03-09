@extends('layouts.layout-perfil')

@section('title', 'HDC Events')

@section('content')

<div class="main">
     <div class="box">
           <div class="perfil">
              <div><h1>Perfil</h1></div>
              <div class="editar"><a href="/alterarCadastro">Editar</a></div>
           </div>
           <div class="info">
                <div class="itm1"><p>Foto</p></div>
                <div><p>teste</p></div>
           </div>
           <div class="info">
             <div><p>Nome</p></div>
             <div><p>teste</p></div>
           </div>
           <div class="info">
                 <div><p>Email</p></div>
                <div> <p>teste</p></div>
           </div>
           <div class="info">
                <div> <p>Senha</p></div>
                 <div><p>teste</p></div>
           </div>
           
     </div>
</div>

@endsection