<div class="produto-display" id="value-area">
    <div class="galery">
        <figure>
            <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
        </figure>
        <ul class="thumbs">
            <li>
                <a href="#" title="Nome do Produto">
                    <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
                </a>
            </li>
            <li>
                <a href="#" title="Nome do Produto">
                    <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
                </a>
            </li>
            <li>
                <a href="#" title="Nome do Produto">
                    <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
                </a>
            </li>
            <li>
                <a href="#" title="Nome do Produto">
                    <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
                </a>
            </li>
            <li>
                <a href="#" title="Nome do Produto">
                    <img src="{{ asset('images/produto.jpg') }}" alt="{{ $product->name }}">
                </a>
            </li>
        </ul>
    </div>

    <div class="side-info">
        <div class="preco preco-principal">
            <i class="fa fa-btc" aria-hidden="true"></i>
            <strong>
                {{ formatPrice($product->sell_price) }}
            </strong>
            <div class="tag">
                <strong>
                    7% OFF
                </strong>
            </div>
            <div class="descontos">
                desconto de 7% no bitcoin, 6% via depósito<br>
                ou 5% a vista no boleto | <a href="#" id="mais-formas" title="Mais Formas">Mais Formas</a>
            </div>
        </div>
        <div class="preco preco-cartao">
            <i class="fa fa-credit-card" aria-hidden="true"></i>
            <strong>
                {{ formatPrice($product->sell_price) }}
            </strong>
            <div class="descontos">
                no cartão em até 12x de <strong>R$32,32</strong> ou em <strong>3x sem juros</strong>
            </div>
        </div>

        <div class="bg-wrap">
            <a class="button" id="addToCart">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar Agora
            </a>
            <span class="disponivel">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i> Imediata, em estoque
                            </span>
        </div>
        <div class="bg-wrap frete">
                            <span>
                                <i class="fa fa-truck" aria-hidden="true"></i> Calcule o frete:
                            </span>
            <input type="text">
            <button id="frete-table">OK</button>
        </div>
        <div class="bg-wrap size">
            <strong>
                <i class="fa fa-arrows-alt" aria-hidden="true"></i> Volumes/Tamanhos
            </strong>
            <ul>
                <li>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <img src="{{ asset('images/produto.jpg') }}" alt="10ml">
                    <span>10 ml</span>
                </li>
                <li class="unavailable">
                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                    <img src="{{ asset('images/produto.jpg') }}" alt="10ml">
                    <span>10 ml</span>
                </li>
                <li>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <img src="{{ asset('images/produto.jpg') }}" alt="10ml">
                    <span>10 ml</span>
                </li>
                <li>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <img src="{{ asset('images/produto.jpg') }}" alt="10ml">
                    <span>10 ml</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">

    $("#addToCart, #addToCartScrolled").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('cart.store') }}',
            data: {id: {{$product->id}}},
            success: function () {
                listCartItems()
                toastSuccess()

            }
        });

    });
    function toastSuccess() {
        $.toast({
            heading: 'Adicionado ao Carrinho',
            icon: 'success',
            showHideTransition: 'fade',
            hideAfter: 1500,
            position: 'bottom-right',
            loader: false
        });

    }
</script>