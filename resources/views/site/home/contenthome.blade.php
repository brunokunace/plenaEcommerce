<section class="container-miolo">
    <div class="wrapper">
        @include('site.home.bannerfeaturedtop')

        @include('site.home.carrouselbrands')

        @foreach($categories as $category)
            <div class="vitrine {{ $category->category_class }}">
                <div class="pad">
                    <h2>
                        <i class="{{ $category->category_icon }}"
                           aria-hidden="true"></i>&nbsp;{{ $category->category_name }}
                    </h2>
                </div>
                <div class="pad owl-vitrine">
                    @foreach($category->products as $product)
                        <a href="{{ $product->id }}" title="{{ $product->name }}" class="produto">

                            <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
                            <strong>
                                {{ $product->name }}
                            </strong>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                            <div class="bg">
                                <strong>
                                    {{ formatPrice($product->sell_price) }}
                                </strong>
                                <span>
                                  ou em 10x de <strong>R$4,20</strong>
                                </span>
                                <i>Herbia</i>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach

    </div>
</section>