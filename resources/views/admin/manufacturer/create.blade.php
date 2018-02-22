@extends('admin.includes.formTemplate')

@section('contentForm')
    <script type="text/javascript">
        function alteraAction(valor) {
            if (valor == "Jurídica") {
                $("#Jurídica").html('' +
                    '<div class="item">' +
                    '<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" role="button" aria-expanded="false" aria-controls="exampleAccordion1" style="margin-left: 100px;" class="colland">' +
                    '<span class="seta-baixo"></span>' +
                    'Exibir mais campos (Opcional)' +
                    '</a>' +
                    '<div id="exampleAccordion1" class="collapse.show" role="tabpanel" style="border-left: 1px solid grey">' +
                    '<p class="mb-3">' +
                    '<div class="row" style="margin-left: 50px;">' +
                    '<div class="col">' +
                    '<label for="type_person" class="colland">Tipo pessoa</label>' +
                    '<select id="type_person" class="form-control form-control-sm col" name="type_person" onChange="alteraAction(this.value)">' +
                    '<option value="Jurídica" @isset($data) @if($data->type_person=="Jurídica") selected="selected" @endif @endisset>Jurídica</option>' +
                    '<option value="Física" @isset($data) @if($data->type_person=="Física") selected="selected" @endif @endisset>Física</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="col">' +
                    '<label for="cnpj" class="colland">CNPJ</label>' +
                    '<input id="cnpj" type="text" class="form-control form-control-sm" placeholder="" name="cnpj" value="{{ $data->cnpj or '' }}">' +
                    '</div>' +
                    '<div class="col-sm-5">' +
                    '<label for="ind_state_registration" class="colland">Indicador de inscrição estadual</label>' +
                    '<select class="form-control form-control-sm" name="ind_state_registration">' +
                    '<option value="Não Contribuinte" @isset($data) @if($data->ind_state_registration=="Não Contribuinte") selected="selected" @endif @endisset>Não Contribuinte</option>' +
                    '<option value="Contribuinte" @isset($data) @if($data->ind_state_registration=="Contribuinte") selected="selected" @endif @endisset>Contribuinte</option>' +
                    '<option value="Contribuinte Isento" @isset($data) @if($data->ind_state_registration=="Contribuinte Isento") selected="selected" @endif @endisset>Contribuinte Isento</option>' +
                    '</select>' +
                    '</div>' +
                    '</div>' +
                    '<div class="row" style="margin-left: 50px;">' +
                    '<div class="col">' +
                    '<label for="company_name" class="colland">Razão Social</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="company_name" value="{{ $data->company_name or '' }}">' +
                    '</div>' +
                    '<div class="col">' +
                    '<label for="state_registration" class="colland">Inscrição Estadual</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="state_registration" value="{{ $data->state_registration or '' }}">' +
                    '</div>' +
                    '<div class="col">' +
                    '<label for="municipal_registration" class="colland">Inscrição Municipal</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="municipal_registration" value="{{ $data->municipal_registration or '' }}">' +
                    '</div>' +
                    '<div class="col">' +
                    '<label for="birthday" class="colland">Aniversário</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="birthday" value="{{ $data->birthday or '' }}">' +
                    '</div>' +
                    '</div>' +
                    '<div class="row" style="margin-left: 50px;">' +
                    '<div class="col-md-3">' +
                    '<label for="foreign_id" class="colland">Identificador estrangeiro</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="foreign_id" value="{{ $data->foreign_id or '' }}">' +
                    '</div>' +
                    '</div>' +
                    '</p>' +
                    '</div>' +
                    '</div>');
            }

            if (valor == "Física") {

                $("#Jurídica").html('' +
                    '<div class="item">' +
                    '<a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion10" role="button" aria-expanded="false" aria-controls="exampleAccordion10" style="margin-left: 100px;" class="colland">' +
                    '<span class="seta-baixo"></span>' +
                    'Exibir mais campos (Opcional)' +
                    '</a>' +
                    '<div id="exampleAccordion10" class="collapse.show" role="tabpanel" style="border-left: 1px solid grey">' +
                    '<p class="mb-3">' +
                    '<div class="row" style="margin-left: 50px;">' +
                    '<div class="col">' +
                    '<label for="type_person" class="colland">Tipo pessoa</label>' +
                    '<select id="type_person" class="form-control form-control-sm col" name="type_person" onChange="alteraAction(this.value)">' +
                    '<option value="Física" @isset($data) @if($data->type_person=="Física") selected="selected" @endif @endisset>Física</option>' +
                    '<option value="Jurídica" @isset($data) @if($data->type_person=="Jurídica") selected="selected" @endif @endisset>Jurídica</option>' +
                    '</select>' +
                    '</select>' +
                    '</div>' +
                    '<div class="col">' +
                    '<label for="cpf" class="colland">CPF</label>' +
                    '<input type="text" id="cpf" class="form-control form-control-sm" placeholder="" name="cpf" value="{{ $data->cpf or '' }}">' +
                    '</div>' +
                    '<div class="col-sm-5">' +
                    '<label for="ind_state_registration" class="colland">Indicador de inscrição estadual</label>' +
                    '<select class="form-control form-control-sm" name="ind_state_registration">' +
                    '<option value="Não Contribuinte" @isset($data) @if($data->type_person=="Não Contribuinte") selected="selected" @endif @endisset>Não Contribuinte</option>' +
                    '<option value="Contribuinte" @isset($data) @if($data->type_person=="Contribuinte") selected="selected" @endif @endisset>Contribuinte</option>' +
                    '<option value="Contribuinte Isento" @isset($data) @if($data->type_person=="Contribuinte Isento") selected="selected" @endif @endisset>Contribuinte Isento</option>' +
                    '</select>' +
                    '</div>' +
                    '<div class="col">' +
                    '<label for="birthday" class="colland">Aniversário</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="birthday" value="{{ $data->birthday or '' }}">' +
                    '</div>' +
                    '</div>' +
                    '<div class="row" style="margin-left: 50px;">' +
                    '<div class="col">' +
                    '<label for="rg" class="colland">RG</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="rg" value="{{ $data->rg or '' }}">' +
                    '</div>' +
                    '<div class="col-md">' +
                    '<label for="foreign_id" class="colland">Identificador estrangeiro</label>' +
                    '<input type="text" class="form-control form-control-sm" placeholder="" name="foreign_id" value="{{ $data->foreign_id or '' }}">' +
                    '</div>' +
                    '</div>' +
                    '</p>' +
                    '</div>' +
                    '</div>');
            }
        }
    </script>
    <label for="name">Nome</label>
    <div class="row">
        <div class="col-md-4">
            <input type="text" class="form-control" id="name" placeholder="Nome do fornecedor" name="name" value="{{ $data->name or '' }}">
        </div>
        <div class="col-md-8"></div>
        <div>
            <div id="Jurídica" data-children=".item">
                <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" role="button"
                       aria-expanded="false" aria-controls="exampleAccordion1" style="margin-left: 100px;" class="colland"
                       onClick="alteraAction('Jurídica')">
                        <span class="seta-baixo"></span> Exibir mais campos (Opcional)
                    </a>
                </div>
            </div>
            <br>
            <div id="exampleAccordion" data-children=".item">
                <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" role="button"
                       aria-expanded="false" aria-controls="exampleAccordion2" class="">
                        <span class="seta-baixo"></span> Informar endereço (Opcional)
                    </a>
                    <div id="exampleAccordion2" class="collapse" role="tabpane2" style="border-left: 1px solid grey">
                        <p class="mb-3">
                        <div class="row" style="margin-left: 50px;">
                            <div class="col">
                                <label for="cep" class="colland">Cep</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="cep" value="{{ $data->cep or '' }}">
                            </div>
                            <div class="col">
                                <label for="street" class="colland">Endereço</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="street" value="{{ $data->street or '' }}">
                            </div>
                            <div class="col">
                                <label for="number" class="colland">Número</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="number" value="{{ $data->number or '' }}">
                            </div>
                            <div class="col">
                                <label for="neighborhood" class="colland">Bairro</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="neighborhood" value="{{ $data->neighborhood or '' }}">
                            </div>
                        </div>
                        <div class="row" style="margin-left: 50px;">
                            <div class="col">
                                <label for="complement" class="colland">Complemento</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="complement" value="{{ $data->complement or '' }}">
                            </div>
                            <div class="col">
                                <label for="city" class="colland">Cidade</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="city" value="{{ $data->city or '' }}">
                            </div>
                            <div class="col">
                                <label for="state" class="colland">Estado</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="state" value="{{ $data->state or '' }}">
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div id="exampleAccordion" data-children=".item">
                <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion3" role="button"
                       aria-expanded="false" aria-controls="exampleAccordion3" class="">
                        <span class="seta-baixo"></span> Informar contato (Opcional)
                    </a>
                    <div id="exampleAccordion3" class="collapse" role="tabpane3" style="border-left: 1px solid grey">
                        <p class="mb-3">
                        <div class="row" style="margin-left: 50px;">
                            <div class="col">
                                <label for="commercial_phone" class="colland">Fone comercial</label>
                                <input type="text" class="form-control form-control-sm" placeholder=""
                                       name="commercial_phone" value="{{ $data->commercial_phone or '' }}">
                            </div>
                            <div class="col">
                                <label for="email" class="colland">Email</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="email" value="{{ $data->email or '' }}">
                            </div>
                            <div class="col">
                                <label for="home_phone" class="colland">Fone residencial</label>
                                <input type="text" class="form-control form-control-sm" placeholder=""
                                       name="home_phone" value="{{ $data->home_phone or '' }}">
                            </div>
                            <div class="col">
                                <label for="cell_phone" class="colland">Celular</label>
                                <input type="text" class="form-control form-control-sm" placeholder="" name="cell_phone" value="{{ $data->cell_phone or '' }}">
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div id="exampleAccordion" data-children=".item">
                <div class="item">
                    <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion4" role="button"
                       aria-expanded="false" aria-controls="exampleAccordion4" class="">
                        <span class="seta-baixo"></span> Descrição (Opcional)
                    </a>
                    <div id="exampleAccordion4" class="collapse" role="tabpane4" style="border-left: 1px solid grey">
                        <p class="mb-3">
                        <div class="row" style="margin-left: 50px;">
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea class="form-control" name="description" id="description" rows="3"
                                          cols="100">{{ $data->description or '' }}</textarea>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection