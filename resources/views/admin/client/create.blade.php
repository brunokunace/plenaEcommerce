@extends('admin.includes.formTemplate')

@section('contentForm')

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Nome" name="name" value="{{ $data->name or '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="last_name">Sobrenome</label>
                <input type="text" class="form-control" id="last_name" placeholder="Sobrenome" name="last_name" value="{{ $data->last_name or '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ $data->email or '' }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="birthday">Data de Nascimento</label>
                <input type="date" class="form-control" id="birthday" placeholder="Data de Nascimento" name="birthday" value="{{ $data->birthday or '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="sex">Sexo</label>
                <input type="text" class="form-control" id="sex" placeholder="Sexo" name="sex" value="{{ $data->sex or '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" value="{{ $data->cpf or '' }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" placeholder="Telefone" name="phone" value="{{ $data->phone or '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="cell_phone">Celular</label>
                <input type="text" class="form-control" id="cell_phone" placeholder="Celular" name="cell_phone" value="{{ $data->cell_phone or '' }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="sou_barato">Sou Barato</label>
                <input type="text" class="form-control" id="sou_barato" placeholder="Sou Barato" name="sou_barato" value="{{ $data->sou_barato or '' }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="receive_email">Receber Email</label>
                <select class="form-control" id="receive_email" name="receive_email">
                    <option value="1" @isset($data) @if($data->receive_email==1) selected='selected' @endif @endisset>Ativado</option>
                    <option value="0" @isset($data) @if($data->receive_email==0) selected='selected' @endif @endisset>Desativado</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="receive_sms">Receber SMS</label>
                <select class="form-control" id="receive_sms" name="receive_sms">
                    <option value="1" @isset($data) @if($data->receive_sms==1) selected='selected' @endif @endisset>Ativado</option>
                    <option value="0" @isset($data) @if($data->receive_sms==0) selected='selected' @endif @endisset>Desativado</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
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