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

            <h1>Todas as contas</h1>
            <div class="conta">
                @foreach ($quotes as $quote)

                <div class="bloco">
                    <p>{{$quote->titulo}}</p>
                    <p>R${{$quote->valor}}</p>
                    <p>Vencimento: {{date('d/m/Y', strtotime($quote->data))}}</p>
                </div>

                @endforeach
            </div>
            <h1>Contas a pagar</h1>
            <div class="conta">
                @foreach ($quotes as $quote)

                @if($quote->mensal == 0)
                <div class="bloco">
                    <p>{{$quote->titulo}}</p>
                    <p>R${{$quote->valor}}</p>
                    <p>Vencimento: {{date('d/m/Y', strtotime($quote->data))}}</p>
                </div>
                @endif
                @endforeach
            </div>
            

            <h1>Contas pagas</h1>
            <div class="conta">
                @foreach ($quotes as $quote)
                @if($quote->mensal == 1)
                <div class="bloco">
                    <p>{{$quote->titulo}}</p>
                    <p>R${{$quote->valor}}</p>
                    <p>Vencimento: {{date('d/m/Y', strtotime($quote->data))}}</p>
                </div>
                @endif
                @endforeach
            </div>
            
        </div>

    </div>
</x-app-layout>