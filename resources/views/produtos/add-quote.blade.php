<style>
    .box{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 50px;
    }

   .submit{
     border: 2px solid gray;
     cursor: pointer;
   }

    form{
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 200px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="/dashboard">Página inicial</a>
    </x-slot>

    <div class="py-12">
    <div class="main">
     <div class="box">
           <h1>Adicione sua conta</h1>
            <form action="/produtos" method="POST">
                @csrf
                <label for="titulo">Despesa:</label>
                <input type="text" id="titulo" name="titulo">
                <label for="tipo">Tipo de despesa:</label>
                <select name="tipo" id="tipo">
                    <option value="pessoal">Pessoal</option>
                    <option value="alimentacao">Alimentação</option>
                    <option value="saude">Saúde</option>
                    <option value="lazer">Lazer</option>
                    <option value="outros">Outros</option>
                </select>
                <label for="valor">Valor</label>
                <input type="text" id="valor" name="valor">
                <label for="mensal">Já está paga?</label>
                <select name="mensal" id="mensal">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <label for="vencimento">Vencimento:</label>
                <input type="date" name="data" id="data">
                <input class="submit" type="submit" value="Cadastrar">
            </form>
     </div>
</div>
    </div>
</x-app-layout>



