@extends('layout.master')
 
@section('content')
<header class="header">
    <div class="row">
        <h1 class="col-xs-12">
            <i class="fa fa-search"></i>
            Pesquisar desaparecidos 
        </h1>
    </div>
</header>
<main class="container-fluid nopadding">
    <div class="content">
        <div class="row nopadding display-4">
            <form action="{{route('pesquisar')}}" method="POST">
                {{ csrf_field() }}   
                <div class="col-md-9">
                    <div class="row paddingPadrao" align="center">
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="nome"placeholder="Digite o nome da pessoa"/>
                        </div>
                    </div>

                    <div class="row" align="center">

                        <div class="col-md-6 paddingPadrao">
                            <select class="form-control" name="estados" id="estados">
                                <option value={null}>Selecione um estado</option>
                            </select>
                        </div>
                                
                        <div class="col-md-6 paddingPadrao">
                            <select class="form-control" name="uf" id="cidades">
                                <option value={null}>Selecione uma cidade</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary">Pesquisar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary">Limpar Filtros</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <hr />
        <div class="row resultsearch">
            <div class="col-md-12 paddingPadrao">
                <h3>Lista de pessoas desaparecidas</h3>
            </div>
            <div class="row">
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
    </div>
</main>
@endsection