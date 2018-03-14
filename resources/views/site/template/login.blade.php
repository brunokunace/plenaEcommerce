<div class="cover-all">
    <div class="banner-pop" >

        <div class="close">
            <i class="fa fa-window-close-o" aria-hidden="true"></i>
        </div>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <strong>
            cadastre-se para receber<br>
            nossas <b>promoções</b> e<br>
            <b>aproveitar</b> todos os dias!
        </strong>
        <form>
            <input type="text" placeholder="Nome">
            <input type="text" placeholder="E-mail">
            <button>Quero Receber!</button>
        </form>
    </div>
    <div class="login t1" id="t1">
        <div class="close">
            <i class="fa fa-window-close-o" aria-hidden="true"></i>
        </div>

        <strong>
            Use uma das opções para confirmar a sua identidade
        </strong>
        <ul>
            <li>
                <a href="#t2" class="inside" title="Receber chave de acesso por e-mail">
                    Receber chave de acesso por e-mail
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Entrar com Facebook">
                    Entrar com Facebook
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Entrar com Google Plus">
                    Entrar com Google Plus
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#t4" class="inside" title="Entrar com E-mail e Senha">
                    Entrar com E-mail e Senha
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="login t2" id="t2">
        <div class="close">
            <i class="fa fa-window-close-o" aria-hidden="true"></i>
        </div>

        <strong>
            <i class="fa fa-envelope" aria-hidden="true"></i> Por favor informe seu e-mail
        </strong>
        <form>
            <label>
                        <span>
                            E-mail
                        </span>
                <input type="text" placeholder="seu@email.com">
            </label>

            <div class="btns-down">
                <a href="#t1" class="inside" title="Voltar">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar
                </a>
                <button>
                    Continuar
                </button>
            </div>
        </form>
    </div>

    <div class="login t3" id="t3">
        <div class="close">
            <i class="fa fa-window-close-o" aria-hidden="true"></i>
        </div>

        <strong>
            <i class="fa fa-key" aria-hidden="true"></i> Informar chave de acesso
        </strong>
        <form>
            <label>
                        <span>
                            Agora é só informar o codigo recebido em: <br>
                            <strong>seuemail@email.com</strong>
                        </span>
                <input type="password">
            </label>

            <div class="btns-down">
                <a href="#t2" class="inside" title="Voltar">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar
                </a>
                <button>
                    Entrar
                </button>
            </div>
        </form>
    </div>

    <div class="login t4" id="t4">
        <div class="close">
            <i class="fa fa-window-close-o" aria-hidden="true"></i>
        </div>

        <strong>
            <i class="fa fa-lock" aria-hidden="true"></i> Entrar com E-mail e Senha
        </strong>
        <form method="POST" action="{{ route('login.client') }}">
            {{ csrf_field() }}
            <label>
                        <span>
                            E-mail
                        </span>
                <input type="text" placeholder="seu@email.com" name="email">
            </label>
            <label>
                        <span>
                            Senha
                        </span>
                <input type="password" placeholder="password" name="password">
            </label>

            <div class="btns-log">
                <a href="#t2" class="inside" title="Esqueci minha senha">
                    Esqueci minha senha
                </a>

                <a href="#t2" class="inside" title="Não tem uma senha? Cadastre-se">
                    Não tem uma senha? Cadastre-se
                </a>
            </div>

            <div class="btns-down">
                <a href="#t1" class="inside" title="Voltar">
                    <i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar
                </a>
                <button type="submit">
                    Entrar
                </button>
            </div>
        </form>
    </div>
</div>
