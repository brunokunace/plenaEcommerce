@extends('site.template.index')

@section('content')
    <section class="container-miolo margin-top user-area">
        <div class="wrapper">
            @include('site.panel.lefMenu')
            @include('site.myaddresses.form')
        </div>
    </section>
@endsection