<div class="col-md-2">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" id="include" href="{{ route("{$domain}.create") }}">Incluir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="deleteSelected" href="#">Excluir selecionados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="printSelected" href="#"><strike>Imprimir selecionados</strike></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="exportSelected" href="#"><strike>Exportar dados</strike></a>
        </li>
    </ul>
</div>
<script type="text/javascript">
    $('#deleteSelected').click(function()  {
        $("#deleteSelectedForm").submit();
    });
</script>