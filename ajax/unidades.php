<br>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 table-responsive">
            <table class="table table-hover table-striped" id="t_unidades">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Numero</th>
                        <th>Nombre</th>
                        <th>Materia</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Numero</th>
                        <th>Nombre</th>
                        <th>Materia</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready( function(){
        $('#t_unidades').tablaHermes({
            urls: '../script/unidades.php',
            col: [
                    { "data": "id" },
                    { "data": "numero" },
                    { "data": "nombre" },
                    { "data": "materia" }
                ],
            nombre_tabla: 'Unidades',
            url_form: '../ajax/form/formulario_unidades.php',
            form_id: 'form_unidades',
            urls_page: '../ajax/unidades.php',
            names: [
                    {"name": "id",      "type": "text",     "ids" : "id_unidades" },
                    {"name": "numero",  "type": "text",     "ids" : "numero_unidades" },
                    {"name": "nombre",   "type": "text",     "ids" : "nombre_unidades" },
                    {"name": "materia", "type": "select",   "ids" : "materia_unidades" }
                ]
        });
    });
</script>