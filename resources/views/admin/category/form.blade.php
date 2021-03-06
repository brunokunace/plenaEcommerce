<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="category_name">Nome</label>
            <input type="text" class="form-control" id="category_name" placeholder="Nome da Categoria" name="category_name" value="{{ $data->category_name or old('category_name') }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="category_icon">Ícone</label>
            <input type="text" class="form-control" id="category_icon" placeholder="Ex.: fa fa-smile-o" name="category_icon" value="{{ $data->category_icon or old('category_icon') }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="class">Classe</label>
            <input type="text" class="form-control" id="category_class" placeholder="Nome da Classe (Ex: saude)" name="category_class" value="{{ $data->category_class or old('category_class') }}">
            <small id="class" class="form-text text-muted">Nome da classe css</small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="featured">Destacado</label>
            <select class="form-control" id="category_featured" name="category_featured">
                <option value="1" @isset($data) @if($data->category_featured==1) selected='selected' @endif @endisset>Ativado</option>
                <option value="0" @isset($data) @if($data->category_featured==0) selected='selected' @endif @endisset>Desativado</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="active">Ativo</label>
            <select class="form-control" id="category_active" name="category_active">
                <option value="1" @isset($data) @if($data->category_active==1) selected='selected' @endif @endisset>Ativado</option>
                <option value="0" @isset($data) @if($data->category_active==0) selected='selected' @endif @endisset>Desativado</option>
            </select>
        </div>
    </div>
</div>