<aside class="user-area-menu">
    <strong>
        Olá, {{ Auth::user()->name }}<br>
        <em>
            {{ Auth::user()->email }}
        </em>
    </strong>
    <a href="#" class="logout" title="Sair" onclick="$('#formLogout').submit()">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
    </a>
    <ul>
        <li>
            <a href="meus-pedidos.html" title="Meus Pedidos">
                <i class="fa fa-truck" aria-hidden="true"></i>&nbsp;&nbsp;Meus Pedidos
            </a>
        </li>
        <li>
            <a href="{{ route('site.myaddresses.index') }}" class="{{ activeMenu('site.myaddresses.index|site.myaddresses.create') }}" title="Meus Endereços">
                <i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Meus Endereços
            </a>
        </li>
        <li>
            <a href="{{ route('site.personaldata.index') }}" class="{{ activeMenu('site.personaldata.index') }}" title="Dados Pessoais">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Dados Pessoais
            </a>
        </li>
        <li>
            <a href="{{ route('site.registrationdata.index') }}" class="{{ activeMenu('site.registrationdata.index') }}" title="Dados Cadastrais">
                <i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;Dados Cadastrais
            </a>
        </li>
        <li>
            <a href="minhas-avaliacoes.html" title="Minhas Avaliações">
                <i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp;Minhas Avaliações
            </a>
        </li>
        <li>
            <a href="meus-vales.html" title="Meus Vales">
                <i class="fa fa-ticket" aria-hidden="true"></i>&nbsp;&nbsp;Meus Vales
            </a>
        </li>
    </ul>
</aside>