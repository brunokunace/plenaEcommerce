<article>
    <div class="editar-endereco">
        <h2><i class="fa fa-home" aria-hidden="true"></i>Editar endereço</h2>
        <form>
            <label>
                <span>Destinatário</span>
                <input type="text">
            </label>
            <label>
                <span>CEP</span>
                <input type="text">
            </label>
            <div class="half">
                <label>
                    <span>Cidade</span>
                    <input type="text">
                </label>
                <label>
                    <span>Estado</span>
                    <input type="text">
                </label>
            </div>
            <label>
                <span>Bairro</span>
                <input type="text">
            </label>
            <div class="half">
                <label>
                    <span>Rua</span>
                    <input type="text">
                </label>
                <label>
                    <span>Número</span>
                    <input type="text">
                </label>
            </div>
            <label>
                <span>Complementos e referências</span>
                <input type="text">
            </label>
            <button>
                Salvar
            </button>
        </form>
    </div>
    @include('admin.includes.alerts')
</article>
