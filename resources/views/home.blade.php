@extends('layout.master')
 
@section('content')
<header class="header">
    <div class="row">
        <h1 class="col-xs-12">
            <i class="fa fa-home"></i>
            Início
        </h1>
    </div>
</header>
<main class="container-fluid nopadding">
    <div class="content">
        <div id="home">
            <div class="display-4">Importante</div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <p class="corpotexto">
                        O objetivo do site é criar uma plataforma que auxilie na busca de pessoas desaparecidas, porém é de
                        suma importância que
                        seja registrado um boletim de ocorrência. Caso ainda não tenha sido registrado, você pode fazer o
                        registro online.
                    </p>
                    <p class="corpotexto">
                        Para registrar um boletim de ocorrências online, escolha o estado correspondente e clique no link
                        abaixo:
                    </p>
                </div>
            </div>
            <div class="row delegacias">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div>
                        <select id="estadosdelegacias" onChange="return mostrarDelegacia()">
                            <option>Selecione um estado</option>
                            @foreach($delegacias as $delegacia)
                                <option value="{{$delegacia->delegacia}}">{{$delegacia->estado}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
                <div id="link" class="col-md-12">
                    
                </div>
            </div>
        </div>
    </div>
</main>
@endsection