@extends('layout.master')
 
@section('content')
<header class="header">
    <div class="row">
        <h1 class="col-xs-12">
            <i class="fa fa-user"></i>
            Desaparecido(a)
        </h1>
    </div>
</header>
<main class="container-fluid nopadding">
    <div class="content">
        <div class="row">
            <div class="col-sm-5 col-md-3">
                <img 
                    src="../storage/images/{{$desaparecido->foto}}" 
                    class="f"
                    alt="Foto {{$desaparecido->nome}}, desaparecido(a) em {{$desaparecido->dataultimo}} na cidade de {{$desaparecido->cidadedes}}, {{$desaparecido->estadodes}}"
                >   
                @if(Auth::check())
                    @if($desaparecido->usuario_id == Auth::user()->id)
                        <div style="display: flex; justify-content: center; ">    
                            <form action="{{ route('edit', ['desaparecido_id'=>$desaparecido->id]) }}">
                                <button class="btn btn-warning" type="submit" style="height: 30px; font-size: 10px !important;"><i class="fa fa-pencil"></i> Editar página</button>
                            </form>
                            <form action="{{ route('excluirDesaparecido', ['desaparecido_id'=>$desaparecido->id]) }}" method="POST"">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger" type="submit" style="margin: 0px 0px 0px 10px; height: 30px; font-size: 10px !important;"><i class="fa fa-trash"></i> Excluir página</button>
                            </form>
                        </div>
                    @endif
                @endif
            </div>
            
            <div class="col-sm-7 col-md-9">
                <h3>{{$desaparecido->nome}}</h3>
                <p><strong>Data de nascimento: </strong>{{$desaparecido->datanasc->format('d/m/Y')}}</p>
                <p><strong>Data do desaparecimento: </strong>{{$desaparecido->dataultimo->format('d/m/Y')}}</p>
                <p><strong>Local do Desaparecimento: </strong>{{$desaparecido->endvistoultimo}} - {{$desaparecido->cidadedes}}/{{$desaparecido->estadodes}}</p>
                <p><strong>Características físicas: </strong>{{$desaparecido->caracteristicasfis}}</p>
                <p><strong>Vestimenta no dia do desaparecimento: </strong>{{$desaparecido->vestimenta}}</p>
            </div>
        </div>
        <hr>
        @if(Auth::check())
        <div>
            <h3>Tem alguma informação? Comente aqui:</h3>
            <form action="{{ route('fazerComentario', ['desaparecido_id'=>$desaparecido->id, 'usuario_id'=>Auth::user()->id]) }}" method="POST">
                {{ csrf_field() }}
                <textArea name="comentario" class="form-control" placeholder="Digite o seu comentário aqui"></textArea>
                <button class="btn btn-primary submit" type="submit">Enviar</button>
            </form>
            <hr>
        </div>
        @endif
        <div>
            <h3>Comentários ({{count($desaparecido->comentarios)}}): </h3>
            <hr>
            @foreach($desaparecido->comentarios as $comentario)
                @foreach($coment as $c)
                    @if($comentario->id === $c->id)
                        <div>
                            <p style="font-size: 12px !important" width="100%">{{$c->user->name}} comentou em {{date('d-m-Y  à\s\  H:i:s', strtotime($c->created_at))}}:</p>
                            <p>{{$c->comentario}}</p>
                            @if(Auth::check())
                                @if($desaparecido->usuario_id === Auth::user()->id)
                                    <form action="{{ route('delete', ['desaparecido_id'=>$desaparecido->id, 'comentario_id'=>$c->id]) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Excluir</button>
                                    </form>
                                @elseif($c->usuario_id === Auth::user()->id)
                                    <form action="{{ route('delete', ['desaparecido_id'=>$desaparecido->id, 'comentario_id'=>$c->id]) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Excluir</button>
                                    </form>
                                @endif
                            @endif
                        </div>
                        <hr>
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
</main>
@endsection