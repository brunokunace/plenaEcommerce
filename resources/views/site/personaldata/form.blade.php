<article>
    <div class="dados-pessoais">
        <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>Dados Pessoais</h2>
        <form method="post" action="{{ route('site.personaldata.update', Auth::user()->id) }}">
            <label><span>Nome</span><input type="text" id="name" name="name" value="{{ $client->name or old('client.name')}}"></label>
            <label><span>Sobrenome</span><input type="text" id="last_name" name="last_name" value="{{ $client->last_name or old('client.last_name')}}"></label>
            <label><span>CPF</span><input type="text" id="cpf" name="cpf" value="{{ $client->cpf or old('client.cpf')}}"></label>
            <label><span>Celular</span><input type="text" id="cell_phone" name="cell_phone" value="{{ $client->cell_phone or old('client.cell_phone')}}"></label>
            <button>Salvar</button>
            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
        </form>
    </div>

    @include('admin.includes.alerts')
</article>