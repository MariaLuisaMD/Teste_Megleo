<style>
    .main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .conta {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }
    .bloco{
       border: 2px solid gray;
       border-radius: 10px;
       padding: 25px;
    }

    h1{
        font-size: 100px;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="/meus_quotes/create">Adicionar fatura</a>
    </x-slot>

    <div class="py-12">
        <div class="main">

            
            <div class="conta">
                <div class="bloco">
                    <h1>{{$quotes->titulo}}</h1>
                    <p>R${{$quotes->valor}}</p>
                    <p>Vencimento: {{date('d/m/Y', strtotime($quotes->data))}}</p>
                    <p>Tipo de despesa: {{$quotes->tipo}}</p>
                    @if($quotes->mensal==1)
                      <p>Já está paga: Sim</p>
                    @endif
                    @if($quotes->mensal==0)
                      <p>Já está paga: Não</p>
                    @endif
                </div>
                <div>
                    <a href="/contas/edit/{{$quotes->id}}">Editar conta</a>
                    <form action="/contas/delete/{{$quotes->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Apagar fatura</button>
                    </form>
                </div>

            </div>
            
        </div>

    </div>
</x-app-layout>