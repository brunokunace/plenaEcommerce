@extends('admin.template.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form name="loja" id="loja" method="post" action="{{ route('admin.category.store') }}">
                    {!! csrf_field() !!}
                    <label for="name">Nome</label>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name" placeholder="Nome da categoria" name="name">
                        </div>
                        <div class="col-md-2">
                            <select id="active" class="form-control" name="active">
                                <option value="1" selected="">Ativado</option>
                                <option value="0">Desativado</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success botao_verde" type="submit" name="cadastrar_categoria">Cadastrar</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-md-2">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <button type="submit" class="btn btn-link nav-link" name="excluir" value="1">Excluir selecionados</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Imprimir selecionados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Exportar dados</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection