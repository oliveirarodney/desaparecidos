@extends('layout.master')
 
@section('content')
<header class="header">
    <div class="row">
        <h1 class="col-xs-8">
            <i class="fa fa-user"></i>
            Usuário 
        </h1>
    </div>
</header>
<main class="container-fluid nopadding">
    <div class="content">
        <div class="row">
            @if(count($desaparecidos) === 0)
                <p>Você não cadastrou nenhum desaparecimento. Se desejar cadastrar, clique <a href="/cadastrar">aqui</a>.</p>
            @endif
            @foreach($desaparecidos as $desaparecido)
                <div class="col-sm-6 col-md-4 teste">
                    <div class="desaparecido">
                        <a href="{{ route('page', ['id' => $desaparecido->id ]) }}">
                            <p class="nome">{{$desaparecido->nome}}</p>
                            <div class="foto">
                                <img src="/storage/images/{{$desaparecido->foto}}" alt="Foto desaparecido" class="f" />
                            </div>
                            <div class="descricao">
                                <p class="desaparecidoem">Desaparecido(a) em: {{$desaparecido->dataultimo}}</p>
                                <p class="cidade">Cidade: {{$desaparecido->cidadedes}}</p>
                            </div>
                        </a>
                        <div class="share">
    
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</main>
@endsection