<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/boostrap.min.css')}}">
 </head>
<body>
    
    <h2>@yield('header')</h2>
    @yield('conteudo')
    
    <script src="{{asset('js/jquerry-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/boostrap.min.js')}}"></script>
</body>
</html>