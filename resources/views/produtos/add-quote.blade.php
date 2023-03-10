@extends('layouts.layout-perfil')

@section('title', 'HDC Events')

@section('content')

<div class="main">
     <div class="box">
           <h1>Adicione seu quote</h1>
            <form action="/produtos" method="POST">
                @csrf
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo">
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor">
                <label for="pagina">Página:</label>
                <input type="text" id="pagina" name="pagina">
                <label for="data">Data:</label>
                <input type="date" class="data" id="data" name="data">
                <label for="quote">Insira o seu quote favorito:</label>
                <textarea id="quote" rows="10" maxlength="180" name="quote"> </textarea>
                <input type="submit" value="Adicionar">
            </form>
     </div>
</div>


@endsection