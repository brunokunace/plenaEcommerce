<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="?link=1"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav justified">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.category.index') }}">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.product.index') }}">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.manufacturer.index') }}">Fornecedores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.client.index') }}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="deslogar.php">Deslogar</a>
            </li>



        </ul>
    </div>
</nav>