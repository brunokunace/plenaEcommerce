<section class="container-value">
    <div class="wrapper">
        <div class="produto-infos">
            <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
            <h2>
                {{ $product->name }}
            </h2>
            <a href="carrinho.html" class="button">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </a>
            <span class="value">
               {{ formatPrice($product->sell_price) }}
            </span>
        </div>
    </div>
</section>