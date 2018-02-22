@extends('admin.template.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @isset($data)
                    <form method="post" action="{{ route($domain.'.update', $data->id) }}">
                    <input name="_method" type="hidden" value="PUT">
                @endisset
                @empty($data)
                    <form method="post" action="{{ route($domain.'.store') }}">
                @endempty
                {!! csrf_field() !!}

                @yield('contentForm')

                <button class="btn btn-success botao_verde" type="submit" name="cadastrar_categoria">Enviar</button>
                </form>
            </div>
            @include('admin.includes.menuright')
        </div>
    </div>

@endsection