@extends('admin.includes.formTemplate')

@section('contentForm')

    <div class="form-row">
        <div class="col-md-2 mb-3">
            <label for="validationServer01">Situação:</label>
            <select class="custom-select" name="active" id="active">
                <option value="1" @isset($data) @if($data->active==1) selected='selected' @endif @endisset>Ativado</option>
                <option value="0" @isset($data) @if($data->active==0) selected='selected' @endif @endisset>Desativado</option>
            </select>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationServer01">Destacado:</label>
            <select class="custom-select" name="featured" id="featured">
                <option value="1" @isset($data) @if($data->featured==1) selected='selected' @endif @endisset>Ativado</option>
                <option value="0" @isset($data) @if($data->featured==0) selected='selected' @endif @endisset>Desativado</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationServer03">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do produto" value="{{ $data->name or '' }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Codigo do Produto</label>
            <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU" value="{{ $data->sku or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">GTIN</label>
            <input type="text" class="form-control" name="gtin" id="gtin" maxlength="14" value="{{ $data->gtin or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">NCM</label>
            <input type="text" class="form-control" name="ncm" id="ncm" maxlength="8" placeholder="NCM" value="{{ $data->ncm or '' }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Preço de Custo</label>
            <input type="text" class="form-control" id="cost_price" name="cost_price" placeholder="R$: 0.00" value="{{ $data->cost_price or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Preço de Venda</label>
            <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="R$: 0.00" value="{{ $data->sell_price or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Preço Promocional</label>
            <input type="text" class="form-control" id="promo_price" name="promo_price" placeholder="R$: 0.00" value="{{ $data->promo_price or '' }}">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Peso Líquido</label>
            <input type="text" class="form-control" id="net_weight" name="net_weight" placeholder="" value="{{ $data->net_weight or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Peso Bruto</label>
            <input type="text" class="form-control" id="gross_weight" name="gross_weight" placeholder="" value="{{ $data->gross_weight or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Data de Validade</label>
            <input type="date" class="form-control" id="validity" name="validity" placeholder="" value="{{ $data->validity or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Condição</label>
            <select class="custom-select" name="condition" id="condition">
                <option value="Novo" @isset($data) @if($data->condition=="Novo") selected='selected' @endif @endisset>Novo</option>
                <option value="Usado" @isset($data) @if($data->condition=="Usado") selected='selected' @endif @endisset>Usado</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Largura</label>
            <input type="text" class="form-control" name="width" id="width" placeholder="Largura" value="{{ $data->width or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Altura</label>
            <input type="text" class="form-control" name="height" id="height" placeholder="Altura" value="{{ $data->height or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Comprimento</label>
            <input type="text" class="form-control" name="lenght" id="lenght" placeholder="Comprimento" value="{{ $data->lenght or '' }}">
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Unidade</label>
            <select class="custom-select" name="unit" id="unit">
                <option value="Milímetro" @isset($data) @if($data->unit=="Milímetro") selected='selected' @endif @endisset>Milímetro
                </option>
                <option value="Centimetro" @isset($data) @if($data->unit=="Centimetro") selected='selected' @endif @endisset>Centimetro
                </option>
                <option value="Metro" @isset($data) @if($data->unit=="Metro") selected='selected' @endif @endisset >Metro
                </option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Fabricante</label>
            <select class="custom-select js-example-basic-single" name="manufacturer_id" id="manufacturer_id">
            </select>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Selecionar Categoria</label>
            <select class="custom-select js-example-basic-single" name="category_id" id="category_id">

            </select>
        </div>
        <div class="col-md-3 mb-3">
            <button type="button" class="btn btn btn-success botao_verde btn_carrega_conteudo botao_novo_ajax"
                    data-toggle="modal" data-target="#exampleModal" id="categoria_ajax">
                Adicionar categoria
            </button>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationServer03">Estoque</label>
            <input type="text" class="form-control" name="stock" id="stock" placeholder="Estoque" value="{{ $data->stock or '' }}">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descrição</label>
        <textarea class="form-control" name="description" id="description"
                  rows="3">{{ $data->description or '' }}</textarea>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="div_conteudo">
                    @include('admin.category.form')
                    <button type="button" class="btn btn-success botao_verde btn_carrega_conteudo" id="save_category" data-dismiss="modal" aria-label="Close">Cadastrar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function listCategory() {
            $.ajax({
                type: 'GET',
                url: '{{ route('api.category.all') }}',
                success: function (data) {
                    const select = $('#category_id');
                    select.empty()
                    $.each(data, function() {
                        let selected = null
                        let id_cat = null
                        @isset($data)
                            id_cat = {{ $data->category_id }}
                        @endisset
                        if (this.id === id_cat) {
                            selected = 'selected="selected"';
                        }
                        select.append($("<option " + selected + " />").val(this.id).text(this.category_name));

                    });
                }
            });
        }
        function listManufacturer() {
            $.ajax({
                type: 'GET',
                url: '{{ route('api.manufacturer.all') }}',
                success: function (data) {
                    const select = $('#manufacturer_id');
                    select.empty()
                    $.each(data, function() {
                        let selected = null
                        let id_cat = null
                        @isset($data)
                            id_cat = {{ $data->manufacturer_id }}
                                @endisset
                        if (this.id === id_cat) {
                            selected = 'selected="selected"';
                        }
                        select.append($("<option " + selected + " />").val(this.id).text(this.manufacturer_name));

                    });
                }
            });
        }
        $(document).ready(function () {
            listManufacturer()
            listCategory()
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#save_category").click(function(e){
            e.preventDefault();
            const category_name = $("#category_name").val();
            const category_class = $("#category_class").val();
            const category_featured = $("#category_featured").val();
            const category_active = $("#category_active").val();
            $.ajax({
                type:'POST',
                url:'{{ route('admin.category.store') }}',
                data:{category_name:category_name, category_class:category_class, category_featured:category_featured, category_active:category_active},
                success:function(){
                    listCategory()
                }
            });
        });
    </script>

@endsection