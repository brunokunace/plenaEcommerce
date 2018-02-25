<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="manufacturer_name">Nome</label>
            <input type="text" class="form-control" id="manufacturer_name" placeholder="Nome do Fabricante" name="manufacturer_name" value="{{ $data->manufacturer_name or '' }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="manufacturer_featured">Destacado</label>
            <select class="form-control" id="manufacturer_featured" name="manufacturer_featured">
                <option value="1" @isset($data) @if($data->manufacturer_featured==1) selected='selected' @endif @endisset>Ativado</option>
                <option value="0" @isset($data) @if($data->manufacturer_featured==0) selected='selected' @endif @endisset>Desativado</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="manufacturer_active">Ativo</label>
            <select class="form-control" id="manufacturer_active" name="manufacturer_active">
                <option value="1" @isset($data) @if($data->manufacturer_active==1) selected='selected' @endif @endisset>Ativado</option>
                <option value="0" @isset($data) @if($data->manufacturer_active==0) selected='selected' @endif @endisset>Desativado</option>
            </select>
        </div>
    </div>
</div>