@extends('site.template.index')

@section('content')
    @include('site.product.scrolledproduct')
    <section class="container-miolo margin-top">
        <div class="wrapper">
    @include('site.product.producttitle')
    @include('site.product.productdisplay')
    @include('site.product.productinfo')
    @include('site.product.relatedproducts')
    @include('site.product.ratingsproduct')

        </div>
    </section>


@endsection