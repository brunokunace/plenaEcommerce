@extends('site.template.app')

@section('contentBody')
    @include('site.cart.header')

    @yield('content')

    @include('site.cart.footer')
@endsection