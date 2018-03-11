@extends('site.template.app')

@section('contentBody')
    <!-- Header -->
    @include('site.template.header')
    @include('site.template.socialwidget')

    @yield('content')

    <!-- Footer -->
    @include('site.template.footer')
@endsection