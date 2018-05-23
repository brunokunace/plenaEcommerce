<article>
    <div class="meus-enderecos">
        <h2><i class="fa fa-home" aria-hidden="true"></i>Meus Endereços</h2>
        <ul>
            @if($myaddresses)
                @foreach($myaddresses as $myaddress)
                    <li>
                        <div class="btns">
                            <a href="editar-endereco.html" title="Editar">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="#" title="Excluir">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                        <strong>
                            {{$myaddress->name}}
                        </strong>
                        <p>
                            {{$myaddress->street}}, {{$myaddress->number}} {{$myaddress->complement}}<br>
                            {{$myaddress->cep}} - {{$myaddress->neighborhood}}<br>
                            {{$myaddress->city}} - {{$myaddress->state}}
                        </p>
                        <label>
                            <input type="radio"> <span>Selecionar como principal</span>
                        </label>
                    </li>
                @endforeach
            @endif
            <li>
                <a href="{{route('site.myaddresses.create')}}" title="Adicionar Novo Endereço">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    <span>Novo Endereço</span>
                </a>
            </li>
        </ul>
    </div>
    @include('admin.includes.alerts')
</article>