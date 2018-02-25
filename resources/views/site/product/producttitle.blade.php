<div class="titulo-produto">
    <div class="pad">
        <ul>
            <li>
                <a href="/" title="Home">
                    Home
                </a>
            </li>
            <li>
                <a href="#" title="{{ $product->category->category_name }}">
                    {{ $product->category->category_name }}
                </a>
            </li>
            <li>
                <span>
                    {{ $product->name }}
                </span>
            </li>
        </ul>
        <h2>
            {{ $product->name }}
        </h2>
    </div>
</div>