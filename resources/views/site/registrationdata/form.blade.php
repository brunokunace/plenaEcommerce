<article>
    <div class="dados-cadastrais">
        <h2><i class="fa fa-lock" aria-hidden="true"></i>Dados Cadastrais</h2>
        <form method="post" action="{{ route('site.registrationdata.password') }}">
            <label class="full"><span>E-mail Cadastrado</span><input type="text" id="email" name="email" value="{{ $client->email or old('client.email')}}" required></label>
            <label style="float: left"><span>Nova senha</span><input type="password" name="newPassword"></label>
            <label><span>Confirmar nova senha</span><input type="password" name="confirmPassword"></label>
            <label><span>Senha Atual*</span><input type="password" name="password" @if($client->password) required @endif></label>
            <div class="full"><button>Salvar</button></div>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
        </form>
    </div>
    @include('admin.includes.alerts')
</article>