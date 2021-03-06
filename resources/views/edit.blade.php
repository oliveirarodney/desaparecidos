@extends('layout.master')
 
@section('content')
<header class="header">
    <div class="row">
        <h1 class="col-xs-12">
            <i class="fa fa-pencil"></i>
            Editar 
        </h1>
    </div>
</header>
<main class="container-fluid nopadding">
    <div class="content">
        <form method="POST" action="{{ route('update', $id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}   
        {{ method_field('PUT') }}
            <div class="row nopadding">
                <div class="col-md-12 register">
                    <label>Nome completo:</label>
                    <input class="form-control" type="text" value="{{$desaparecido->nome}}" name="nome" onChange="" placeholder="Digite o nome da pessoa" />
                </div>
                <div class="col-md-7 register">

                    <div class="row nopadding">
                        <div class="col-md-12 register">
                            <label>Data de nascimento:</label>
                            <input class="form-control" type="date" name="datanasc" value="" onChange="" />
                        </div>

                        <div class="col-md-12 register">
                            <label>Visto por Último:</label>
                            <input class="form-control" type="date" name="dataultimo" />
                        </div>
                    </div>
                    <div class="col-md-12 register">
                        <label>Selecionar foto:</label>
                        <input name="foto" type="file" class="form-control-file" id="upload"/>
                    </div>
                </div>
                <div class="col-md-5 register">
                    <label id="labelFotoSelecionada">Foto do Desaparecido:</label>
                    <img id="img" src="#"
                        alt="Foto da pessoa desaparecida" />
                </div>
            </div>

            <div class="row nopadding">
                <div class="col-md-6 register">
                    <label> Estado em que desapareceu:</label>
                    <select class="form-control" name="estadodes" select="selected" id="estados">
                    </select>
                </div>

                <div class="col-md-6 register">
                    <label> Cidade em que desapareceu:</label>
                    <select class="form-control" name="cidadedes" id="cidades">
                    </select>
                </div>
            </div>

            <div class="row nopadding">
                <div class="col-md-12 register">
                    <label>Local em que foi visto pela última vez</label>
                    <input class="form-control" type="text" name="endvistoultimo" value="{{$desaparecido->endvistoultimo}}"
                        placeholder="Digite um endereço" />
                </div>
            </div>

            <div class="row nopadding">
                <div class="col-md-12 register">
                    <label>Características físicas</label>
                    <textarea class="form-control" name="caracteristicasfis"
                        placeholder="Descreva as características físicas da pessoa desaparecida">{{$desaparecido->caracteristicasfis}}</textarea>
                </div>
            </div>

            <div class="row nopadding">
                <div class="col-md-12 register">
                    <label>Vestimenta</label>
                    <textarea class="form-control" name="vestimenta"
                        placeholder="Roupas usadas no momento do desaparecimento">{{$desaparecido->vestimenta}}</textarea>
                </div>
            </div>

            <div class="row nopadding" align="right">
                <div class="col-md-12 register">
                    <button type="submit" class="btn btn-primary submit">Enviar</button>
                    <!--button class="btn btn-secondary submit">Cancelar</button-->
                </div>
            </div>
        </form>
    </div>
</main>
@endsection