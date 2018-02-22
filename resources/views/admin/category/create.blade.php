@extends('admin.includes.formTemplate')

@section('contentForm')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Nome da Categoria" name="name" value="{{ $data->name or '' }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="class">Classe</label>
                <input type="text" class="form-control" id="class" placeholder="Nome da Classe (Ex: saude)" name="class" value="{{ $data->class or '' }}">
                <small id="class" class="form-text text-muted">Nome da classe css para selecionar a cor</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="featured">Destacado</label>
                <select class="form-control" id="featured" name="featured">
                    <option value="1" @isset($data) @if($data->featured==1) selected='selected' @endif @endisset>Ativado</option>
                    <option value="0" @isset($data) @if($data->featured==0) selected='selected' @endif @endisset>Desativado</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="active">Ativo</label>
                <select class="form-control" id="active" name="active">
                    <option value="1" @isset($data) @if($data->active==1) selected='selected' @endif @endisset>Ativado</option>
                    <option value="0" @isset($data) @if($data->active==0) selected='selected' @endif @endisset>Desativado</option>
                </select>
            </div>
        </div>
    </div>

@endsection