<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Descrição">
    <meta name="keywords" content="palavras chave, separadas por virgula">
    <meta name="author" content="JuCamillo Web Co.">
    <meta name="viewport" content="width=device-width">
    <meta name="revisit-after" content="1 days">
    <title>Plena Natura - Cosméticos Naturais</title>
    <link rel="stylesheet" href="{{ asset('css/geral.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" >
    <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('js/owl-carousel/owl.theme.css') }}">


</head>
<body>

<!-- Header -->
@include('site.template.header')
@include('site.template.socialwidget')

@yield('content')

<!-- Footer -->
@include('site.template.footer')

<script type="text/javascript" src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

</body>
</html>