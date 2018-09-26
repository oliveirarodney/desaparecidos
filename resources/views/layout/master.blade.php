@include('partials.head')

<body>
<div id="root">
    <div class="app">
        @include('partials.navbar')
        @yield('content')
        @include('partials.footer')    
    </div>
</div>
</body>
</html>

