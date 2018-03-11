<section class="container-miolo margin-top scrolled">
    <div class="wrapper">
        <div class="cart">
            <h2>
                Resumo do Carrinho
            </h2>

            <table class="cart-big" border="1">
                <thead>
                <tr>
                    <td>
                        Produto
                    </td>
                    <td>
                        Preço
                    </td>
                    <td>
                        Qtd.
                    </td>
                    <td>
                    </td>
                    <td>
                        Total
                    </td>
                </tr>
                </thead>
                <tbody id="cartTBody"></tbody>
            </table>


            <div class="full">
                <label>
                    <i class="fa fa-gift" aria-hidden="true"></i>
                    <input type="checkbox">
                    <span>
                                Embrulhar para presente
                            </span>
                </label>

                <form>
                    <i class="fa fa-ticket" aria-hidden="true"></i>
                    <input type="text" placeholder="Cupom de desconto">
                    <button>OK</button>
                </form>

                <div class="frete">
                    <form>
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span>
                                    Calcular valor do frete:
                                </span>
                        <input type="text" placeholder="CEP">
                        <button id="frete-table">OK</button>
                    </form>
                    <em>
                        Frete grátis: Compras acima de R$ 99,90. <a href="#" id="rule">Confira a regra.</a>
                    </em>


                    <table class="valor">
                        <tr>
                            <td>
                                        <span>
                                            Subtotal
                                        </span>
                            </td>
                            <td>
                                        <span id="cartSubtotal">
                                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                        <span>
                                            Descontos
                                        </span>
                            </td>
                            <td>
                                        <span  id="cartDiscount">
                                            {{formatPrice($cartDiscount = - 1)}}
                                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                        <span>
                                            Entrega
                                        </span>
                            </td>
                            <td>
                                        <span  id="cartShipment">
                                            {{formatPrice($cartShipment = 13.4)}}
                                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                        <span>
                                            Total
                                        </span>
                            </td>
                            <td>
                                        <span  id="cartTotal">
                                            R$138,40
                                        </span>
                            </td>
                        </tr>
                    </table>

                    <a href="#" title="Finalizar Pedido" class="btn">
                        Finalizar Pedido
                    </a>

                </div>
            </div>
        </div>

    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        listCartItems()

    });
    function listCartItems()
    {
        $.ajax({
            type: 'GET',
            url: '{{ route('cart.list') }}',
            success: function (data) {
                const formato = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' }
                total = parseFloat(data.total)
                $('#cartSubtotal').html(total.toLocaleString('pt-BR', formato))
                const list = $('#cartTBody');
                list.empty()

                $.each(data.items, function() {
                    let tr = `<tr>
                    <td>
                    <img src="{{asset('images/produto.jpg')}}" alt="Nome do Produto">
                        <span>${this.name}</span>
                        </td>
                        <td>
                        <span>${this.price.toLocaleString('pt-BR', formato)}</span>
                        </td>
                        <td>
                        <span class="input">
                        <input type="text" value="${this.qty}">
                        <div class="plus sign">
                        <i class="fa fa-plus" aria-hidden="true" onClick="updateCartItem('${this.rowId}',${parseInt(this.qty) + 1})"></i>
                        </div>
                        <div class="minus sign">
                        <i class="fa fa-minus" aria-hidden="true" onClick="updateCartItem('${this.rowId}',${parseInt(this.qty) - 1})"></i>
                        </div>

                        </span>
                        </td>
                        <td>
                        <a title="Excluir" class="exclude">
                        <i class="fa fa-times" aria-hidden="true" onClick="removeCartItem('${this.rowId}')"></i>
                        </a>
                        </td>
                        <td>
                        <span>${(this.price * this.qty).toLocaleString('pt-BR', formato)}</span>
                        </td>
                        </tr>`
                    list.append(tr)
                })
                totalCart()
            }
        });
    }
    function totalCart()
    {
        const formato = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' }

        const cartSubtotal = currencyToNumber($('#cartSubtotal').text())
        const cartDiscount = {{$cartDiscount}}
        const cartShipment = {{$cartShipment}}

        cartTotal = cartSubtotal + cartDiscount + cartShipment
        $('#cartTotal').text(

            cartTotal.toLocaleString('pt-BR', formato)
        )

    }
    function currencyToNumber(value)
    {
        return isNaN(value) == false ? parseFloat(value) :   parseFloat(value.replace("R$","").replace(".","").replace(",","."));
    }
    function removeCartItem(item)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('cart.delete') }}',
            data: {item: item},
            success: function () {
                listCartItems()
            }
        });
    }
    function updateCartItem(rowId, qty)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'PUT',
            url: '{{ route('cart.update') }}',
            data: {rowId: rowId, qty: qty},
            success: function () {
                listCartItems()
            }
        });
    }
</script>