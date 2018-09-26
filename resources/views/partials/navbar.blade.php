<aside class="logo">
    <a href="{{ route('home') }}">
        <img src="/storage/images/desaparecidos.png" alt="logotipo desaparecidos">
    </a>    
</aside>
<aside class="menu-area">
    <nav class="menu" id="menu">
        @guest
            <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a>
            <a href="{{ route('register') }}"><i class="fa fa-pencil"></i> {{ __('Cadastrar Usuário') }}</a>
            <a href="{{ URL::to('pesquisar') }}"><i class="fa fa-search"></i> Pesquisar Desaparecidos</a>

        @else
        <a href="{{ URL::to('usuario') }}"><i class="fa fa-user"></i> Usuário</a>
        <a href="{{ URL::to('cadastrar') }}"><i class="fa fa-pencil"></i> Cadastrar Desaparecidos</a>
        <a href="{{ URL::to('pesquisar') }}"><i class="fa fa-search"></i> Pesquisar Desaparecidos</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out" align="right"></i> {{ __('Sair') }}
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </a>
        @endguest
        <a class="icon"><i class="fa fa-bars" onclick="expandMenu()"></i></a>
    </nav>
</aside>