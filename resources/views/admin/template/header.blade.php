<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav justified">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home.index') }}">Home</a>
            </li>
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
        </ul>
    </div>
    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>